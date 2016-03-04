<?php
/**
 * Created by PhpStorm.
 * User: fnolackfote
 * Date: 03/03/2016
 * Time: 10:28
 */

namespace App\Frontend;

use \OCFram\Application;

class FrontentApplication extends Application
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'Frontend';
    }

    public function run()
    {
        $controller = $this->getController();
        $controller->execute();

        $this->httpResponse()->setPage($controller->page());
        $this->httpResponse()->send();
    }

}
