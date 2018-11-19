<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
* Main Cross Functions
*/

function format_title($string){
	$x = explode(' ', $string);
    $title = $x[0];
    $title2 = '';
    for($j=1;$j<count($x);$j++){
    	$title2 .= ' '.$x[$j];
    }

    return $title.'<br /><span>'.$title2.'</span>';
}

// image effects
function image_effects($file){
	if(preg_match("/.jpg/i", "$file")) $format = 'image/jpeg';

	if (preg_match("/.gif/i", "$file")) $format = 'image/gif';

   	if(preg_match("/.png/i", "$file")) $format = 'image/png';

	switch($format) {
           case 'image/jpeg':
           $image = imagecreatefromjpeg($file);
           break;

           case 'image/gif';
           $image = imagecreatefromgif($file);
           break;

           case 'image/png':
           $image = imagecreatefrompng($file);
           break;
       }

	imagefilter($image, IMG_FILTER_GRAYSCALE);
	imagejpeg($image, $file);
}

//
function PriceInWords($valor=0) {
	$len = strlen($valor);
	$price_f = FormatCurrency($valor);

	$price_show_exp = explode('.', $price_f);
	$price_show = $price_show_exp[0];

	if ($len == 0)
		return 'zero';
	else if ($len > 0 && $len <= 5) {
		if ($valor == 1) return $valor.' real';
		else return $valor.' reais';
	} else if ($len > 5 && $len <= 8)
		return $price_show.' mil';
	else if ($len > 8)
		return $price_show.'.'.substr($price_show_exp[1],0,2).' milhões';
}

// only num
function OnlyNum($str) {
	return preg_replace('/[^0-9]/', '', $str);
}

// format currency
function FormatCurrency($price) {
	if (!empty($price)) {
		$price = trim(OnlyNum($price));
		$price_pos = substr($price,strlen($price)-2,strlen($price));
		$price_pre = substr($price,0,strlen($price)-2);
		$price_formatted = $price_pre.'.'.$price_pos;

		setlocale(LC_MONETARY, 'pt_BR');
		return number_format($price_formatted, 2, ',', '.');
	} else
		return '0,00';
}

// image resize then crop
function resize_then_crop($filein, $fileout, $imagethumbsize_w, $imagethumbsize_h) {
	$red = 255;
	$green = 255;
	$blue = 255;
	$white = 255;
	$percent = 0;
	// Get new dimensions
	list($width, $height) = getimagesize($filein);
	$new_width = $width * $percent;
	$new_height = $height * $percent;

	if(preg_match("/.jpg/i", "$filein")) $format = 'image/jpeg';

	if (preg_match("/.gif/i", "$filein")) $format = 'image/gif';

   	if(preg_match("/.png/i", "$filein")) $format = 'image/png';

       switch($format) {
           case 'image/jpeg':
           $image = imagecreatefromjpeg($filein);
           break;

           case 'image/gif';
           $image = imagecreatefromgif($filein);
           break;

           case 'image/png':
           $image = imagecreatefrompng($filein);
           break;
       }

	$width = $imagethumbsize_w ;
	$height = $imagethumbsize_h ;

	list($width_orig, $height_orig) = getimagesize($filein);

	if ($width_orig < $height_orig) {
		$height = ($imagethumbsize_w / $width_orig) * $height_orig;
	} else {
		$width = ($imagethumbsize_h / $height_orig) * $width_orig;
	}

	if ($width < $imagethumbsize_w) {
		//if the width is smaller than supplied thumbnail size
		$width = $imagethumbsize_w;
		$height = ($imagethumbsize_w/ $width_orig) * $height_orig;;
	}

	if ($height < $imagethumbsize_h) {
		//if the height is smaller than supplied thumbnail size
		$height = $imagethumbsize_h;
		$width = ($imagethumbsize_h / $height_orig) * $width_orig;
	}

	$thumb = imagecreatetruecolor($width , $height);
	$bgcolor = imagecolorallocate($thumb, $red, $green, $blue);
	ImageFilledRectangle($thumb, 0, 0, $width, $height, $bgcolor);
	imagealphablending($thumb, true);

	imagecopyresampled($thumb, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
	$thumb2 = imagecreatetruecolor($imagethumbsize_w , $imagethumbsize_h);

	// true color for best quality
	$bgcolor = imagecolorallocate($thumb2, $red, $green, $blue);
	ImageFilledRectangle($thumb2, 0, 0, $imagethumbsize_w , $imagethumbsize_h , $white);
	imagealphablending($thumb2, true);

	$w1 =($width/2) - ($imagethumbsize_w/2);
	$h1 = ($height/2) - ($imagethumbsize_h/2);

	imagecopyresampled($thumb2, $thumb, 0,0, $w1, $h1, $imagethumbsize_w , $imagethumbsize_h ,$imagethumbsize_w, $imagethumbsize_h);

	if ($fileout !="")imagejpeg($thumb2, $fileout, 100); //write to file
}

//Trata dados para ir ao Banco de Dados
if (!function_exists('StrtoDB')){
   function StrtoDB($s, $t='')
   {
      if (is_array($s)){
         return "{".implode(',', $s)."}";
      }else{
         if ($t == 'html') return $s;

         $s = trim(strip_tags($s));
         if ($s == '') return null;

         switch ($t) {
            case 'uc':
               $s = myUpper($s);
               break;
            case 'lc':
               $s = myLower($s);
               break;
            case 'pass':
               $CI =& get_instance();
               $s = md5($s.$CI->config->item('encryption_keyname'));
               break;
            case 'json':
               if ($s === 'false') $s = "[]";
               break;
            case 'date':
               $s = dateBRtoUS($s);
               break;
            case 'time':
               $s = date('H:i:s', strtotime($s));
               break;
            case 'int':
               $s = isInt($s) ? $s : OnlyNum($s);
               break;
            case 'float':
               $s = str_replace(".", "", $s);
               $s = str_replace(",", ".", $s);
               break;
         }
         return $s == '' ? null : $s;
      }
   }
}

//Seta campo validado para ser ir ao BD
if (!function_exists('SetData')){
	function setData($field, $t='', $fieldDB='')
	{
		if (empty($fieldDB)) $fieldDB = $field;

		$CI =& get_instance();
		$CI->db->set($fieldDB, StrtoDB($CI->input->post($field), $t));
	}
}

define('LATIN1_UC_CHARS', "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝºª");
define('LATIN1_LC_CHARS', "àáâãäåæçèéêëìíîïðñòóôõöøùúûüýºª");
//FUNÇAO PARA FAZER UPPERCASE SEM DAR ZICA COM UTF8
if (!function_exists('myUpper')){
   function myUpper ($str)
   {
      return strtoupper(strtr($str, LATIN1_LC_CHARS, LATIN1_UC_CHARS));
   }
}

//FUNÇAO PARA FAZER LOWERCASE SEM DAR ZICA COM UTF8
if (!function_exists('myLower')){
   function myLower ($str)
   {
      return strtolower(strtr($str, LATIN1_UC_CHARS, LATIN1_LC_CHARS));
   }
}

// directories
if (!function_exists('create_dirs_recursive'))
{
    function create_dirs_recursive($pathname) {
        // Check if directory already exists
        if (is_dir($pathname) || empty($pathname)) {
            return true;
        }

        // Ensure a file does not already exist with the same name
        $pathname = str_replace(array('/', ''), '/', $pathname);
        if (is_file($pathname)) {
            trigger_error('mkdirr() File exists', E_USER_WARNING);
            return false;
        }

        // Crawl up the directory tree
        $next_pathname = substr($pathname, 0, strrpos($pathname, '/'));
        if (create_dirs_recursive($next_pathname, '0777')) {
            if (!file_exists($pathname)) {
                $oldmask = umask(0);
                $done = mkdir($pathname, 0777);
                umask($oldmask);
                return $done;
            }
        }
        return false;
    }
}

// file
if (!function_exists('is_image')){
	function is_image($fullpath)
	{
		$real_mime = get_real_mime($fullpath);

		$img_mimes = array(
							'image/gif',
							'image/jpeg',
							'image/png',
						);

		return (in_array($real_mime, $img_mimes, TRUE)) ? TRUE : FALSE;
	}
}

if (!function_exists('get_real_mime')){
	function get_real_mime($fullpath)
	{
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		return finfo_file($finfo, $fullpath);
	}
}

//CONVERSÃO DE DATAS
if (!function_exists('ExpectedDelivery')){
	function ExpectedDelivery($date)
	{
		$mkt = mysql_to_unix($date);
		return getMonthBR(date('m', $mkt)).'/'.date('Y', $mkt);
	}
}

if (!function_exists('formatDate'))
{
   function formatDate($date){

   	$arrMonthsOfYear = array('JANEIRO','FEVEREIRO','MARÇO','ABRIL','MAIO','JUNHO','JULHO','AGOSTO','SETEMBRO','OUTUBRO','NOVEMBRO','DEZEMBRO');

   	return strftime("%d", strtotime($date)).' de '.$arrMonthsOfYear[strftime('%m', strtotime($date))-1].' de '.strftime("%Y", strtotime($date));
   }
}

if (!function_exists('getWeekdayBR')){
	function getWeekdayBR($date, $abbr=false, $lc=false)
	{
		$date = date('w',strtotime($date));
		$ret = '';
		switch($date) {
			case 0:
				if ($abbr) $ret =  'Dom';
				else $ret =  'Domingo';
				break;
			case 1:
				if ($abbr) $ret =  'Seg';
				else $ret =  'Segunda-feira';
				break;
			case 2:
				if ($abbr) $ret =  'Ter';
				else $ret =  'Terça-feira';
				break;
			case 3:
				if ($abbr) $ret =  'Qua';
				else $ret =  'Quarta-feira';
				break;
			case 4:
				if ($abbr) $ret =  'Qui';
				else $ret =  'Quinta-feira';
				break;
			case 5:
				if ($abbr) $ret =  'Sex';
				else $ret =  'Sexta-feira';
				break;
			case 6:
				if ($abbr) $ret =  'Sab';
				else $ret =  'Sábado';
				break;
			default:
				$ret =  'N/D';
		}

		if ($lc) $ret = myLower($ret);
		return $ret;
	}
}

if (!function_exists('timelongToShort')){
   function timelongToShort($time)
   {
      if (empty($time)) return NULL;
      $x = explode(":", $time);
      return $x[0].":".$x[1];
   }
}

//Confirma se realmente é Inteiro
if (!function_exists('isInt'))
{
   function isInt($num='')
   {
      return $num != '' ? preg_match("/^[0-9]+$/", $num) : false;
   }
}

//geraPassword
if (!function_exists('geraPassword'))
{
   function geraPassword($numchar = 8) {
      $letras = "a,b,c,d,e,f,g,h,i,j,1,2,3,4,5,6,7,8,9,0";
      $array = explode(",", $letras);
      shuffle($array);
      $senha = implode($array, "");
      return substr($senha, 0, $numchar);
   }
}

//Mensagem de Erro em Imagens
if (!function_exists('ImageErrors'))
{

	function ImageErrors($error){
			$error = strip_tags($error);

			switch ($error){
			case 'upload_invalid_dimensions':
					$message_error = 'A imagem deve ser menor que 1024x768 pixels'; break;
			case 'upload_invalid_filesize':
					$message_error = 'A imagem deve pesar menos que 1MB'; break;
			case 'upload_invalid_filetype':
				 	$message_error = 'A imagem deve possuir extens�o JPG,GIF ou PNG'; break;
			default:
					$message_error = '';break;
			}

			return $message_error;
	}
}
