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
        $time=$_GET['time'];
        $speaker=$_GET['speaker'];
        $message=$_GET['message'];
        $sql="INSERT INTO message (user_name,time,speaker,message) VALUES ('{$user_name}','{$time}','{$speaker}','{$message}')";
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
