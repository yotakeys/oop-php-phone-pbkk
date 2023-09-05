<?php

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
            echo "index : {$idx} -> ";
            echo $phone->getPhoneInfo();
            $idx++;
        }
    }

    public function addPhone(Phone $phone): void
    {
        array_push($this->listPhone, $phone);
        echo "Done add phone to Phone List\n";
    }

    public function removePhone(int $index): void
    {
        if ($index < count($this->listPhone) && $index >= 0) {
            unset($this->listPhone[$index]);
            echo "Done remove phone from Phone List\n";
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
            echo "Done update phone from Phone List\n";
        } else {
            echo "Phone not found";
        }
    }
}
