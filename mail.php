<?php 

$error_messages = [];
$customerName = filter_var(
				$_POST['name'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
if ($customerName == false) { array_push($error_messages,"Ошибка заполнения формы");}

$customerPhone = filter_var(
				$_POST['phone'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);

if ($customerName == false || $customerPhone == false ) { array_push($error_messages,"Ошибка...");}


if (count($error_messages) != 0) {
	foreach ( $error_messages as $error) {
		echo $error . PHP_EOL;
	}
	return;
} else {
	$to      = 'tiangleweb@icloud.com';
$subject = 'Заказ потолков';
$message = "Здравствуйте, Я " . $customerName . ", хочу сделать заказ. Мой номер телефона: " . $customerPhone;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
	echo "Отправлено!";
} else {
	echo "Ошибка отправки email...";
}
}


