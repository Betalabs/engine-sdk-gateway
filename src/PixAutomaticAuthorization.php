<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\EngineSdkGateway\Enums\PixAutomaticAmountMode;
use Betalabs\EngineSdkGateway\Enums\PixAutomaticAuthorizationStatus;
use Betalabs\EngineSdkGateway\Enums\PixAutomaticPeriodicity;

/**
 * A Pix Automático authorization: the payer's permission for recurring debits.
 * It plays, for Pix Automático, the role the tokenized card plays for credit
 * cards.
 *
 * Like Transaction, it is implemented by Engine (a persisted model) and the
 * gateway reads what to create from the getters and writes what the gateway
 * answered through the setters.
 */
interface PixAutomaticAuthorization
{
    /**
     * Payable that originated this authorization (the subscription). Customer
     * data and billing address come from its getClient() and
     * getBillingAddress().
     *
     * @return \Betalabs\EngineSdkGateway\Payable
     */
    public function getPayable(): Payable;

    /**
     * Name of the agreement shown to the payer in the bank app.
     *
     * @return string
     */
    public function getContractName(): string;

    /**
     * Description of the agreement shown to the payer in the bank app.
     *
     * @return string
     */
    public function getContractDescription(): string;

    /**
     * First day the authorization is valid.
     *
     * @return \DateTimeInterface
     */
    public function getStartDate(): \DateTimeInterface;

    /**
     * Last day the authorization is valid; null when it has no end.
     *
     * @return \DateTimeInterface|null
     */
    public function getEndDate(): ?\DateTimeInterface;

    /**
     * @return \Betalabs\EngineSdkGateway\Enums\PixAutomaticPeriodicity
     */
    public function getPeriodicity(): PixAutomaticPeriodicity;

    /**
     * Whether a debit that failed for lack of balance may be retried (up to 3
     * times within 7 days after the due date, per BCB rules). Defined once, at
     * authorization time, and cannot be changed afterwards.
     *
     * @return bool
     */
    public function allowsRetries(): bool;

    /**
     * @return \Betalabs\EngineSdkGateway\Enums\PixAutomaticAmountMode
     */
    public function getAmountMode(): PixAutomaticAmountMode;

    /**
     * The fixed amount (FIXED) or the floor (VARIABLE) of each debit.
     *
     * @return float
     */
    public function getAmount(): float;

    /**
     * Amount to be paid in the same bank-app approval that authorizes the
     * debits (the first cycle). Null when the authorization is created without
     * an immediate payment.
     *
     * When there is an immediate payment, the gateway must fill the
     * Transaction of getPayable() the same way Transactioner does for a plain
     * Pix: token, payment code (copy and paste), and a history.
     *
     * @return float|null
     */
    public function getImmediatePaymentAmount(): ?float;

    /**
     * Id of the authorization at the gateway; null before it is created.
     *
     * @return string|null
     */
    public function getExternalId(): ?string;

    /**
     * @return \Betalabs\EngineSdkGateway\Enums\PixAutomaticAuthorizationStatus
     */
    public function getStatus(): PixAutomaticAuthorizationStatus;

    /**
     * @param string $externalId
     */
    public function setExternalId(string $externalId);

    /**
     * @param \Betalabs\EngineSdkGateway\Enums\PixAutomaticAuthorizationStatus $status
     */
    public function setStatus(PixAutomaticAuthorizationStatus $status);

    /**
     * URL of the QR code image the payer reads to approve the authorization.
     *
     * @param string|null $qrCodeUrl
     */
    public function setQrCodeUrl(?string $qrCodeUrl);

    /**
     * QR code payload the payer can paste in the bank app (copy and paste).
     *
     * @param string|null $copyAndPaste
     */
    public function setCopyAndPaste(?string $copyAndPaste);

    /**
     * Moment the payer can no longer approve a pending authorization.
     *
     * @param \DateTimeInterface|null $expiresAt
     */
    public function setExpiresAt(?\DateTimeInterface $expiresAt);

    /**
     * Set gateway response, generally in JSON.
     *
     * @param string $text
     */
    public function setGatewayResponse(string $text);

    /**
     * Persist to database
     *
     * @return void
     */
    public function save();
}
