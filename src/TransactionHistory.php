<?php

namespace Betalabs\EngineSdkGateway;

interface TransactionHistory
{
    /**
     * Set transaction status
     *
     * @param \Betalabs\EngineSdkGateway\TransactionStatus $status
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
