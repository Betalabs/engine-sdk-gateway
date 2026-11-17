<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\EngineSdkGateway\Enums\PixAutomaticChargeStatus;

/**
 * A Pix Automático scheduled debit (one per cycle), created by
 * PixAutomaticCharger::schedulePixAutomaticCharge.
 *
 * Implemented by Engine (a persisted model), like PixAutomaticAuthorization.
 * The payment itself arrives through the Transaction (a paid Pix); this
 * contract carries what the Transaction cannot: a debit that failed and why
 * (lack of balance, refused by the bank, canceled), so Engine knows whether to
 * retry it.
 */
interface PixAutomaticCharge
{
    /**
     * Id of the scheduled debit at the gateway: the token of the cycle's
     * Transaction.
     *
     * @return string|null
     */
    public function getExternalId(): ?string;

    /**
     * @return \Betalabs\EngineSdkGateway\Enums\PixAutomaticChargeStatus
     */
    public function getStatus(): PixAutomaticChargeStatus;

    /**
     * @param \Betalabs\EngineSdkGateway\Enums\PixAutomaticChargeStatus $status
     */
    public function setStatus(PixAutomaticChargeStatus $status);

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
