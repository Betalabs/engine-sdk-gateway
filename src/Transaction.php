<?php

namespace Betalabs\EngineSdkGateway;

interface Transaction
{
    /**
     * Set token
     *
     * @param string $token
     */
    public function setToken(string $token);

    /**
     * Get token
     *
     * @return string
     */
    public function getToken();

    /**
     * Set bank slip url
     *
     * @param string $bankSlipUrl
     */
    public function setBankSlipUrl(string $bankSlipUrl);

    /**
     * Set payable for this transaction
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     */
    public function setPayable(Payable $payable);

    /**
     * Attach TransactionHistory to this transaction
     *
     * @param \Betalabs\EngineSdkGateway\TransactionHistory $history
     */
    public function attachHistory(TransactionHistory $history);

    /**
     * Returns the last transaction history.
     *
     * @return \Betalabs\EngineSdkGateway\TransactionHistory
     */
    public function getLastHistory();

    /**
     * Persist to database
     *
     * @return void
     */
    public function save();
}
