<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>       
        <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/Application/Admin/Public/Css/screen.css">
        <script src="/Application/Admin/Public/Js/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
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
            <div id="menu" class="list-group">
               
                        <a class="act list-group-item active" >用户管理</a>
                        <div>
                                <span name='index/user' class="list-group-item">查看用户</span>
                                <span name='index/useradd' class="list-group-item">添加用户</span>       
                        </div> 
                        <a class="act list-group-item active" >订单管理</a>
                        <div>
                                <span class="list-group-item">订单</span>
                                <span class="list-group-item">订饭</span>
                        </div> 
                        <a class="act list-group-item active" >留言管理</a>
                        <div>
                                <span class="list-group-item">留言</span>
                               <span class="list-group-item">留言</span>       
                        </div> 
                        <a class="act list-group-item active" >商品管理</a>
                        <div>
                                <span class="list-group-item">商品</span>
                               <span class="list-group-item">留言</span>       
                        </div> 
            </div>
			
            <div class="row">
                
            </div>
        </div>
        
    </body>
</html>