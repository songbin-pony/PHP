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
        $start_station_name=$_GET['start_station_name'];
        $end_station_name=$_GET['end_station_name'];
        $start_time=$_GET['start_time'];
        $arrive_time=$_GET['arrive_time'];
        $start_train_date=$_GET['start_train_date'];
        // $temp['user_name']=$user_name;
        // $temp['start_train_date']=$start_train_date;
        // $temp['train_no']=$train_no;
        // $temp['add_time']=$add_time;
        // $temp['start_station_name']=$start_station_name;
        // $temp['end_station_name']=$end_station_name;
        // $temp['arrive_time']=$arrive_time;
        // $temp['start_time']=$start_time;
        $sql="INSERT INTO shop_car (user_name,add_time,ticket_num,train_no,start_station_name,end_station_name,start_time,arrive_time,start_train_date) VALUES ('{$user_name}','{$add_time}','{$ticket_num}','{$train_no}','{$start_station_name}','{$end_station_name}','{$start_time}','{$arrive_time}','{$start_train_date}')";
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
