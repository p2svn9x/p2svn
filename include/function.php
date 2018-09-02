<?php
function protect($string) {
	$protection = htmlspecialchars(trim($string), ENT_QUOTES);
	return $protection;
}

function idinfo($id,$value) {
    global $bdd;
	$sql = $bdd->prepare("SELECT * FROM vanguard_users WHERE usern=?");
    $sql->execute(array($id));
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	return $row[$value];
}

function success($text) {
	return '<div class="alert color green-color">'.$text.'</div>';
}

function info($text) {
	return '<div class="alert color blue-color">'.$text.'</div>';
}

function error($text) {
	return '<div class="alert color red-color">'.$text.'</div>';
}

function isValidURL($url) {
	return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}

function isValidUsername($str) {
    return preg_match('/^[a-zA-Z0-9-_]+$/',$str);
}

function isValidEmail($str) {
	return filter_var($str, FILTER_VALIDATE_EMAIL);
}

function genSKey($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}





function decode_currency($currency) {
	if ($currency == "USD") {
		return 'VND';
	}
	if ($currency == "EUR") {
		return 'VND';
	}
	if ($currency == "GBP") {
		return 'VND';
	}
	if ($currency == "VND") {
		return 'VND';
	}
}

function truncate($text, $chars = 30) {
    if(strlen($text) > $chars) {
        $text = $text.' ';
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text ,' '));
        $text = $text.'...';
    }
    return $text;
}

function emailToUser($email){
	$position = strpos($email,'@');
	if($position==false){
		$user=$email;
	} else {
	$user = substr($email,0,$position);
}
	
	return $user;
}


?>
