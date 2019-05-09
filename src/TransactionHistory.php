<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\EngineSdkGateway\Enums\TransactionStatus;

interface TransactionHistory
{
    /**
     * Set transaction status.
     *
     * @param \Betalabs\EngineSdkGateway\Enums\TransactionStatus $status
     */
    public function setStatus(TransactionStatus $status);

    /**
     * Set gateway respoonse, generally in JSON.
     *
     * @param string $text
     */
    public function setGatewayResponse(string $text);

    /**
     * Get gateway response, generally in JSON.
     *
     * @return string
     */
    public function getGatewayResponse();
}
