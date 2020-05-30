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
        $order_id=$_GET['order_id'];
        $sql="DELETE FROM addorder WHERE addorder.order_id='".$order_id."'";
        $res=$con->query($sql);
        if($res){
            $arr['status']=1;
            $arr['info']='success';
        }else{
            $arr['status']=0;
            $arr['info']='error';
        }
        echo  json_encode($sql,JSON_UNESCAPED_UNICODE);


    }
 ?>
