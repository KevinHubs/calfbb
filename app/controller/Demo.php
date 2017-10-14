<?php
/**
 * @classNme 测试控制器
 * @description 框架测试 控制器
 * @author calfbb技术团队
 * Date: 2017/10/14
 * Time: 上午8:34
 */

namespace App\controller;

use  Framework\library\view;
use \App\model\User;

class Demo extends User
{
    use view;

    public function demo()
    {
        global $_G;
        //echo 1;die;
      $this->display('demo/demo.html');
      //  $this->display('index/index.html');
    }
}

