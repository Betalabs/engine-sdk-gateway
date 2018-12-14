<?php

namespace Betalabs\Engine\Integrators;

interface CardGuardable
{
    /**
     * Save Card action
     *
     * @param \Betalabs\Engine\Integrators\Card $card
     *
     * @return \Betalabs\Engine\Integrators\TokenizedCard
     */
    public function guard(Card $card): TokenizedCard;
}