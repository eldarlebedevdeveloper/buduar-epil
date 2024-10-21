<?php
session_start();
$pass='123456789'; // Пароль для входу в Адмінку
$adm=0; // Якщо в змінній $adm==1 то ви успішно авторизовані

if((isset($_POST['slovo'])||isset($_POST['sekret']))||(isset($_SESSION['sekret']) && $_SESSION['sekret'] ==md5($pass))){
	if ((isset($_POST['slovo']) && $_POST['slovo']==$pass)||($_SESSION['sekret']==md5($pass))){
		$_SESSION['sekret']=md5($pass); // Якщо пароль збігається додаємо в сесію змінну secret з його md5 хеш
		$adm=1;
		};
		} else {
			// Якщо пароля немає показуємо форму входу
			echo('
			<!doctype html>
			<html lang="ru">
			<head>
			<meta charset="UTF-8">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			</head>
			<body>
			<center><form method="POST" action="e.php" style="margin-top: 30px;">
			<div style="color: #4e4e4e;
    height: 54px;
    line-height: 24px;
    font-size: 31px;
    font-family: sans-serif;">Вхід до адмінки</div>
			<input type="text" placeholder="Введіть пароль у цьому полі..." name="slovo" size="100" style="min-height: 60px;
    margin-bottom: 15px;
    border: 1px solid transparent;
    background-color: transparent;
    background-position: 0% 50%;
    background-size: 16px;
    background-repeat: no-repeat;
    box-shadow: inset 0 -3px 0 0 #005bff;
    -webkit-transition: all 555ms ease;
    transition: all 555ms ease;
    font-size: 18px;
    width: 296px;
    text-align: center;"><br>
			<input type=submit name="save" value="Войти" style="  width: 300px;
  padding-top: 19px;
  padding-bottom: 22px;
  background-color: #005bff;
  box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
  font-size: 20px;
    color: white;">
			</form></center></body></html>');
		};

if($adm==1){
if(isset($_POST['pagename'])){
	$_SESSION['pagename']=$_POST['pagename']; // Отримуємо ім'я сторінки для редагування
};	
if(isset($_SESSION['pagename'])){	
	$pagename=$_SESSION['pagename'];
} else {
	$pagename='index.html';	// Якщо його немає в куках і немає в запиті POST то ставимо його=index.html	
};

// В змінну $template помістимо код редагованої сторінки
$template=file_get_contents($pagename);

// Виводимо шапку адмінки
echo('
<html>
<head>
<meta charset="UTF-8">
<style>
	body, html {
	padding: 0px; margin: 0px;
	background: #f2f3f5;
	text-align: center;
	font-family: sans-serif;
}
textarea {
	padding: 20px;
    width: 600px;
    height: 300px;
    font-size: 16px;
    box-shadow: 0 0 0 1px #005bff, inset 0 0 0 2px #005bff;
    border: none;
}
a {
	display: inline;
    -webkit-transition: all 555ms ease;
    transition: all 555ms ease;
    color: #005bff;
    text-decoration: none;
}
.kartinka {
	display: inline-block; 
	text-decoration: none;
	padding: 20px; padding-bottom: 5px;
	text-align: center; 
	cursor: pointer;
}
.kartinka:hover {
	background: #2196f33d; 
	border-radius: 5px;
}
.kartinka img {
	height: 100px; 
	margin-bottom: 10px;
}
.bigkartinka {
	height: 300px; 
	padding: 50px;
}
#menu {
background: #fffff0;
    padding-top: 15px;
    padding-bottom: 10px;
    padding-left: 10px;
    margin-bottom: 30px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    font-size: 20px;
    background-color: #2196f33d;
}
#myform {
	height: 40px; line-height: 40px;
	display: inline-block;
	vertical-align: top;
	padding-left: 20px; padding-right: 20px;
	margin-right: 3px;
	text-align: center;
	font-size: 90%;
}
#menu a {
	    padding: 7px 20px 9px 20px;
    background-color: #005bff;
    box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
    box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
    color: white;
    font-size: 18px;
}
.mytext, .cssjs {
	display: block;
	border-radius: 5px;
	padding: 10px; padding-left: 20px; padding-right: 20px;
	margin: 20px;
	background: #fffff9;
	color: black;
}
.mytext:hover, .cssjs:hover {
	background: #2196f33d;
	cursor: pointer;
}
#help {
	max-width: 850px; margin: 0 auto; text-align: left; font-size: 120%;
}
</style>
</head>
<body>
<div id="menu">
<form action="e.php" id="myform" method="POST">
<select name="pagename">');
// Створюємо список сторінок у кореневій папці, доступних для редагування
$filelist1 = glob("*.html");
$ddd=0;
$ssss='';
for ($j=0; $j<count($filelist1); $j++) {
	if($filelist1[$j]==$_SESSION['pagename']){
		$ssss.=('<option selected>'.$filelist1[$j].'</option>');
		$ddd=1;
	} else {
		$ssss.=('<option>'.$filelist1[$j].'</option>');
	};
};
if($ddd==0){
	$ssss='';
	for ($j=0; $j<count($filelist1); $j++) {
		if($filelist1[$j]=='index.html'){
			$ssss.=('<option selected>'.$filelist1[$j].'</option>');
			$ddd=1;
		} else {
			$ssss.=('<option>'.$filelist1[$j].'</option>');
		};
	};
};
echo($ssss);
echo('</select>
<input type="submit" value="Редагувати" title="Редагувати">
</form>
<a href="e.php?mode=0">Текст</a>
<a href="e.php?mode=7">Зображення</a>
<a href="e.php?mode=5">HTML</a>
<a href="e.php?mode=8">CSS і JS</a>
<a href="e.php">Допомога</a>
<a href="index.html" target="_blank">На сайт</a>
</div>
');

//******************************************************************************************
// Список зображень
if(isset($_GET['mode']) && $_GET['mode']=='7'){
	// Витягуємо список картинок з HTML коду
	$imgreg = "/[\"|\(']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(webp|jpg|png|gif)))[\"|\)']/"; 
	preg_match_all($imgreg, $template, $imgmas);
	for ($j=0; $j< count($imgmas[1]); $j++) {
		$imgname=trim($imgmas[1][$j]);
		echo('<div class="kartinka"><a href="e.php?mode=1&img='.$imgname.'"><img src="'.$imgname.'?'.rand(1, 32000).'"></a><br>'.$imgname.'<br>');
		if(file_exists($imgname)){
			$size = getimagesize ($imgname); echo "Розмір картинки: $size[0] * $size[1]"."<p>";
		} else { echo("Зображення не завантажено"); };
		echo("</div>");
	};
	// Отримуємо список CSS файлів до масиву $mycss	
	$mycss = array();
	$cssreg = "/[\"']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(css)))[\"']/"; 
	preg_match_all($cssreg, $template, $cssmas);
	for ($j=0; $j< count($cssmas[1]); $j++) {
		array_push($mycss, trim($cssmas[1][$j]));
	};
	echo('<hr>');
	// Витягуємо з кожного CSS файлу адреси картинок
	for ($i=0; $i< count($mycss); $i++) {
		$template=file_get_contents($mycss[$i]);
		$imgreg = "/[.\(]((.*\\/\\/|)([\\/a-z0-9_%]+\\.(jpg|png|gif)))[\)]/"; 
		preg_match_all($imgreg, $template, $imgmas);
		for ($j=0; $j< count($imgmas[1]); $j++) {
			$imgname=trim($imgmas[1][$j]);
			echo('<div class="kartinka"><a href="e.php?mode=1&img='.$imgname.'"><img src="'.$imgname.'?'.rand(1, 32000).'"></a><br>'.$imgname.'<br>');
			if(file_exists($imgname)){
				$size = getimagesize ($imgname); echo "Розмір зображення: $size[0] * $size[1]"."<p>";
			} else { 
				if(file_exists(substr($imgname,1))){
					$size = getimagesize(substr($imgname,1)); echo "Розмір зображення: $size[0] * $size[1]"."<p>";
				} else { 
					echo("Зображення не завантажено"); 
				};		
			};
			echo("</div>");
		};
	};
};

//******************************************************************************************
// Одна картинка
if(isset($_GET['mode']) && $_GET['mode']=='1'){
	$imgname=$_GET['img'];
	if($imgname[0]=='/'){
		$imgname=substr($imgname,1);
	};
	echo('<center><img src="'.$imgname.'" class="bigkartinka"><br>'.$imgname.'<p>');
	if(file_exists($imgname)){
		$size = getimagesize ($imgname); echo "УВАГА!!!!!!!! Розмір картинки має бути: $size[0] * $size[1]"."<p>";
	} else { 
		if(file_exists(substr($imgname,1))){
			$size = getimagesize(substr($imgname,1)); echo "Розмір зображення: $size[0] * $size[1]"."<p>";
		} else { 
			echo("Зображення не завантажено"); 
		};		
	};
	echo('<form enctype="multipart/form-data" action="e.php?mode=2&img='.$imgname.'" method="POST">Завантажити зображення з компютера: <p><input name="userfile" type="file" required><p><input type="submit" style="width: 300px;
    padding-top: 19px;
    padding-bottom: 22px;
    background-color: #005bff;
    box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
    font-size: 20px;
    color: white;
    margin-top: 20px;" value="Почати завантаження" /></form>');	
};


//******************************************************************************************
// Заміна зображення
if(isset($_GET['mode']) && $_GET['mode']=='2'){
	$imgname=$_GET['img'];
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $imgname)) {
		echo "<br><br><center>Файл був успішно завантажений.<p><a href='e.php'>Повернутися до списку зображень</a><p>Щоб побачити зміни на сайті, оновіть сторінку в гугл хромі із затиснутою клавішею shift (не цю (це адмінка), а сторінку Вашого сайту)";
	};
};


//******************************************************************************************
// Список текстових фрагментів
if(isset($_GET['mode']) && $_GET['mode']=='0'){
	// Поміщаємо в масив $ff всі тексти з HTML коду
	$ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
	for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
	for ($j=0; $j< count($ff); $j++) { 
		echo('<a href="e.php?mode=3&j='.$j.'" class="mytext">'.$ff[$j].'</a>');
	};
};


//******************************************************************************************
// Текстовий фрагмент
if(isset($_GET['mode']) && $_GET['mode']=='3'){
	// Поміщаємо в масив $ff всі текстові фрагменти з HTML коду
	$ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
	for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
	$jj=$_GET['j'];
	$tektekst=$ff[$jj];
	$kol=1;
	for ($j=0; $j<$jj; $j++) { 
		$kol=$kol + substr_count($ff[$j],$tektekst);
	};
	echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="e.php?mode=4&j='.$jj.'"><br><br><h2>Редагування текстового фрагмента</h2><br><br><textarea name="mytext">'.$tektekst.'</textarea><br><input style="width: 300px;
    padding-top: 19px;
    padding-bottom: 22px;
    background-color: #005bff;
    box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
    font-size: 20px;
    color: white;
    margin-top: 20px;" type="submit" value="Замінити текст" title="Замінити текст"></form></div>');
};


//******************************************************************************************
// Редагування текстового фрагмента
if(isset($_GET['mode']) && $_GET['mode']=='4'){
	// Поміщаємо в масив $ff всі тексти з HTML коду
	$ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
	for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
	$jj=$_GET['j'];
	$tektekst=$ff[$jj];
	$kol=1;
	for ($j=0; $j<$jj; $j++) { 
		$kol=$kol + substr_count($ff[$j],$tektekst);
	};
	$subject=file_get_contents($pagename);
	function str_replace_nth($search, $replace, $subject, $nth)
	{
		$found = preg_match_all('/'.preg_quote($search).'/', $subject, $matches, PREG_OFFSET_CAPTURE);
		if (false !== $found && $found > $nth) {
			return substr_replace($subject, $replace, $matches[0][$nth][1], strlen($search));
		}
		return $subject;
	};
	$rez=str_replace_nth($tektekst, $_POST['mytext'], $subject, $kol-1);
	file_put_contents($pagename, $rez);
	echo "<br><br><center>Текст було успішно змінено.<p><a href='e.php?mode=0'>Повернутись до списку текстів</a><p>Щоб побачити зміни на сайті, оновіть сторінку (не цю (це адмінка), а сторінку Вашого сайту)";
};


//******************************************************************************************
// Форма для HTML коду
if(isset($_GET['mode']) && $_GET['mode']=='5'){
	$template=htmlspecialchars(file_get_contents($pagename));
	echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="e.php?mode=6"><br><br><h2>Редагування HTML коду</h2><br><br><textarea name="mytext" style="width: 90%; height: 500px;">'.$template.'</textarea><br><input style="width: 300px;
    padding-top: 19px;
    padding-bottom: 22px;
    background-color: #005bff;
    box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
    font-size: 20px;
    color: white;
    margin-top: 20px;" type="submit" value="Замінити текст" title="Замінити текст"></form></div>');
};


//******************************************************************************************
//Редагування HTML коду
if(isset($_GET['mode']) && $_GET['mode']=='6'){
	file_put_contents($pagename, $_POST['mytext']);
};

//******************************************************************************************
// Отримуємо список CSS та JS файлів
if(isset($_GET['mode']) && $_GET['mode']=='8'){
	echo('<br><h2>CSS і JS файл, які відносяться до '.$pagename.'</h2><p><br>');
	$cssreg = "/[\"']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(css)))[\"']/"; 
	preg_match_all($cssreg, $template, $cssmas);
	for ($j=0; $j< count($cssmas[1]); $j++) {
	$rrr=trim($cssmas[1][$j]);
	if (!(strstr($rrr, "http"))) {
 	echo('<a class="cssjs" href="e.php?mode=9&fl='.$rrr.'">'.$rrr.'</a><p>');
	};
	};
	$cssreg = "/[\"']((.*\\/\\/|)([\\/a-z0-9_%]+\\.(js)))[\"']/"; 
	preg_match_all($cssreg, $template, $cssmas);
	for ($j=0; $j< count($cssmas[1]); $j++) {
	$rrr=trim($cssmas[1][$j]);
	if (!(strstr($rrr, "http"))) {
	echo('<a class="cssjs"  href="e.php?mode=9&fl='.$rrr.'">'.$rrr.'</a><p>');
	};
	};
};

//******************************************************************************************
// Форма для HTML коду
if(isset($_GET['mode']) && $_GET['mode']=='9'){
	$template=htmlspecialchars(file_get_contents($_GET['fl']));
	echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="e.php?mode=10&fl='.$_GET['fl'].'"><br><br><h2>Редагування коду</h2><br><br><textarea name="mytext" style="width: 90%; height: 500px;">'.$template.'</textarea><br><input style="width: 300px;
    padding-top: 19px;
    padding-bottom: 22px;
    background-color: #005bff;
    box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
    font-size: 20px;
    color: white;
    margin-top: 20px;" type="submit" value="Замінити текст" title="Замінити текст"></form></div>');
};

//******************************************************************************************
//Редагування всього HTML коду
if(isset($_GET['mode']) && $_GET['mode']=='10'){
	file_put_contents($_GET['fl'], $_POST['mytext']);
};

//******************************************************************************************
// Помощь
if(!isset($_GET['mode'])){
	echo('<div id="help"><p><br><h2>Ви знаходитесь в панелі управління сайтом.</h2><p>Так, це і є адмінка. <p><p>
		Зліва вгорі є список, що випадає, там вибирається сторінка, яку потрібно відредагувати, index це завжди головна сторінка, інші внутрішні, їх назви видно в адресному рядку браузера.
		<p>правіше вгорі знаходяться кнопки, при натисканні на "Текст" ви зможете редагувати текст на сайті, просто натиснувши за потрібним абзацом або словом і замінивши його на нове, після чого зберегти зміни.<p>
		При натисканні на кнопку "Картинки" можна змінювати старі картинки на нові, просто натиснувши по тій, яку потрібно замінити, завантажити на її місце нову та зберегти зміни. 
		<hr>
		<p> ЗВЕРНІТЬ УВАГУ розмір нової картинки повинен бути такий самий як і у старої, якщо стара була 348 пікселів на 234 пікселі, то і нова теж повинна бути 348 пікселів на 234 пікселі.<hr>
		<p> По кнопками HTML і CSS JS краще взагалі не натискати, оскільки те, що там, призначене для людей які розуміють код, ви можете поламати сайт, внісши туди невірні зміни.
		<p> Там можна вставляти код метрик/аналітик/фейсбук-пікселів/онлайн консультантів та інших штук, які потребують вставки коду, натиснувши на кнопку "HTML".
<br><br><br><p><a href="https://youtu.be/IryKxD_1vx0" target="_blank">Відео інструкція з адмінки тут - просто натисніть на цей текст.</a><br><br>
		<p>Є питання? Потрібно що зміни вніс я? <p>Тоді <a href="https://t.me/nick1138">ось мій телеграм — nick1138 просто натисніть на цей текст.</a> </div>');
};

echo('</body></html>');
};
?>