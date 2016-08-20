<?php
try{
	$pdo=new PDO("mysql:dbname=pdo;host=127.0.0.1;charset=utf8", 'root','');
}catch(Exception $e){	
	echo '错误：'.$e->getMessage();	
}

$res=$pdo->query('select * from province where fid=0');
$pro=$res->fetchAll(2);

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>省市区</title>
        <meta charset="UTF-8">
        <script src="jquery-3.0.0.min.js" type="text/javascript"></script>
    </head>
    <body>
        <select id="pro">
            <option value="a">请选择</option>
            <?php foreach($pro as $v){ ?>
            <option value="<?php echo $v['cid'];?>"><?php echo $v['cname'];?></option>
            <?php } ?>
        </select>省
        <select id="city">
            <option value="">请选择</option>
        </select>市
        <select id="area">
            <option value="">请选择</option>
        </select>县区
    </body>
    <script>
        $(function(){
            $('#pro').change(function(){
               var id=$(this).find(':selected').val();
               $.get('./data.php?id='+id,function(res){
                   $('#city').html(res);
               });
            });
            $('#city').change(function(){
               var id=$(this).find(':selected').val();
               $.get('./data.php?id='+id,function(res){
                   $('#area').html(res);
               });
            });
        });
    </script>
</html>
