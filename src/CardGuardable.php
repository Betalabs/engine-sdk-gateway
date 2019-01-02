<?php

namespace Betalabs\EngineSdkGateway;

interface CardGuardable
{
    /**
     * Save Card action
     *
     * @param \Betalabs\EngineSdkGateway\Card $card
     *
     * @return \Betalabs\EngineSdkGateway\TokenizedCard
     */
    public function guard(Card $card): TokenizedCard;
}