<?php

namespace Betalabs\EngineSdkGateway\Enums;

use Garoevans\PhpEnum\Enum;

/**
 * How the amount of each Pix Automático debit is constrained.
 *
 * - FIXED: every debit has exactly the authorization amount.
 * - VARIABLE: the authorization amount is a floor; the payer sets a ceiling in
 *   the bank app and any debit up to that ceiling is allowed.
 */
class PixAutomaticAmountMode extends Enum
{
    const __default = 'fixed';

    const FIXED    = 'fixed';
    const VARIABLE = 'variable';
}
