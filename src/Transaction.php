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
     * Set merchant id
     *
     * @param string $merchantId
     */
    public function setMerchantId(string $merchantId);

    /**
     * Get merchant id
     *
     * @return string
     */
    public function getMerchantId();


    /**
     * Set merchant key
     *
     * @param string $merchantKey
     */
    public function setMerchantKey(string $merchantKey);

    /**
     * Get token
     *
     * @return string
     */
    public function getMerchantKey();


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
    public function setAuthorizationCode(?string $authorizationCode);

    /**
     * Set nsu to this transaction.
     *
     * @return $this
     */
    public function setNsu(?string $nsu);

    /**
     * Persist to database
     *
     * @return void
     */
    public function save();
}
