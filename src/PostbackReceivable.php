<?php

namespace Betalabs\EngineSdkGateway;

interface PostbackReceivable
{
    /**
     * Gateway receive postback content
     *
     * @param array $content
     * @param string $token
     * @return \Betalabs\EngineSdkGateway\TransactionHistory|null
     */
    public function receive(array $content, string $token = ''): ?TransactionHistory;

    /**
     * If the gateway needs to return a specific status code, return the code here. Otherwise, return null.
     *
     * @return int|null
     */
    public function getStatusCode(): ?int;
}
