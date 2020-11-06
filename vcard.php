<?php 
namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

require_once 'vendor/autoload.php';




 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Gerador de QR Code</title>
</head>
<body>
	<form action="" method="post">
		<label>Coloque o seu link:</label>
		<input type="text" name="surname">
		<br>
		<label>Coloque o seu name:</label>
		<input type="text" name="name">
		<br>
		<label>Coloque o seu link:</label>
		<input type="text" name="position">

			<br>
		<label>Coloque o seu link:</label>
		<input type="text" name="qualification">
			<br>
		<label>Coloque o seu link:</label>
		<input type="text" name="telephone">
			<br>
		<label>Coloque o seu link:</label>
		<input type="text" name="cellno">

		<br>
		<label>Coloque o seu link:</label>
		<input type="text" name="email">

		<br>
		<label>Coloque o seu link:</label>
		<input type="text" name="fax">

		<br>
		<input type="submit" name="Gerar QR Code">
	</form>

	<?php 



if(isset($_POST['name'])){

	$data = $_POST['name'];

$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_IMAGE_PNG,
	'eccLevel'   => QRCode::ECC_L,
]);

// invoke a fresh QRCode instance
$qrcode = new QRCode($options);

// and dump the output
$qrcode->render($data);

echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
}


	 ?>

</body>
</html>




