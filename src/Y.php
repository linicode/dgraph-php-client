<?php

namespace Linicode\DgraphPHP;

use Api\LinRead;
use Grpc\UnaryCall;

class Y
{

    /**
     * @param \Api\LinRead $dst
     * @param \Api\LinRead $src
     */
    public static function mergeLinReads(LinRead $dst, LinRead $src)
    {
        if ($src == null || !$src->getIds()) {
            return;
        }
        if (!$dst->getIds()) {
            $ids = [];
            $dst->setIds($ids);
        }

        foreach ($src->getIds() as $gid => $sid) {
            $dstIds = $dst->getIds();
            if (!isset($dstIds[$gid]) || $dstIds[$gid] < $sid) {
                $dstIds[$gid] = $sid;
                $dst->setIds($dstIds);
            }
        }
    }

    /**
     * @param \Grpc\UnaryCall $call
     *
     * @return mixed
     *
     * @throws \Linicode\DgraphPHP\CallException
     */
    public static function handleResponse(UnaryCall $call)
    {
        $response = $call->wait();
        if (empty($response[0])) {
            throw new CallException(!empty($response[1]->details) ? $response[1]->details : 'Dgraph call error');
        }
        return $response[0];
    }

}