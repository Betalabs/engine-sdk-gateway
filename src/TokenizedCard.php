<?php

namespace Betalabs\EngineSdkGateway;


interface TokenizedCard extends Card
{
    /**
     * Get token from tokenized card instance.
     *
     * @return mixed
     */
    public function getToken();

    /**
     * Get number of installments.
     *
     * @return int
     */
    public function getInstallments(): int;
}
