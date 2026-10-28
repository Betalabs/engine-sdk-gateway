<?php

namespace Betalabs\EngineSdkGateway\Enums;

use Garoevans\PhpEnum\Enum;

/**
 * Recurrence periodicities defined by the Central Bank of Brazil (BCB) for
 * Pix Automático. Every gateway must translate them to its own vocabulary.
 */
class PixAutomaticPeriodicity extends Enum
{
    const __default = 'monthly';

    const WEEKLY     = 'weekly';
    const MONTHLY    = 'monthly';
    const QUARTERLY  = 'quarterly';
    const SEMIANNUAL = 'semiannual';
    const ANNUAL     = 'annual';
}
