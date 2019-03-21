<?php

namespace Betalabs\EngineSdkGateway;

interface Card
{
    /**
     * Card holder's getter.
     *
     * @return \Betalabs\EngineSdkGateway\CardHolder|null
     */
    public function getHolder(): ?CardHolder;

    /**
     * Card holder's setter.
     *
     * @param \Betalabs\EngineSdkGateway\CardHolder $cardHolder
     *
     * @return $this
     */
    public function setHolder(CardHolder $cardHolder);

    /**
     * Getter of expirationDate
     *
     * @return mixed
     */
    public function getExpirationDate(): string;

    /**
     * Setter of expirationDate
     *
     * @param mixed $expirationDate
     */
    public function setExpirationDate(string $expirationDate);

    /**
     * Getter of number
     *
     * @return mixed
     */
    public function getNumber(): string;

    /**
     * Setter of number
     *
     * @param mixed $number
     */
    public function setNumber(string $number);

    /**
     * Getter of cvv
     *
     * @return mixed
     */
    public function getCvv(): string;

    /**
     * Setter of cvv
     *
     * @param mixed $cvv
     */
    public function setCvv(string $cvv);

    /**
     * Getter of holderName
     *
     * @return mixed
     */
    public function getHolderName(): string;

    /**
     * Setter of holderName
     *
     * @param mixed $holderName
     */
    public function setHolderName(string $holderName);

    /**
     * Getter of brand
     *
     * @return mixed
     */
    public function getBrand(): string;

    /**
     * Setter of brand
     *
     * @param mixed $brand
     */
    public function setBrand(string $brand);

    /**
     * Getter of mustBeTokenized
     *
     * @return bool
     */
    public function mustBeTokenized(): bool;

    /**
     * Setter of mustBeTokenized
     *
     * @param bool $mustBeTokenized
     */
    public function setMustBeTokenized(bool $mustBeTokenized);

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
}
