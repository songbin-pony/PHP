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
        $user_name=$_GET['user_name'];
        $create_time=$_GET['create_time'];
        $ticket_num=$_GET['ticket_num'];
        $train_no=$_GET['train_no'];
        $start_station_name=$_GET['start_station_name'];
        $end_station_name=$_GET['end_station_name'];
        $start_time=$_GET['start_time'];
        $arrive_time=$_GET['arrive_time'];
        $start_train_date=$_GET['start_train_date'];
        $sql_1="INSERT INTO addorder (order_id,user_name,create_time,ticket_num,train_no,start_station_name,end_station_name,start_time,arrive_time,start_train_date) VALUES ('{$order_id}','{$user_name}','{$create_time}','{$ticket_num}','{$train_no}','{$start_station_name}','{$end_station_name}','{$start_time}','{$arrive_time}','{$start_train_date}')";
        $res_1=$con->query($sql_1);
        if($res_1){
            $sql_2="DELETE FROM shop_car WHERE shop_car.user_name='".$user_name."' AND shop_car.ticket_num='".$ticket_num."' AND shop_car.train_no='".$train_no."' AND shop_car.start_train_date='".$start_train_date."'";
            $res_2=$con->query($sql_2);
            if($res_2){
            $arr['status']=1;
            $arr['info']='success';
            }else{
            $arr['status']=0;
            $arr['info']='error';
            }
        echo  json_encode($arr,JSON_UNESCAPED_UNICODE);
            
        }
        


    }
 ?>
