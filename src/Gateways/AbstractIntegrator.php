<?php

namespace Betalabs\EngineSdkGateway\Gateways;


use Betalabs\EngineSdkGateway\Card;
use Betalabs\EngineSdkGateway\Payable;

class AbstractIntegrator
{

    /**
     * Check if card must be tokenized by user choice or by Payable instance
     * requirement.
     *
     * @param \Betalabs\EngineSdkGateway\Payable $payable
     *
     * @return bool
     */
    protected function mustTokenizeCard(Payable $payable)
    {
        return $payable->getPaymentMethod()->isCard()
            && $payable->getCard() instanceof Card
            && ($payable->getCard()->mustBeTokenized() || $payable->requiresTokenization());
    }
}
