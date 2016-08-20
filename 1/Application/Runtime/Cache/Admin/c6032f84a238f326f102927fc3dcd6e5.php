<?php if (!defined('THINK_PATH')) exit();?>
    <div class="col-lg-3"></div>
     <div class="col-lg-6" >
         <form class='cl' id='useredit' method="post" >
             <div class="form-group row">
                
                <input type="hidden" class="form-control" name="aid"  placeholder="username">  
            </div>
            <div class="form-group row">
                <label >用户名</label>
                <input type="text" class="form-control" name="aname"  placeholder="username" readonly>  
            </div>
            <div class="form-group row">
                <label >密码</label>
                <input type="password" class="form-control" name='pwd'  placeholder="pwd">              
            </div>
            <div class="form-group row">
                <label >电话</label>
                <input type="text" class="form-control"  name='tel' placeholder="telphone">               
            </div>
            <div class="form-group row">             
                <button type="button" class="btn btn-primary btn-lg" id='submit1'>修改</button>
            </div>
         </form>
    </div>
    <div class="col-lg-3"></div>

    <script>
        $(function(){
         
                   
           $("#useredit").validate({
			rules: {
				aname: {
					required: true,
					minlength: 2
				},
				pwd: {
					required: true,
					minlength: 3
				},
				tel: {
					required: true,
//                                        maxlength:11,
//                                        minlength:11,
                                    remote:{
                                            url: "/index.php/admin/index/checktel",     //后台处理程序
                                            type: "post",               //数据发送方式
                                            dataType: "json"           //接受数据格式         
                                        }
				}
				
			},
			messages: {
				
				aname: {
					required: "请输入用户名",
					minlength: "用户名不可少于2位"
				},
				pwd: {
					required: "请输入密码",
					minlength: "密码不可少于3位"
				},				
				tel: {
					required: "请输入电话",
//                                        minlength:'最短不能少于11位',
//                                        maxlength:'最多不能超过11位',
                                        remote:'请输入11位合法电话号码'
				}				
			}
		});
                $('#submit1').click(function(){
                    
                var data={
                    aid:$('[name=aid]').val(),
                    aname:$('[name=aname]').val(),
                    pwd:$('[name=pwd]').val(),
                    tel:$('[name=tel]').val()
                };
                if($('[name=aname]').val()==''||$('[name=pwd]').val()==''){
                    alert('内容不可为空');
                    return true;
                };
                $.get('/index.php/admin/index/douseredit',data,function(res){
                    alert(res);
                });
                });
        });
        
    </script>