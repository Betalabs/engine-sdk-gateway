<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\EngineSdkGateway\Enums\TransactionStatus;

interface TransactionHistory
{
    /**
     * Set transaction status
     *
     * @param \Betalabs\EngineSdkGateway\Enums\TransactionStatus $status
     * @return mixed
     */
    public function setStatus(TransactionStatus $status);

    /**
     * Set gateway respoonse
     *
     * @param string $text
     * @return mixed
     */
    public function setGatewayResponse(string $text);
}