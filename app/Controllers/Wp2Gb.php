<?php

namespace App\Controllers;

/*
 * wordpress博客导入工具
 */

use App\Libraries\WordPress;

class Wp2Gb extends BaseController
{


    public function index()
    {


        $wordpress = new WordPress();
        $wordpress->loadWP();
        echo $wordpress->errMsg();
        return true;
    }
}
