<?php

namespace Betalabs\EngineSdkGateway;

interface Refunder
{
    /**
     * Gateway refund for Payable instance
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     *
     * @return \Betalabs\EngineSdkGateway\Transaction
     */
    public function refund(Payable $payable): Transaction;
}
