<?php

namespace App\Http\Services;

use Thrift\BatchMutation;
use Thrift\Transport\TSocket;
use Thrift\Transport\TBufferedTransport;
use Thrift\Protocol\TBinaryProtocol;
use Thrift\HbaseClient;
use Thrift\TScan;

class ThriftService{
    public function thrift() {

        $thrift_config = Config('thrift')[Config('app')['env']];
        $socket = new TSocket($thrift_config['host'], $thrift_config['port']);
        $socket->setSendTimeout(20000);
        $socket->setRecvTimeout(30000);
        $transport = new TBufferedTransport($socket, 1024, 1024);
        $protocol = new TBinaryProtocol($transport);
        $client = new HbaseClient($protocol);

        $transport->open();
        //同步方式进行交互

        $transport->close();
    }

    public function addRow() {
        $data = [
            [
                'title' => 'test',
                'content' => '测试',
            ]
        ];
        $thrift_config = Config('thrift')[Config('app')['env']];
        $socket = new TSocket($thrift_config['host'], $thrift_config['port']);
        $socket->setSendTimeout(20000);
        $socket->setRecvTimeout(30000);
        $transport = new TBufferedTransport($socket, 1024, 1024);
        $protocol = new TBinaryProtocol($transport);
        $client = new HbaseClient($protocol);
//        dd(method_exists($client, 'mutateRows'));
        $transport->open();

        $attributes = array();

        $batchMutation = [];
        $data = array_reverse($data, true);
        foreach ($data as $line => $item) {
            // 生成rowkey
            if ($line <= 4) {
                $rowkey = 93 . (99999999999 - time()) . '00000' . ($line + 1);
            } else {
                $rowkey = 93 . (99999999999 - time()) . rand(100000, 999999);
            }
            // 生成列族
            $mutations = [];
            foreach ($item as $k => $v) {
                $mutations[$k] = new \Thrift\Mutation(['column' => 'info:'.$k, 'value' => $v]);
             }

            $batchMutation[] = new BatchMutation([
                'row' => $rowkey,
                'mutations' => $mutations
            ]);
        }
        //
        if (count($batchMutation) > 0) {
            $client->mutateRows($thrift_config['list_table'], $batchMutation, []);
         }
        // 插入一条end
        $transport->close();
    }
}