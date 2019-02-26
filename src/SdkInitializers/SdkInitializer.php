<?php

namespace Betalabs\EngineSdkGateway\SdkInitializers;

interface SdkInitializer
{
    /**
     * Initializer of PaymentGateway SDK, need to set 'api_key' in array
     *
     * @param array $params
     */
    public function init(array $params);
}
