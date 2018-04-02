# dgraph-client

A PHP client for dgraph using gRPC protocol. 

### Installation


Before using this client, we highly recommend that you go through [tour.dgraph.io] and [docs.dgraph.io]
to understand how to run and work with Dgraph.

[docs.dgraph.io]:https://docs.dgraph.io
[tour.dgraph.io]:https://tour.dgraph.io


## Table of contents

- [Install](#install)
- [Using a client](#using-a-client)
  - [Create a client](#create-a-client)
  - [Alter the database](#alter-the-database)
  - [Create a transaction](#create-a-transaction)
  - [Run a mutation](#run-a-mutation)
  - [Run a query](#run-a-query)
  - [Commit a transaction](#commit-a-transaction)
- [Development](#development)
  - [Running tests](#running-tests)

## Install

You'll need PECL installed and install both the sync and grpc packages.
```
sudo pecl install grpc
sudo pecl install sync

```

In your project
```
composer require dgraph

```

## Using a client

### Create a client

`Dgraph` object can be initialised by passing it a list of `DgraphClient` clients as
variadic arguments. Connecting to multiple Dgraph servers in the same cluster allows for better
distribution of workload.

The following code snippet shows just one connection.

```php
$hostname = 'localhost:9080';
$options = [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
];
$client = new DgraphClient($hostname, $options);

$dgraph = new Dgraph([$client]);
```

### Alter the database

To set the schema, create an instance of `Operation` and use the `Alter` endpoint.

```php
$schema = "name: string @index(exact) .";
$operation = new Operation();
$operation->setSchea($schema);

$dgraph->alter($operation);

```

`Operation` contains other fields as well, including `DropAttr` and `DropAll`.
`DropAll` is useful if you wish to discard all the data, and start from a clean
slate, without bringing the instance down. `DropAttr` is used to drop all the data
related to a predicate.

### Create a transaction

To create a transaction, call `DgraphClient::newTxn()`, which returns a `Txn` object. This
operation incurs no network overhead.

It is a good practice to call `Txn::Discard()` using a `finally` statement after it is initialized.
Calling `Txn::Discard()` after `Txn::Commit()` is a no-op and you can call `Txn::Discard()` multiple
times with no additional side-effects.

```php
$txn = $dgraph->newTxn($dgraph);
  try {
    // Do something here
    // ...
  } finally {
    $txn->discard();
  }
```

### Run a mutation

`Txn::mutate()` runs a mutation. It takes in a `Mutation` object,
which provides two main ways to set data: JSON and RDF N-Quad. You can choose
whichever way is convenient.

We're going to use JSON. We will set the properties and values in an array, encode it and use it in `Mutation` object.

```php
// Create data
$personProperties = [
    'id' => '_alice',
    'name' => 'Alice',
];
$person = json_encode($personProperties);

// Run mutation
$mutation = (new Mutation())
    ->setSetJson($person);

$txn->mutate($mutation);
```

Sometimes, you only want to commit mutation, without querying anything further.
In such cases, you can use a `CommitNow` field in `Mutation` object to
indicate that the mutation must be immediately committed.

The `IgnoreIndexConflict` flag can be set to `true` on the `Mutation` object
to not run conflict detection over the index, which would decrease the number
of transaction conflicts and aborts. However, this would come at the cost of
potentially inconsistent upsert operations.

### Run a query

You can run a query by calling `Txn::query($query)`. You will need to pass in a GraphQL+- query string. If
you want to pass an additional map of any variables that you might want to set in the query, call
`Txn::queryWithVars($query, $vars)` with the variables map as third argument.

Let's run the following query with a variable $a:
```php
$query = 'query all($a: string) {
    all(func: eq(name, $a)) {
      name
    }
  }';

$response = $txn->ueryWithVars($query, ['$a' => 'Alice']);

echo $response->getJson();
```

### Commit a transaction

A transaction can be committed using the `Txn::commit()` method. If your transaction
consisted solely of calls to `Txn::query()` or `Txn::queryWithVars()`, and no calls to
`Txn::mutate()`, then calling `Txn::commit()` is not necessary.

An error will be returned if other transactions running concurrently modify the same
data that was modified in this transaction. It is up to the user to retry
transactions when they fail.

```php
$txn = dgraphClient->newTxn();
// Perform some queries and mutations.

$context = $txn->commit();
```

