<?php
 namespace app\admin\model;
 use think\Model;
 class Login extends Model 
 {
    public function Login()
    {
        $data = Db::query('select * from php_admin');
    }
   
 }
 ?>