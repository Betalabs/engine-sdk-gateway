<?php

namespace Betalabs\EngineSdkGateway;


use Betalabs\Engine\Contracts\Transaction;

interface Refunder
{
    /**
     * Gateway refund for Payable instance
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     *
     * @return \Betalabs\Engine\Contracts\Transaction
     */
    public function refund(Payable $payable): Transaction;
}