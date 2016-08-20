<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Application/Admin/Public/Css/screen.css">
        <script src="/Application/Admin/Public/Js/jquery.min.js"></script>
<!--        <script src="//code.jquery.com/jquery-1.9.1.js"></script>-->
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="/Application/Admin/Public/Js/jquery.validate.js"></script>
        <script src="/Application/Admin/Public/Js/messages_zh.js"></script>
        <script src="/Application/Admin/Public/Js/base.js"></script>
        
        
    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-default">                
                    <?php if($_SESSION['Admin']== ''): ?><span class="navbar-text navbar-right mg-r-20">
                            <a href="<?php echo U('login/login');?>">登入</a>
                           
                        </span>
                        <?php else: ?>
                        <span class="navbar-text  mg-r-20"> 
                      
                         欢迎：<?php echo (session('Admin')); ?> |
                         <a href="<?php echo U('index/loginout');?>">注销</a>
                    
                        </span><?php endif; ?>
            </div>            
            
            <div class="row">
                
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <form action="<?php echo U('login/dologin');?>" method="post" id='signupForm'>            
            <div class="form-group">
              <label >用户名</label>
              <input type="text" class="form-control"  placeholder="User" name="uname">
            </div>
            <div class="form-group">
              <label >密码</label>
              <input type="password" class="form-control"  placeholder="Password" name="pwd">
            </div>
           <div class="form-group row">
                <div class="col-lg-6">
                             <label >验证码</label>				
                             <input type="text" name="code" class="form-control" placeholder="验证码">
                </div>
                <div class="col-lg-6">
                     <img src="<?php echo U('login/verify');?>" onclick="this.src='<?php echo U('login/verify');?>?'+Math.random">
                </div>			
            </div>
            <button type="submit" class="btn btn-default btn-lg active">登入</button>        
        </form>
        </div>
        <div class="col-lg-3"></div>

            </div>
        </div>
        
    </body>
</html>