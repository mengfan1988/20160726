<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
    protected $_validate = array(       
    array('aname','require','用户名必须'), //默认情况下用正则进行验证
    array('aname','/^[A-Za-z]\w{5,11}$/','用户名非法',1,'regex'),   
    array('aname','','帐号名称存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一 
    array('tel','/^(\+?86-?)?(18|15|13)[0-9]{9}$/','手机非法',1,'regex'),    
    //array('pwd','md5','密码错误！',0,'unique',1),    
    //array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内    
    //array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致     
     //array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式   
    );
   
}
