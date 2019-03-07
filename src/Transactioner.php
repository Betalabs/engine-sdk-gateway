<?php

namespace Betalabs\EngineSdkGateway;

interface Transactioner
{
    /**
     * Gateway transact for Payable instance
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     *
     * @return \Betalabs\EngineSdkGateway\Transaction
     * @throws \Betalabs\EngineSdkGateway\RefusedTransactionException
     * @throws \Betalabs\EngineSdkGateway\GatewayCommunicatorDoesNotExistsException
     */
    public function transact(Payable $payable): Transaction;
}
