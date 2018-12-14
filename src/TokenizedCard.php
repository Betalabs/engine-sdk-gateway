<?php

namespace Betalabs\Engine\Integrators;


interface TokenizedCard extends Card
{
    /**
     * Get token from tokenized card instance.
     *
     * @return mixed
     */
    public function getToken();
}