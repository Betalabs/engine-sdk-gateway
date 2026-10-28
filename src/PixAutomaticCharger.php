<?php

namespace Betalabs\EngineSdkGateway;

interface PixAutomaticCharger
{
    /**
     * Schedule the debit of one cycle against an approved authorization.
     *
     * Unlike Transactioner::transact(), nothing is paid when this returns: the
     * debit happens on $dueDate, so the returned Transaction is "waiting
     * payment" and its final status arrives later.
     *
     * The amount and the reference come from the payable, as in transact().
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     * @param \Betalabs\EngineSdkGateway\PixAutomaticAuthorization $authorization
     * @param \DateTimeInterface $dueDate Day the payer's account is debited.
     * @param string $description Text the payer sees in the bank app for this debit.
     *
     * @return \Betalabs\EngineSdkGateway\Transaction
     * @throws \Betalabs\EngineSdkGateway\RefusedTransactionException
     * @throws \Betalabs\EngineSdkGateway\GatewayCommunicatorDoesNotExistsException
     */
    public function schedulePixAutomaticCharge(
        Payable $payable,
        PixAutomaticAuthorization $authorization,
        \DateTimeInterface $dueDate,
        string $description
    ): Transaction;

    /**
     * Retry a scheduled debit that failed for lack of balance, for a new date.
     * Only valid when the authorization allows retries.
     *
     * A debit refused for any other reason is not retryable and must not reach
     * this method. When reporting a failed debit, the gateway must set the
     * history's status reason so the Engine can tell "no balance" (retryable)
     * from "rejected" (not retryable).
     *
     * @param \Betalabs\EngineSdkGateway\Transaction $transaction Transaction returned by schedulePixAutomaticCharge().
     * @param \DateTimeInterface $date New debit date, after the original due date.
     *
     * @return \Betalabs\EngineSdkGateway\Transaction
     * @throws \Betalabs\EngineSdkGateway\RefusedTransactionException
     */
    public function retryPixAutomaticCharge(
        Transaction $transaction,
        \DateTimeInterface $date
    ): Transaction;

    /**
     * Cancel a scheduled debit before it happens. Must be idempotent.
     *
     * @param \Betalabs\EngineSdkGateway\Transaction $transaction Transaction returned by schedulePixAutomaticCharge().
     *
     * @return \Betalabs\EngineSdkGateway\Transaction
     */
    public function cancelPixAutomaticCharge(Transaction $transaction): Transaction;
}
