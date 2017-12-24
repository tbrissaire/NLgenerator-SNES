<?php 
if(isset($_POST['export-textarea'])){
	
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=Lettre-SNES.html ");
header("Content-Transfer-Encoding: binary ");

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<!-- Lettre d information SNES SNES-FSU -->';
echo '<html xmlns="https://www.w3.org/1999/xhtml">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<!--[if !mso]><!-->';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
echo '<!--<![endif]-->';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
echo '<title>Lettre d information du SNES-FSU</title>';
echo '<!--[if (gte mso 9)|(IE)]>';
echo '<style type="text/css">';
echo 'table {border-collapse: collapse;}';
echo '</style>';
echo '<![endif]-->';
echo '<style>';

//	require_once('_css/newsletter.css');
require_once('_css/snes_style.css');
	echo '</style>';
	echo '<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css"><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">';
echo '<link href="https://www.snes.edu/newsletter/css_lettre.css" rel="stylesheet">';
	echo '</head>';
	echo '<body style="margin: 0 !important;padding: 0;background-color: #fff">';
        echo '<center class="wrapper" style="width: 100%;table-layout: fixed;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">';
        echo '<div class="webkit" style="max-width: 600px;margin: 0 auto">';
        echo '<!--[if (gte mso 9)|(IE)]>';
	echo '<table width="600" align="center">';
	echo '<tr>';
	echo '<td>';
	echo '<![endif]-->';
	echo '<table class="outer" align="center" style="background-color: white;border-spacing: 0;font-family: sans-serif;color: #333;margin: 0 auto;width: 100%;max-width: 600px">';
	echo ''.$_POST['export-textarea'].'</table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></div></center></body></html>';
	

	
	}

?>
