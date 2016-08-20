<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id=$_GET['id'];
$pdo=new PDO("mysql:dbname=pdo;host=127.0.0.1;charset=utf8", 'root','');
$res=$pdo->query("select * from province where fid='{$id}'");
$city=$res->fetchAll(2);

echo "<option value='a'>请选择</option>";
foreach($city as $v){
    echo "<option value='{$v['cid']}'>{$v['cname']}</option>";
}