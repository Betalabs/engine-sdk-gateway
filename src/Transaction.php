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
     * Set payment code
     *
     * @param string $bankSlipUrl
     */
    public function setPaymentCode(string $paymentCode);

    /**
     * Set payable for this transaction
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     */
    public function setPayable(Payable $payable);

    /**
     * Get payable for this transaction
     *
     * @return \Betalabs\EngineSdkGateway\Payable
     */
    public function getPayable();

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
     * Set authorization code to this transaction.
     *
     * @return $this
     */
    public function setAuthorizationCode(string $authorizationCode);

        /**
     * Persist to database
     *
     * @return void
     */
    public function save();
}
