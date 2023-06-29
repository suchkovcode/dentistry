<?php
//	Template Name: Страница благодарности
?>

<?php
//	Проверка формы
//	====================
	if ( (!$_POST) || ($_POST['e-mail']) ) {
		get_template_part('404');

//	Проверка антибот
	//} elseif (!empty($_POST["captcha"]) && $_POST["captcha"] == md5(date("Y-m-d"))) {
	} elseif(true) {

//	Обработчик формы
//	====================

// ID заявки
	function getNumber() {
		$filename = get_theme_file_path( 'orderNum.txt');
		$number = file_get_contents($filename);
		$number++;
		file_put_contents($filename, $number);
		return $number;
	}

//	Присваиваем переменные
	$name 			= $_POST['name1'] ?? 0;
	$phone 			= $_POST['phone'] ?? 0;
	$email 			= $_POST['email'] ?? 0;
	$textarea 		= $_POST['textarea'] ?? 0;
	$attachment 	= $_POST['attachment'] ?? 0;
	$answers 		= $_POST['answers'] ?? 0;
	$time 			= $_POST['time'] ?? 0;
	$utm 			= $_POST['utm'] ?? 0;
	$orderID 		= file_get_contents(get_theme_file_path( 'orderNum.txt'));

	$formid 		= $_POST['formid'] ?? 0;
	$title	 		= $_POST['title'] ?? 0;
	$block_head		= $_POST['block_head'] ?? 0;
	$url 			= $_POST['url'] ?? 0;
	$domen 			= get_site_url();
	$city 			= '';
	if (is_plugin_active('multycity/multycity.php')) {
	$city 			= do_shortcode('[city_i]');
	}
	$browser		= $_POST['browser'] ?? 0;
	$size_viewport	= $_POST['size_viewport'] ?? 0;
	$ip 			= isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';
	$user 			= isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : 'localhost';
	$captcha 		= $_POST['captcha'] ?? 0;
	
//	Услуги опросника
	$answers_check = "";
	if(!empty($answers)) { 
		foreach($answers as $check) { 
			$answers_check .= str_replace(array("\n", "\t", '  ', '    ', '    '), '', $check)."\n"; 
		}
	}

//	Тема письма
	$subject = 'Заявка / '.$phone.' / '.$orderID;

//	Отправитель
	$from 			= get_bloginfo("name");
	$from_email 	= 'no-repty@'.parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);

//	Заголовок
	$headers  = "From:".$from."<".$from_email.">\r\n";
	$headers .= "Reply-To: ".$from_email."\r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";

//	Создаем сообщение

						$mess ='<body>';
						
						$mess .='<h3>Контакты</h3>';
						$mess .= '<style>table{border-collapse:collapse;border:1px solid #ccc}tr{border-bottom:1px solid #ccc}tr:last-child{border-bottom:0}td{border-right:1px solid #ccc;padding:5px 15px}td:last-child{border-right:0}</style><table>';							
if ($orderID)			$mess .='<tr><td>ID				</td><td>'.$orderID.'</td></tr>';
if ($name)				$mess .='<tr><td>Имя			</td><td>'.$name.'</td></tr>';
if ($phone)				$mess .='<tr><td>Телефон		</td><td>'.$phone.'</td></tr>';
if ($email)				$mess .='<tr><td>Email			</td><td>'.$email.'</td></tr>';
if ($city)				$mess .='<tr><td>Город			</td><td>'.$city.'</td></tr>';
if ($textarea)			$mess .='<tr><td>Сообщение		</td><td>'.$textarea.'</td></tr>';
if ($answers_check)		$mess .='<tr><td>Ответы			</td><td>'.$answers_check.'</td></tr>';

						$mess .='</table>';

// GoodiniBasket
function fixed($json) {
	return str_replace('`', '"', preg_replace(
			'/`([^`]+)`(?=`)/',
			'\\\"$1\"',
			str_replace(['\"', '"'], '`', $json))
	);
}
$postcard 		= $_POST['postcard'] ?? "";
$address 		= $_POST['address'] ?? "";
$basket			= (!empty($_POST['basket'])) ? json_decode(fixed($_POST['basket']), true) : '';
$amount 		= $_POST['amount'] ?? "";
if (!empty($basket)) {
						$mess .= '<h3>Корзина</h3>';
						$mess .= '<style>table{border-collapse:collapse;border:1px solid #ccc}tr{border-bottom:1px solid #ccc}tr:last-child{border-bottom:0}td{border-right:1px solid #ccc;padding:5px 15px}td:last-child{border-right:0}th{border-right:1px solid #ccc;padding:5px 15px;}th:last-child{border-right:0}</style><table>';
						$mess .= '<thead>';
						$mess .= 	'<tr><th>ID</th><th>Наименование</th><th>Цена за ед.</th><th>Кол-во</th><th>Общая цена</th></tr>';
						$mess .= '</head>';
						$mess .= '<tbody>';
						for ($i = 0; $i < count($basket); $i++){
							$mess .= '<tr><td>'.$basket[$i]['id'].'</td><td>'.$basket[$i]['name'].'</td><td>'.$basket[$i]['price'].'</td><td>'.$basket[$i]['count'].'</td><td>'.$basket[$i]['amount'].'</td></tr>';
						}
if ($amount)				$mess .= '<tr><td colspan="2">Общая сумма		</td><td colspan="3">'.$amount.'</td></tr>';
if ($address)				$mess .= '<tr><td colspan="2">Адрес	доставки</td><td colspan="3">'.$address.'</td></tr>';
if ($time)					$mess .= '<tr><td colspan="2">Время	доставки</td><td colspan="3">'.$time.'</td></tr>';
if ($postcard)				$mess .= '<tr><td colspan="2">Открытка</td><td colspan="3">'.$postcard.'</td></tr>';
							$mess .= '</tbody>';
						$mess .= '</table>';
}
						
						$mess .='<h3>Общая информация</h3>';
						$mess .= '<style>table{border-collapse:collapse;border:1px solid #ccc}tr{border-bottom:1px solid #ccc}tr:last-child{border-bottom:0}td{border-right:1px solid #ccc;padding:5px 15px}td:last-child{border-right:0}</style><table>';							
if ($domen)				$mess .='<tr><td>Домен			</td><td>'.$domen.'</td></tr>';
if ($title) 			$mess .='<tr><td>Страница		</td><td> <a href="'.$url.'">'.$title.'</a></td></tr>';
if ($block_head)		$mess .='<tr><td>Название блока	</td><td>'.$block_head.'</td></tr>';
if ($utm)				$mess .='<tr><td>UTM			</td><td>'.$utm.'</td></tr>';
if ($formid)			$mess .='<tr><td>Форма			</td><td>'.$formid.'</td></tr>';
if ($ip)				$mess .='<tr><td>IP адрес		</td><td>'.$ip.'</td></tr>';
if ($browser)			$mess .='<tr><td>Браузер		</td><td>'.$browser.'</td></tr>';
if ($size_viewport)		$mess .='<tr><td>Экран			</td><td>'.$size_viewport.'</td></tr>';
if ($user)				$mess .='<tr><td>Детали			</td><td>'.$user.' - '.$captcha.'</td></tr>';
						$mess .='</table>';
						
						$mess .='</body>';

//	Добавление файлов к письму
$attachments = array();
$file_mime_arr_option = get_field('file-mime' , 'option');
if( is_array( $file_mime_arr_option ) ){
	
	$file_mime_arr = [] ;
	foreach( $file_mime_arr_option as $file_mime ){
		$file_mime_arr += array(
			$file_mime['label'] => $file_mime['value'],
		);
	}
	
//	Проверяем файлы
	if ( ! empty($_FILES['attachment']) ) {
		require_once(ABSPATH . 'wp-admin/includes/file.php');
		$overrides['test_form'] = false;
		//Допустимые типы
		$overrides['mimes'] = $file_mime_arr;
		
		//Сделаем нормальный массив
		$attachment = $_FILES['attachment'];
		
		if ( is_array($attachment['name']) ) {
			foreach($attachment['name'] as $idx => $name) {
				if (! $name) {
					continue;
				}
				$files[$idx] = [
					'name' => $name,
					'type' => $attachment['type'][$idx],
					'tmp_name' => $attachment['tmp_name'][$idx],
					'error' => $attachment['error'][$idx],
					'size' => $attachment['size'][$idx]
				];
			}
		} else {
			$files[] = $attachment; 
		}
		// Максимальный размер файлов
		$max_size = 20 * 1024; //in KB
		$full_size = 0;
		foreach ($files as $file) {
			$file_size = filesize( $file['tmp_name'] );
			if ( $file_size > ( KB_IN_BYTES * $max_size ) ) {
				$file['error'] = sprintf( __( 'Файл должен быть меньше %1$s КБ.' ), $max_size );
			}

			$full_size += $file_size;
			if ( $full_size > ( KB_IN_BYTES * $max_size ) ) {
				$file['error'] = sprintf( __( 'Общий размер файлов не должен превышать %1$s КБ.' ), $max_size );
			}

			$movefile = wp_handle_upload($file, $overrides);
			if ( $movefile && empty($movefile['error']) ) {
					$attachments[] = $movefile['file'];
			} else {
				//Удаляем файлы в случае ошибки
				foreach ($attachments as $filename) {
						unlink($filename);
				}
				wp_die($file['name']. ' : ' .$movefile['error']);
			}
		}
	}

}

//	Исправление косяка wp_mail(неправильно извлекает $from_name, если есть '<' в загаловке), убрать когда починят
	add_filter( 'wp_mail_from_name', function(){ return get_bloginfo("name");} );

//	Функция отправки
	wp_mail(get_field('order','option'), $subject, $mess, $headers, $attachments); // для wp
	//mail($to, $subject, $mess, $headers); // для php


//	Удаляем файлы
	if ($attachments) {
	foreach ($attachments as $filename) {
		unlink($filename);
	}
	}



//	Сохранение контактов в базе
//	====================
	if(get_field('saveorder','option')){
		$date = date("d.m.y");
		$clock = date("H:i", time());
		echo $domen_no = preg_replace('#^https?://#i', '', str_replace('.', '_', $domen));
		$source_file = iconv("utf-8", "windows-1251", "$date;$clock;$name;$phone;$email;$city;$domen;$title;$formid;$url;$ip; \r\n");
		$file_name = $_SERVER['DOCUMENT_ROOT'] . '/base_'.$domen_no.'-'.get_field('saveorder','option').'.csv';
		$Saved_File = fopen($file_name, 'a+');
		fwrite($Saved_File, $source_file);
		fclose($Saved_File);
	}


// SMS оповещение
//	====================

if(get_field('sms','option')) {
//	Исходные данные
	if ($title)		$sms_title 	= $title."\n";
	if ($formid)	$sms_formid = $formid."\n";
	if ($name)		$sms_name 	= $name."\n";
	if ($phone)		$sms_phone 	= $phone."\n";
	if ($email)		$sms_email 	= $email;
					$country_code = "+7";
//	Создание сообщения
	$sms_text 	= $sms_title.$sms_formid.$sms_name.$sms_phone.$sms_email;

while( have_rows('sms','option') ): the_row();
	$api = get_sub_field('sms-api');
	$phone = get_sub_field('sms-phone');

//	Абонент
	$ch = curl_init("http://sms.ru/sms/send");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_POSTFIELDS, array(

		"api_id"		=>	$api,
		"to"			=>	$country_code.$phone,
		"text"			=>	iconv("utf-8","utf-8",$sms_text),
		"partner_id"	=>	"34022",
		//"translit"		=>	"1"

	));
	$body = curl_exec($ch);
	curl_close($ch);

endwhile;
}

// Отправка сообщения в Telegram
//	====================
$telegram = array_filter(get_field('telegram','option'));
if(!empty($telegram)){
	require_once( __DIR__ . '/../template-parts/order-telegram/form2telegram_hook.php');
}

//	Пересчет номера заявки 
	getNumber();

//	Дизайн страницы благодарности
//	====================
if (!empty($basket)) {
	get_template_part('template-parts/thanks');
} else {
	get_template_part('template-parts/thanks');
}

//	Провал проверки антибот
	} else {
		get_template_part('404');
	}
?>
