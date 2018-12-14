<?php

namespace Betalabs\Engine\Integrators;


interface CardHolder
{
    /**
     * Get holder's key.
     *
     * @return mixed
     */
    public function getKey();

    /**
     * Get model instance related to holder.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getHolderModel();
}