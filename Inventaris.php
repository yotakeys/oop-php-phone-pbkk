<?php

include "./Brand.php";
include "./Phone.php";

class Inventaris
{
    private $listPhone = array();

    public function __construct($listPhone)
    {
        $this->listPhone = $listPhone;
    }

    public function getListPhone(): void
    {
        $idx = 0;
        foreach ($this->listPhone as $phone) {
            echo "index : {$idx}";
            echo $phone->getPhoneInfo();
            $idx++;
        }
    }

    public function addPhone(MobilePhone $phone): void
    {
        array_push($listPhone, $phone);
        echo "Done add phone to Phone List";
    }

    public function removePhone(int $index): void
    {
        if ($index < count($this->listPhone) && $index >= 0) {
            unset($listPhone[$index]);
            echo "Done remove phone from Phone List";
        } else {
            echo "Phone not found";
        }
    }

    public function updatePhone(int $index, $nama, $harga, $stock): void
    {
        if ($index < count($this->listPhone) && $index >= 0) {
            $this->listPhone[$index]->setName($nama);
            $this->listPhone[$index]->setPrice($harga);
            $this->listPhone[$index]->setStock($stock);
            echo "Done update phone from Phone List";
        } else {
            echo "Phone not found";
        }
    }
}
