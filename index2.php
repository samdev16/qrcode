<?php
namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

require_once 'vendor/autoload.php';

if(isset($_POST['link'])) $data = $_POST['link'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Gerador de QR Code</title>
</head>
<body>
	<form action="" method="post">
		<label>Coloque o seu link:</label>
		<input type="text" name="link">
		<input type="submit" name="Gerar QR Code">
	</form>

</body>
</html>
<?php 

if(isset($_POST['link'])){


$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_IMAGE_PNG,
	'eccLevel'   => QRCode::ECC_L,
]);

// invoke a fresh QRCode instance
$qrcode = new QRCode($options);

// and dump the output
$qrcode->render($data);

$mes = date('Y-m-d-H-i-s');
$nome ="qrfile{$mes}.png";


// ...with additional cache file
$qrcode->render($data, 'img/'.$nome);

echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
echo "</br>";
echo '<a href="img/'.$nome.'" download>Download</a>';
}

 ?>