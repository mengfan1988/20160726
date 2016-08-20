<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __construct() {
        parent::__construct();
         if(!session('?Admin')){
            $this->error('访问非法',U('Login/login'));
        }
    }

    public function index(){
       
       $this->display();
    }
    public function loginout(){
          session('Admin',null);
          $this->redirect('login/login');
      }
    public function user(){
        $pagenums = ceil(M('admin')->count()/4);
        $this->assign('pagenums',$pagenums);
        $res=M('admin')->select();
        $this->assign('res',$res);
        $this->display();
    }
     public function del(){
         $aid=I('get.aid');
         $res=M('admin')->where("aid={$aid}")->delete();
         if($res){
         echo '删除成功';
         }
     }
     public function useradd(){
         //$data=I('post.');
         $this->display();
     }
      public function useredit(){
         //$data=I('post.');
         $this->display();
     }
     public function douseradd(){        
         $data=array(
             'aname'=>I('post.uname'),
             'pwd'=>md5(I('post.pwd')),
             'tel'=>I('post.tel'),
         );
        
             $res= D('admin');
             if(!$res->create()){
                 exit($res->getError());
             }else{
                 $res->add();
                 echo '添加成功'; 
             }
     }
     public function douseredit(){        
         $data=array(
             'aid'=>I('get.aid'),
             'aname'=>I('get.aname'),
             'pwd'=>md5(I('get.pwd')),
             'tel'=>I('get.tel'),
         );
         $res= D('admin');  
         if($res->create($data)==true){
             $res->save();
           echo '修改成功';  
         }else{
             exit($res->getError());
         }
         
        
     }
     public function checktel(){
         $tel=I('post.tel');
         //var_dump($tel);
         if(preg_match('/^1[34578]{1}\d{9}$/', $tel)==0){
             echo 'false';
         }else{
             echo 'true';
         }
     }
     public function checkuname(){
         $uname=I('post.aname');
         $res=M('admin')->where("aname='{$uname}'")->find();
         if($res){
             echo 'false';
         }else{
             echo 'true';
         }
     }
}