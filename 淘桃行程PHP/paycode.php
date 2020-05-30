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
        $pay_code=$_GET['pay_code'];
        $sql="INSERT INTO pay_code (user_name,pay_code) VALUES ('{$user_name}','{$pay_code}')";
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
