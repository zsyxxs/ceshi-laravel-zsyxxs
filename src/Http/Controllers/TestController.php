<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/25
 * Time: 22:31
 */

namespace Zhang\SjunitLaravel\Http\Controllers;


use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index()
    {
        return '这是一个测试类1';
    }
}