<?php

namespace Betalabs\Engine\Integrators;


use Betalabs\Engine\Contracts\Transaction;

interface Refunder
{
    /**
     * Gateway refund for Payable instance
     *
     * @param \Betalabs\Engine\Integrators\Payable $payable
     *
     * @return \Betalabs\Engine\Contracts\Transaction
     */
    public function refund(Payable $payable): Transaction;
}