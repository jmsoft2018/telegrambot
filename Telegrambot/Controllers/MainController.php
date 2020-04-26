<?php

namespace App\Modules\Telegrambot\Controllers;

use App\Http\Controllers\Controller;

use \jmsoft\Telegrambot\BotApi;
use jmsoft\Telegrambot\BotDialog;
use jmsoft\Telegrambot\BotRouter;

class MainController extends Controller
{
    private $router;

    public function __construct()
    {
        $this->router = new BotRouter();
    }

    public function index()
    {
        $update = BotApi::getUpdate();
        $this->router->setDefaultController(DefaultBotController::class);

        $botdialog = BotDialog::getInstance($update->message->from->id);

        $this->router->route($botdialog, $update);
    }



//$getUpdates = new GetUpdates();
//        $updatePromise = $this->tgLog->performApiRequest($getUpdates);
//        $updatePromise->then(
//            function (TraversableCustomType $updatesArray) {
//                foreach ($updatesArray as $update) {
//                    var_dump($update);
//                }
//            },
//            function (\Exception $exception) {
//                // Onoes, an exception occurred...
//                echo 'Exception ' . get_class($exception) . ' caught, message: ' . $exception->getMessage();
//            }
//        );
//
//        $this->loop->run();

}