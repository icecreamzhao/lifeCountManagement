<?php
/**
 * Created by PhpStorm.
 * User: molong
 * Date: 2018/12/24
 * Time: 23:56
 */

namespace app\admin\controller;


use think\Controller;

class Home extends Controller
{

    public function index() {
        return view("admin/index");
    }

}
