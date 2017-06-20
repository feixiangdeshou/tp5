<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
use think\Db;
class Login extends Controller
{
    
    public function login()
    {
        //$data = Db::query('select * from php_admin');
       $data = Db::name('admin')->select();
      
       print_r($data);   
    //return $this->fetch('login');
    }

}
?>