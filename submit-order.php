<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$tracking = $_POST['tracking'];
$plan = $_POST['plan'];

echo "

<!DOCTYPE html>
<html lang='fa' dir='rtl'>
<head>
<meta charset='UTF-8'>
<title>ثبت سفارش</title>

<style>
body{
font-family:tahoma;
background:#080c14;
color:white;
display:flex;
align-items:center;
justify-content:center;
height:100vh;
text-align:center
}

.box{
background:#0b101d;
padding:40px;
border-radius:16px;
max-width:500px
}

h2{
color:#22d3ee;
margin-bottom:15px
}

p{
color:#cbd5e1;
line-height:2
}

a{
display:inline-block;
margin-top:20px;
padding:12px 25px;
background:#6366f1;
color:white;
text-decoration:none;
border-radius:8px
}
</style>

</head>

<body>

<div class='box'>

<h2>✅ سفارش شما ثبت شد</h2>

<p>
از ثبت سفارش شما متشکریم.<br><br>
حداکثر تا <b>۲۴ ساعت آینده</b> با شماره‌ای که ثبت کرده‌اید تماس گرفته می‌شود
و توضیحات تکمیلی پروژه به شما ارائه خواهد شد.
</p>

<a href='/'>بازگشت به سایت</a>

</div>

</body>
</html>

";

?>
