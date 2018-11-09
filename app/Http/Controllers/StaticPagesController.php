<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //要在控制器中指定渲染某个视图，则需要使用到 view 方法，view 方法接收两个参数，第一个参数是视图的路径名称，第二个参数是与视图绑定的数据，第二个参数为可选参数。默认情况下，所有的视图文件都存放在 resources/views 文件夹下。
    public function home()
    {
    	// return '主页';
    	return view('static_pages/home');
    }

    public function help()
    {
    	// return '帮助页';
    	return view('static_pages/help');
    }

    public function about()
    {
    	// return '关于页';
    	return view('static_pages/about');
    }
}
