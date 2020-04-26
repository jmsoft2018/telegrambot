<?php

namespace JMsoft\Telegrambot;

use JMsoft\Telegrambot\Types\Update;

class BotApi
{
    public static function getUpdate(){
        $requestBody = file_get_contents('php://input');
        if ($requestBody === false){
            return false;
        }
        $data = json_decode($requestBody, JSON_OBJECT_AS_ARRAY);
        return new Update($data);
    }
}