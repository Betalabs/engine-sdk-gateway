<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\Engine\Contracts\TransactionHistory;

interface PostbackReceivable
{
    /**
     * Gateway receive postback content
     *
     * @param string $token
     * @param array $content
     * @return \Betalabs\Engine\Contracts\TransactionHistory
     */
    public function receive(string $token, array $content): TransactionHistory;
}