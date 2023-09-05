<?php

abstract class Phone
{
    protected string $brand;
    protected string $name;
    protected int $price;
    protected int $stock;

    function __construct($brand, $name, $price, $stock)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    abstract public function getBrandInfo(): string;
    public function getPhoneInfo(): string
    {
        return "{$this->brand} {$this->name} with price Rp{$this->price} has {$this->stock} stock\n";
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}
