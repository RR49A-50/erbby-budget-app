<?php

namespace App\Http\Controllers;

abstract class Controller
{
    private $name = 'abc';
    // public function response(array $data, int $responseCode){
    //     return response()->json($data, $responseCode);
    // }
    public function setName(string $name) {
        $this->name = $name;
        return $this->name;
    }

    public function response ( mixed $data, string $message = "sucesfully",string $status = "succes", int $code =200) {
        return response() -> json([
            "status"=>$status,
            "message" => $message,
            "data" => $data,
        ],$code);
    }
}