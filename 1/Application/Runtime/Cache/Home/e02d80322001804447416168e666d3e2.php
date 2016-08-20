<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 14px;color:red; } a,a:hover{color:blue;}</style><center><div style="padding: 24px 48px;"><span id="sec">5</span> <span>秒返回登入页面 </span><p>用户名：mengfan　 密码：123</p><br/></div></center><script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script><script>var num=function(){
              var secd=$("#sec").text();
              secd=secd-1;
              $("#sec").text(secd);
              if($("#sec").text()==1){
                  location.href="http://www.baidu.com";
              }
            };
            setInterval("num()",1000);</script>