<?php

namespace Betalabs\Engine\Integrators;

use Betalabs\Engine\Contracts\Transaction;

interface Transactioner
{
    /**
     * Gateway transact for Payable instance
     *
     * @param \Betalabs\Engine\Integrators\Payable $payable
     *
     * @return \Betalabs\Engine\Contracts\Transaction
     * @throws \Betalabs\Engine\Integrators\RefusedTransactionException
     * @throws \Betalabs\Engine\Integrators\GatewayCommunicatorDoesNotExistsException
     */
    public function transact(Payable $payable): Transaction;
}