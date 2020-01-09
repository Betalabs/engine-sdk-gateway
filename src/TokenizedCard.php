<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\Engine\Contracts\PaymentGateway;

interface TokenizedCard extends Card
{
    /**
     * Get token from tokenized card instance.
     *
     * @param \Betalabs\Engine\Contracts\PaymentGateway $paymentGateway
     *
     * @return string
     */
    public function getToken(PaymentGateway $paymentGateway): string;
}
