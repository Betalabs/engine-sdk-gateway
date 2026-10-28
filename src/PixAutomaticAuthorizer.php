<?php

namespace Betalabs\EngineSdkGateway;

interface PixAutomaticAuthorizer
{
    /**
     * Create the authorization at the gateway, optionally with an immediate
     * payment (see PixAutomaticAuthorization::getImmediatePaymentAmount()).
     *
     * Fills external id, status, QR code, copy and paste and expiration on the
     * given authorization and returns it.
     *
     * @param \Betalabs\EngineSdkGateway\PixAutomaticAuthorization $authorization
     *
     * @return \Betalabs\EngineSdkGateway\PixAutomaticAuthorization
     * @throws \Betalabs\EngineSdkGateway\RefusedTransactionException
     * @throws \Betalabs\EngineSdkGateway\GatewayCommunicatorDoesNotExistsException
     */
    public function authorizePixAutomatic(
        PixAutomaticAuthorization $authorization
    ): PixAutomaticAuthorization;

    /**
     * Query the gateway for the current state of an already created
     * authorization and update its status on the given instance. Used to
     * learn that the payer approved or canceled it, since that may not be
     * notified.
     *
     * @param \Betalabs\EngineSdkGateway\PixAutomaticAuthorization $authorization
     *
     * @return \Betalabs\EngineSdkGateway\PixAutomaticAuthorization
     */
    public function refreshPixAutomaticAuthorization(
        PixAutomaticAuthorization $authorization
    ): PixAutomaticAuthorization;

    /**
     * Cancel the authorization at the gateway. Must be idempotent: canceling
     * an authorization that is already canceled is not an error.
     *
     * @param \Betalabs\EngineSdkGateway\PixAutomaticAuthorization $authorization
     *
     * @return \Betalabs\EngineSdkGateway\PixAutomaticAuthorization
     */
    public function cancelPixAutomaticAuthorization(
        PixAutomaticAuthorization $authorization
    ): PixAutomaticAuthorization;
}
