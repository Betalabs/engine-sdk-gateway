<?php

namespace Betalabs\EngineSdkGateway\Enums;

use Garoevans\PhpEnum\Enum;

/**
 * Canonical status of a Pix Automático authorization.
 *
 * PENDING -> APPROVED | EXPIRED | CANCELED
 * APPROVED -> CANCELED | EXPIRED
 *
 * EXPIRED and CANCELED are final.
 */
class PixAutomaticAuthorizationStatus extends Enum
{
    const __default = 'pending';

    const PENDING  = 'pending';
    const APPROVED = 'approved';
    const EXPIRED  = 'expired';
    const CANCELED = 'canceled';
}
