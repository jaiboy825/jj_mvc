<?php

namespace PHP\Controller;

use PHP\App\DB;

class MainController extends MasterController
{
    public function index()
    {
        $this->render("index");
    }
}