<?php
$method = $_SERVER['REQUEST_METHOD'];
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;
$user = @$_SERVER['HTTP_USER_AGENT'];

//   // Ваша секретна каптча
//   $secret = '6LfERicqAAAAAAfxLQ5Wuco5IAPbsUu9LgXzvfh7';
//   $responseKeys = array();
// if(isset($_POST['recaptcha_response'])){

//     $postdata = http_build_query(["secret"=>$secret,"response"=>$_POST['recaptcha_response']]);
//     $opts = ['http' =>
//         [
//             'method'  => 'POST',
//             'header'  => 'Content-type: application/x-www-form-urlencoded',
//             'content' => $postdata
//         ]
//     ];
//     $context  = stream_context_create($opts);
//     $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
//     $check = json_decode($result);


//   // Перевірка відповіді reCAPTCHA
//   $responseKeys = $check;
// //   curl_close($ch);

// } else{
//     return false;
// }


// var_dump($responseKeys);
//Script Foreach
$c = true;
// if ( $method === 'POST' && $responseKeys->success && $responseKeys->score >= 0.5  ) {

if ( $method === 'POST'   ) {
	$token = "7681843376:AAHHjSu199F9rEJhWaFRU_bwHrx1WSxu9d4";
    // $chat_id = "332646331";
    $chat_id = "-4554706906";
   
    $arr = array(
        'Ім`я:' => $_POST['name'],
        'Телефон:' => $_POST['phone'],
		'Послуга:'	=> $_POST['service'],
		// 'Інформація про пристрій:' => $user, 
		// 'IP:' => $ip, 
    );

    $txt = "Нова заявка на сайті buduar_epil на ". $_POST['service']."%0A%0A";
    foreach($arr as $key => $value) {
        $txt .= '<b>'.$key.'</b> '.$value.'%0A';
    };
    
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    // if($order_id){
    //     $json['order_id'] = $order_id;
    //     $json['suc'] = 1;
    // }


}
// 	$project_name = "Заявка с сайта gekkonparts";
// 	// $admin_email  ="firmfril@gmail.com";
// 	$admin_email  ="sales@gekkon.in.ua";
// 	$form_subject = "Заказ звонка";

// 	foreach ( $_POST as $key => $value ) {
// 		if ( $value != "" && $key != "key") {
// 			$message .= "
// 			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
// 				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
// 			</tr>
// 			";
		
// 		}
// 	}
// 	$message .= "
// 	" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>IP</b></td>
// 		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$ip</td>
// 	</tr>
// 	";
// 	$message .= "
// 	" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Браузер</b></td>
// 		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$user</td>
// 	</tr>
// 	";
// } else if ( $method === 'GET' && $_GET['key'] == 'e3wfsr3ras2qeadw' ) {

// 	$project_name = "Заявка с сайта gekkonparts";
// 	$admin_email  ="firmfril@gmail.com";
// 	$form_subject = "Заказ звонка";

// 	foreach ( $_GET as $key => $value ) {
		
// 		if ( $value != " " && $key != "key") {
// 			$message .= "
// 			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
// 				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
// 				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
// 			</tr>
// 			";
// 		}
// 	}
// }

// $message = "<table style='width: 100%;'>$message</table>";

// function adopt($text) {
// 	return '=?UTF-8?B?'.Base64_encode($text).'?=';
// }

// $headers = "MIME-Version: 1.0" . PHP_EOL .
// "Content-Type: text/html; charset=utf-8" . PHP_EOL .
// 'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
// 'Reply-To: '.$admin_email.'' . PHP_EOL;

// mail( $admin_email, adopt($form_subject), $message, $headers );