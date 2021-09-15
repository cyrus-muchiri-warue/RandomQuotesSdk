<?php
namespace App\RandomQuoteSdk;
class RandomQuoteSdk{
    
    public static function readJsonData()
    {
        $quotes=file_get_contents(__DIR__."/../data/quotes.json");
        $quotes=json_decode($quotes,true);
        $index =mt_rand(0,count($quotes));
        return $quotes[$index]; 
    }
    
}

