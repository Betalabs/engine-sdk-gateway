<?php

namespace Betalabs\EngineSdkGateway\Enums;

use Garoevans\PhpEnum\Enum;

/**
 * Canonical status of a Pix Automático scheduled debit (one per cycle).
 *
 * ACTIVE -> PAID | EXPIRED | REJECTED | CANCELED
 * EXPIRED -> ACTIVE (a retry reuses the same scheduled debit)
 *
 * EXPIRED: the debit failed for lack of balance; the only retryable failure.
 * REJECTED: the payer's bank refused it. CANCELED: canceled by the payer or by
 * the receiver before the debit date. PAID, REJECTED and CANCELED are final.
 */
class PixAutomaticChargeStatus extends Enum
{
    const __default = 'active';

    const ACTIVE   = 'active';
    const PAID     = 'paid';
    const EXPIRED  = 'expired';
    const REJECTED = 'rejected';
    const CANCELED = 'canceled';
}
