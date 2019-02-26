<?php

namespace Betalabs\EngineSdkGateway;

interface Transaction
{
    /**
     * Set token
     *
     * @param string $token
     * @return mixed
     */
    public function setToken(string $token);

    /**
     * Set bank slip url
     *
     * @param string $bankSlipUrl
     * @return mixed
     */
    public function setBankSlipUrl(string $bankSlipUrl);

    /**
     * Set payable for this transaction
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     * @return mixed
     */
    public function setPayable(Payable $payable);

    /**
     * Attach TransactionHistory to this transaction
     *
     * @param \Betalabs\EngineSdkGateway\TransactionHistory $history
     * @return mixed
     */
    public function attachHistory(TransactionHistory $history);

    /**
     * Persist to database
     *
     * @return mixed
     */
    public function save();
}
