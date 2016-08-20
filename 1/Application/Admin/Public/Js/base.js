/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
    $.validator.setDefaults({
		submitHandler: function() {
//			alert("登入成功");
                        submit.href('login/dologin');
		}
	});
    $('#menu').accordion({ 
                active: false,
                header: '.act',
                navigation: true,
                event: 'mouseover',
                fillSpace: true,
                animated: 'easeslide'
        });
        $("#signupForm").validate({
			rules: {
				uname: {
					required: true,
					minlength: 2      
				},
				pwd: {
					required: true,
					minlength: 3
				}
				
			},
			messages: {
				
				uname: {
					required: "请输入用户名",
					minlength: "不可少于2位",                                                                              
				},
				pwd: {
					required: "请输入密码",
					minlength: "最短不可少于3位"
				}				
			}
		});
                
   $('#menu div span').click(function(){
       var action=$(this).attr('name');      
       $.get('/index.php/admin/'+action,function(res){
          $('.row').html(res);
       });
   });
    $(document).on('click','.del',function(){
       if(confirm('确认删除吗')==false){
           return;
       }
       $(this).parent().parent().remove();
       var aid=$(this).attr('data-aid');
       
       $.get('/index.php/admin/index/del',{aid:aid},function(res){
          alert(res);
       });
   }); 
   
    $(document).on('click','.edit',function(){
       if(confirm('确认修改吗')==false){
           return;
       } 
         var  aid=$(this).attr('data-aid');
         var  aname=$(this).attr('data-aname');
         var  pwd=$(this).attr('data-pwd');
         var  tel=$(this).attr('data-tel');      
       $.get('/index.php/admin/index/useredit',function(res){          
          $('.row').html(res);
          $('[name=aid]').val(aid);
          $('[name=aname]').val(aname);
           $('[name=pwd]').val(pwd);
           $('[name=tel]').val(tel);
       });
   }); 
});

