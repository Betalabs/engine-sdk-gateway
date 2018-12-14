<?php

namespace Betalabs\Engine\Integrators\Gateways;


use Betalabs\Engine\Integrators\Payable;

class AbstractIntegrator
{

    /**
     * Check if card must be tokenized by user choice or by Payable instance
     * requirement.
     *
     * @param \Betalabs\Engine\Integrators\Payable $payable
     *
     * @return bool
     */
    protected function mustTokenizeCard(Payable $payable)
    {
        return $payable->getPaymentMethod()->isCard()
            && ($payable->getCard()->mustBeTokenized() || $payable->requiresTokenization());
    }
}