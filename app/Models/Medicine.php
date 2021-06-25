<?php

namespace App\Models;

class Medicine
{
    private ?string $id;
    private string $brand;
    private string $drug;
    private string $dose;

    public function __construct(array $attributes)
    {
        $this->id = isset($attributes['_id']) ? $attributes['_id'] : null;
        $this->brand = $attributes['brand'];
        $this->drug = $attributes['drug'];
        $this->dose = $attributes['dose'];
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function getBrand() : string
    {
        return $this->brand;
    }

    public function getDrug() : string
    {
        return $this->drug;
    }

    public function getDose() : string
    {
        return $this->dose;
    }

    public function toArray()
    {
        return [
            'brand' => $this->brand,
            'drug' => $this->drug,
            'dose' => $this->dose
        ];
    }
}
