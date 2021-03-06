<?php

namespace JMsoft\Telegrambot;

abstract class BotController
{
    public function run($dialog, $data){
        $controller = $dialog->getController();
        $action = $dialog->getAction();
        if ($action == null || $action == 'default'){
            $this->defaultAction($dialog, $data);
        }else{
            $action .= 'Action';
            if (method_exists($this, $action)){
                $this->$action($dialog, $data);
            }
        }
    }

    public abstract function defaultAction($dilog, $data);
}