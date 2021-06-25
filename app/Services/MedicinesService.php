<?php

namespace App\Services;

use App\Models\Medicine;
use Illuminate\Support\Facades\Http;

class MedicinesService {

    private const ENDPOINT = "http://127.0.0.1:8001/api/medicine/";
    private string $api_token = "";

    public function getMedicines(){

        // $response = Http::withToken($this->api_token)->get(self::ENDPOINT);
        $response = Http::get(self::ENDPOINT);

        $medicines = [];
        if($response->successful()){
            $result = json_decode($response, true);
            foreach($result as $medicine){
                array_push($medicines, new Medicine($medicine));
            }
        }

        return $medicines;
    }

    public function save(Medicine $medicine)
    {
       $response = Http::post(self::ENDPOINT,  $medicine->toArray());
       return $response->successful();
    }


}

