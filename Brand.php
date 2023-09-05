<?php

require "Phone.php";

class Samsung extends Phone
{
    public function __construct($name, $price, $stock)
    {
        $brand = "Samsung";
        parent::__construct($brand, $name, $price, $stock);
    }

    public function getBrandInfo(): string
    {
        return "{$this->brand} is a brand from South Korea blablaba";
    }
}

class Redmi extends Phone
{
    public function __construct($name, $price, $stock)
    {
        $brand = "Redmi";
        parent::__construct($brand, $name, $price, $stock);
    }

    public function getBrandInfo(): string
    {
        return "{$this->brand} is a brand from China blablaba";
    }
}

class Iphone extends Phone
{
    public function __construct($name, $price, $stock)
    {
        $brand = "Iphone";
        parent::__construct($brand, $name, $price, $stock);
    }

    public function getBrandInfo(): string
    {
        return "{$this->brand} is a brand from gatau blablaba";
    }
}
