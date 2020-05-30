<?php
$host='localhost';
$user='pony';
$password='1';
$dbname='pony';
$con=mysqli_connect($host,$user,$password,$dbname);
$con->query("SET NAMES utf8");
if($con->connect_error)
    {
        die('连接失败：'.$con->connect_error);
    }
else
    {
        
        $user_name=$_GET['user_name'];
        $password=$_GET['password'];
        $sql="INSERT INTO user (user_name,password) VALUES ('{$user_name}','{$password}')";
        $res=$con->query($sql);
        if($res){
            $arr['status']=1;
            $arr['info']='success';
        }else{
            $arr['status']=0;
            $arr['info']='error';
        }
        echo  json_encode($arr,JSON_UNESCAPED_UNICODE);


    }
 ?>
