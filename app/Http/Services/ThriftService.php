<?php

namespace App\Http\Services;

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
        $arr = $client->getRows('mytable', ['first'], []);

        $transport->close();
        dd($arr);
    }
}