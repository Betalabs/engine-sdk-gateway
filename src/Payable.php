<?php

namespace Betalabs\EngineSdkGateway;

use Betalabs\Engine\Contracts\Client;
use Betalabs\Engine\Contracts\Address;
use Betalabs\Engine\Contracts\PaymentMethod;
use Betalabs\Engine\Contracts\Installment;
use Betalabs\Engine\Contracts\PaymentGateway;
use Betalabs\Engine\Contracts\CreditCard;
use Illuminate\Support\Collection;

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
     * Getter of Cards
     *
     * @return \Betalabs\EngineSdkGateway\Card[]|\Betalabs\EngineSdkGateway\TokenizedCard[]|\Betalabs\Engine\Contracts\CreditCard[]
     */
    public function getCards(): array;

    /**
     * Getter of Installment
     *
     * @return \Betalabs\Engine\Contracts\Installment
     */
    public function getInstallment(): Installment;

     /**
     * Getter of Installments
     *
     * @return \Betalabs\Engine\Contracts\CreditCard
     */
    public function getInstallments(): CreditCard;

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
     * @return \Betalabs\EngineSdkGateway\Transaction
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
     * Must return discount amount from payable instance.
     *
     * @return float
     */
    public function getInsuranceAmount(): float;

    /**
     * Must return discount amount from payable instance.
     *
     * @return float
     */
    public function getOtherCostsAmount(): float;

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

    /**
     * Define if payment details must be informed explicitly in transaction.
     *
     * @return bool
     */
    public function mustInformExplicitlyPaymentDetails(): bool;

    /**
     * Setter of payload
     *
     * @param array $payload
     */
    public function setPayload(array $payload);

    /**
     * Getter of payload
     *
     * @return array
     */
    public function getPayload(): array;
    
    /**
     * Related payables collection setter.
     *
     * @param \Betalabs\EngineSdkGateway\Payable[]|\Illuminate\Support\Collection $relatedPayables
     *
     * @return Payable
     */
    public function setRelatedPayables(Collection $relatedPayables);
    
    
    /**
     * Related payables collection getter.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getRelatedPayables(): Collection;
}
