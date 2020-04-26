<?php

namespace App\Telegrambot\Controllers;

use jmsoft\Telegrambot\BotController;

class DefaultBotController extends BotController
{

    public function defaultAction($dilog, $data)
    {
        $dilog->setAction('start');
        file_put_contents('log.txt', 'Default action: ' . $data->message->text);
    }

    public function startAction($dilog, $data){
        $dilog->setAction('default');
        file_put_contents('log.txt', 'Start action: ' . $data->message->text);
    }
}