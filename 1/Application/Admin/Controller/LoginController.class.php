<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;
use Think\Controller;
/**
 * Description of LoginController
 *
 * @author 刘海棠
 */
class LoginController extends Controller {
    public function __construct() {
        parent::__construct();
         if(session('?Admin')){
            $this->error('访问非法',U('Index/index'));
        }
    }
    public function login(){
        $this->display();
    }
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->useImgBg = true;
        $Verify->fontttf = '5.ttf';
        $Verify->length=3;
        $Verify->imageW=260;
        $Verify->imageH=60;
        $Verify->entry();
    }
    public function dologin(){
        $code=I('post.code');
        $Verify = new \Think\Verify();
        if($Verify->check($code)==false){
            $this->error('验证码不正确');
        }
        $data=array('aname'=>I('post.uname'),
            'pwd'=>md5(I('post.pwd')));       
        $admin=M('Admin')->where($data)->find();
        if($admin){
            $lip=  get_client_ip();
            $ltime=time();
            session('Admin',I('post.uname'));
            M('Admin')->where(array('aid'=>$admin['aid']))->data(array('lip'=>$lip,'ltime'=>$ltime))->save();
            $this->redirect('Index/index'); 
            
        }else{
            $this->error('登入失败');
        }
    }
      
}
