<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\Engine\Contracts\Transaction;

interface Transactioner
{
    /**
     * Gateway transact for Payable instance
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     *
     * @return \Betalabs\Engine\Contracts\Transaction
     * @throws \Betalabs\EngineSdkGateway\RefusedTransactionException
     * @throws \Betalabs\EngineSdkGateway\GatewayCommunicatorDoesNotExistsException
     */
    public function transact(Payable $payable): Transaction;
}