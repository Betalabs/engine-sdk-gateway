<?php

namespace Betalabs\EngineSdkGateway;

interface PostbackReceivable
{
    /**
     * Gateway receive postback content
     *
     * @param string $token
     * @param array $content
     * @return \Betalabs\EngineSdkGateway\TransactionHistory
     */
    public function receive(string $token, array $content): TransactionHistory;
}
