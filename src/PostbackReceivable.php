<?php

namespace Betalabs\EngineSdkGateway;

interface PostbackReceivable
{
    /**
     * Gateway receive postback content
     *
     * @param string $token
     * @param array $content
     * @return \Betalabs\EngineSdkGateway\TransactionHistory|null
     */
    public function receive(string $token, array $content): ?TransactionHistory;

    /**
     * If the gateway needs to return a specific status code, return the code here. Otherwise, return null.
     *
     * @return int|null
     */
    public function getStatusCode(): ?int;
}
