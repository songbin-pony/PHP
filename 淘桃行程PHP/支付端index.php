<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>桃淘行程支付页面</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>

<body>
    <?php
$price=$_GET['price'];
$order_id=$_GET['order_id'];
$username=$_GET['username'];
?>
    <form name=alipayment action=pagepay/pagepay.php method=post target="_blank" class="show">
        <div id="body1"  name="divcontent">
        <dl class="content">
                    <dt>商户订单号
                        ：</dt>
                    <dd>
                        <input id="WIDout_trade_no" name="WIDout_trade_no"
                            readonly value="<?php echo $order_id; ?>" />
                    </dd>
                    <hr class="one_line">
                    <dt>用户名称
                        ：</dt>
                    <dd>
                        <input id="WIDsubject" name="WIDsubject" readonly
                            value="<?php echo $username; ?>" />
                    </dd>
                    <hr class="one_line">
                    <dt>付款金额
                        ：</dt>
                    <dd>
                        <input id="WIDtotal_amount" name="WIDtotal_amount"
                            readonly value="<?php echo $price; ?>" />
                    </dd>
                    <hr class="one_line">
                    <dt>商品描述：</dt>
                    <dd>
                        <input id="WIDbody" name="WIDbody" />
                    </dd>
                    <hr class="one_line">
                </dl>
        </div>
        <div  >
                <button class="new-btn-login" type="submit" >付 款</button>
            </div>
            <div class="note-help">如果您点击“付款”按钮，即表示您同意该次的执行操作。</div>
    </form>
</body>

</html>