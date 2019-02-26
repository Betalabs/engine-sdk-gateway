<?php

namespace Betalabs\EngineSdkGateway;


interface Tokenizer
{
    /**
     * Tokenize card instance with gateway.
     *
     * @param \Betalabs\EngineSdkGateway\Card $card
     *
     * @return \Betalabs\EngineSdkGateway\TokenizedCard
     */
    public function tokenize(Card $card): TokenizedCard;
}
