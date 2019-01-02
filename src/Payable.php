<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\Engine\Contracts\Client;
use Betalabs\Engine\Contracts\Address;
use Betalabs\Engine\Contracts\PaymentMethod;
use Betalabs\Engine\Contracts\Transaction;
use Betalabs\Engine\Contracts\Installment;
use Betalabs\Engine\Contracts\PaymentGateway;
use Illuminate\Support\Collection;

/**
 * Interface Payable
 *
 * @property-read \Betalabs\Engine\Contracts\Transaction $transaction
 *
 * @package App\Integrators
 */
interface Payable
{
    /**
     * Getter of id
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Getter of PaymentGateway
     *
     * @return \Betalabs\Engine\Contracts\PaymentGateway
     */
    public function getPaymentGateway(): PaymentGateway;

    /**
     * Getter of Card
     *
     * @return \Betalabs\EngineSdkGateway\Card|\Betalabs\EngineSdkGateway\TokenizedCard|\Betalabs\Engine\Contracts\CreditCard
     */
    public function getCard(): ?Card;

    /**
     * Getter of Installment
     *
     * @return \Betalabs\Engine\Contracts\Installment
     */
    public function getInstallment(): Installment;

    /**
     * Getter of Client
     *
     * @return \Betalabs\Engine\Contracts\Client
     */
    public function getClient(): Client;

    /**
     * Getter of billing Address
     *
     * @return \Betalabs\Engine\Contracts\Address
     */
    public function getBillingAddress(): Address;

    /**
     * Getter of shipping Address
     *
     * @return \Betalabs\Engine\Contracts\Address
     */
    public function getShippingAddress(): Address;

    /**
     * Getter of PayableItems
     *
     * @return \Illuminate\Support\Collection
     */
    public function getItems(): Collection;

    /**
     * Getter of Transaction
     *
     * @return \Betalabs\Engine\Contracts\Transaction
     */
    public function getTransaction(): Transaction;

    /**
     * Getter of PaymentMethod
     *
     * @return \Betalabs\Engine\Contracts\PaymentMethod
     */
    public function getPaymentMethod(): PaymentMethod;

    /**
     * Must return freight amount from payable instance.
     *
     * @return float
     */
    public function getFreightAmount(): float;

    /**
     * Must return discount amount from payable instance.
     *
     * @return float
     */
    public function getDiscountAmount(): float;

    /**
     * Check if Payable requires card's tokenization by default.
     *
     * @return bool
     */
    public function requiresTokenization(): bool;

    /**
     * Get child Payable instances (i.e: child Orders from a Subscription).
     *
     * @return null|\Illuminate\Support\Collection|\Betalabs\EngineSdkGateway\Payable[]
     */
    public function getChildPayables(): ?Collection;

    /**
     * Define if must cancel after some transaction related to this payable
     * object was reproved.
     *
     * @return bool
     */
    public function mustCancelReprovedTransaction(): bool;
}