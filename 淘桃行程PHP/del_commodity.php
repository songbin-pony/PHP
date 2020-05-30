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
        $add_time=$_GET['add_time'];
        $ticket_num=$_GET['ticket_num'];
        $train_no=$_GET['train_no'];
        $start_train_date=$_GET['start_train_date'];
        $sql="DELETE FROM shop_car WHERE shop_car.user_name='".$user_name."' AND shop_car.add_time='".$add_time."' AND shop_car.ticket_num='".$ticket_num."' AND shop_car.train_no='".$train_no."' AND shop_car.start_train_date='".$start_train_date."'";
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
