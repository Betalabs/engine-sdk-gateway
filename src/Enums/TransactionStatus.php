<?php

namespace Betalabs\EngineSdkGateway;

use Garoevans\PhpEnum\Enum;

class TransactionStatus extends Enum
{
    const __default = 'waiting payment';

    const PAID              = 'paid';
    const PROCESSING        = 'processing';
    const AUTHORIZED        = 'authorized';
    const WAITING_PAYMENT   = 'waiting payment';
    const CANCELED          = 'canceled';
    const REFUNDED          = 'refunded';
    const PENDING_REFUND    = 'pending refund';
    const REFUSED           = 'refused';
    const CHARGEBACK        = 'chargeback';
}
