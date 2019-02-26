<?php

namespace Betalabs\EngineSdkGateway;


interface PayableItem
{
    /**
     * Getter of ID
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Getter of gateway ID
     *
     * @return int
     */
    public function getGatewayId(): int;

    /**
     * Getter of name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Getter of unitPrice
     *
     * @return float
     */
    public function getUnitPrice(): float;

    /**
     * Getter of quantity
     *
     * @return float
     */
    public function getQuantity(): float;
}
