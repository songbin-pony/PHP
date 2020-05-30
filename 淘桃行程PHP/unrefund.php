<?php
/*数据库连接*/
    $host='localhost';
    $user='pony';
    $password='1';
    $dbname='pony';
    $refund_time=strftime('%Y%m%d%H%M%S');
    $con=mysqli_connect($host,$user,$password,$dbname);
    $con->query("SET NAMES utf8");

/*参数传入*/
    $order_id=$_GET['order_id'];

    if($con->connect_error)
    {
        echo ('连接失败：'.$con->connect_error);
    }
    else
    {
        $sql_1="INSERT INTO unrefund(pay_time,alipay_id,order_id,user_name,create_time,ticket_num,train_no,start_station_name,end_station_name,start_time,arrive_time,start_train_date) SELECT pay_time,alipay_id,order_id,user_name,create_time,ticket_num,train_no,start_station_name,end_station_name,start_time,arrive_time,start_train_date FROM corder WHERE order_id='".$order_id."'";
        $res_1=$con->query($sql_1);
        if($res_1)
        {
        $sql_2="UPDATE unrefund SET refund_time='".$refund_time."' WHERE order_id='".$order_id."'";
        $res_2=$con->query($sql_2);
        if($res_2){
        $sql_3="DELETE FROM corder WHERE corder.order_id='".$order_id."'";
        $res_3=$con->query($sql_3);
        if($res_3){
            $arr['status']=1;
            $arr['info']='success';
        }else{
            $arr['status']=0;
            $arr['info']='error';
        }
        echo  json_encode($arr,JSON_UNESCAPED_UNICODE);
        }
    }
    }


?>