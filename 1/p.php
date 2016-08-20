<?php
$memcache = new Memcache;             //创建一个memcache对象
$memcache->connect('localhost', 11211) or die ("Could not connect"); //连接Memcached服务器
$memcache->set('name', 'meng');        //设置一个变量到内存中，名称是key 值是test
$get_value = $memcache->get('name');   //从内存中取出key的值
echo $get_value;
$memcache->close();