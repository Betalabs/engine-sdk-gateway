<?php

namespace Betalabs\EngineSdkGateway;


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