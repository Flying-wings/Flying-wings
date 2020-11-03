<?php
namespace   app\fiy\controller;
use think\Db;
use app\xiaomi\model\IndexModel;
use think\Controller;
use app\xiaomi\controller\Bass;
use think\Session;
class Index extends Controller{
    public function index(){
        return  $this->fetch('index');
    }
}
?>