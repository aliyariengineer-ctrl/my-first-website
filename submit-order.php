<?php
// دریافت اطلاعات از فرم
$name = $_POST['name'] ?? 'نامشخص';
$phone = $_POST['phone'] ?? 'نامشخص';
$tracking = $_POST['tracking'] ?? 'نامشخص';
$plan = $_POST['plan'] ?? 'نامشخص';

// آماده‌سازی متن برای ذخیره در فایل
$data = "نام: $name | شماره: $phone | کد رهگیری: $tracking | پلن: $plan" . PHP_EOL;

// ذخیره در فایلی به نام orders.txt (در کنار همین فایل ساخته می‌شود)
file_put_contents('orders.txt', $data, FILE_APPEND);

// نمایش پیام تشکر به کاربر
echo "
<!DOCTYPE html>
<html lang='fa' dir='rtl'>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: tahoma; background: #080c14; color: white; display: flex; align-items: center; justify-content: center; height: 100vh; text-align: center; margin: 0; }
        .box { background: #111827; padding: 40px; border-radius: 16px; border: 1px solid #1f2937; max-width: 450px; }
        h2 { color: #22d3ee; }
        p { color: #9ca3af; line-height: 1.8; }
        a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #4f46e5; color: white; text-decoration: none; border-radius: 8px; transition: 0.3s; }
        a:hover { background: #4338ca; }
    </style>
</head>
<body>
    <div class='box'>
        <h2>✅ سفارش شما ثبت شد</h2>
        <p>مشتری گرامی <b>$name</b> عزیز، اطلاعات پرداخت شما با موفقیت دریافت گردید.<br>حداکثر تا ۲۴ ساعت آینده جهت هماهنگی با شما تماس می‌گیریم.</p>
        <a href='index.html'>بازگشت به صفحه اصلی</a>
    </div>
</body>
</html>
";
?>

