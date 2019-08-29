<?php

namespace Betalabs\EngineSdkGateway;

use Illuminate\Http\Request;

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
     * Validate postback content
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    public function validate(Request $request): bool;

    /**
     * If the gateway needs to return a specific status code, return the code here. Otherwise, return null.
     *
     * @return int|null
     */
    public function getStatusCode(): ?int;
}
