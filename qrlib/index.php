<!DOCTYPE html>
<htmllang="pt">
 <head>
 	<meta charset="utf-8">
  <script data-ad-client="ca-pub-0837626748481544" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179708453-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179708453-1');
</script>
<script data-ad-client="ca-pub-0837626748481544" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>QrCode Gratis não expira nunca</title>
</head>
<body>
		<?php 
include('phpqrcode/qrlib.php');

if (isset($_POST['gerar'])) {

$nome = $_POST['nome']; 
$orgName = $_POST['orgName'];
$fonetrabalho = $_POST['fonetrabalho']; 
$fonecasa = $_POST['fonecasa'];
$cel = $_POST['cel'];
$email = $_POST['email'];
  
$cartao  = 'BEGIN:VCARD'."\n"; 
$cartao .= 'FN:'.$nome."\n"; 
$cartao .= 'ORG:'.$orgName."\n";
$cartao .= 'TEL;WORK;VOICE:'.$fonetrabalho."\n"; 
$cartao .= 'TEL;HOME;VOICE:'.$fonecasa."\n"; 
$cartao .= 'TEL;TYPE=cell:'.$cel."\n"; 
$cartao .= 'EMAIL:'.$email."\n"; 
$cartao .= 'END:VCARD'; 

}

 ?>
	
   	 <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top topo">
   	 	<div class="container">
   	 		<h1 class="navbar-brand ">Gerador de QrCode Gratuito</h1>
   	 		<ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://qrcodegratuito.com.br/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#artigos">Artigos</a>
      </li>
  </ul>
   	 	</div>
    	
   	</nav>



    <div class="container">
    	
				    	<div class="row">
				    <div class="col-lg-6">
				    	<h1 class="titulo">QrCode Gratuito</h1>
				    	<p>Gratuito para sempre (uso comercial e de impressão permitido). <br>
				    	Códigos QR em cartões de visita, camisetas, canecas e muito mais! Crie agora o seu Qrcode.</p>
				    	<ul class="nav nav-tabs" id="myTab" role="tablist">
				  		<li class="nav-item" role="presentation">
				   	 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Vcard</a>
				 	 </li>
				 	 <li class="nav-item" role="presentation">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">URL</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">E-mail</a>
				  </li>
				</ul>
   		 <div class="tab-content" id="myTabContent">
  		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   			 
   			 <?php  include('vcard.php'); ?>
 	</div>
 	 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  			  <?php include('link.php');   ?>
  		</div>
 		 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
  							  <?php include('mail.php');  ?>
      
    		</div>
		</div>
	</div>

    		<div class="col-lg-6 text-center custom">
    			
    			<?php 
 		if (isset($_POST['gerar'])) {
 			QRcode::png( $cartao,  "Imagem_QRCODE.png", QR_ECLEVEL_H);

 echo ' <p><img src="Imagem_QRCODE.png" /></p>';
 
 echo '<a href="Imagem_QRCODE.png" download class="  btn btn-success"><i class="fas fa-cloud-download-alt"></i> Fazer Download</a>';

}

if (isset($_POST['url'])) {
	$url = $_POST['link'];
 			QRcode::png( $url,  "Imagem_QRCODE.png", QR_ECLEVEL_H);

 echo ' <p><img src="Imagem_QRCODE.png" /></p>';


 
 echo '<div class=""><a href="Imagem_QRCODE.png" download class="  btn btn-success"><i class="fas fa-cloud-download-alt"></i> Fazer Download</a></div>';

}
 

if (isset($_POST['msg'])) {
	$email = $_POST['mail'];
	$assunto = $_POST['assunto'];
	$corpo = $_POST['corpo'];
 			QRcode::png( "mailto:" .$email."?subject=".$assunto."&amp;body=".$corpo,"Imagem_QRCODE.png", QR_ECLEVEL_H);

 echo ' <p><img src="Imagem_QRCODE.png" /></p>';
 
 echo '<a href="Imagem_QRCODE.png" download class="  btn btn-success"><i class="fas fa-cloud-download-alt"></i> Fazer Download</a>';

}
 		 ?>
    				
    		</div>

	</div>
 <hr>
		<div class="row">

		<div class=" col-12 banner">
		
			

		</div>
	
	</div>
	<div class="conteudo container" id="artigos">
		<section class="">
			<article>
				<h1>3 passos para criar um cartão de Visita com Qr code. </h1>
			<p>Vamos te ensinar de forma pratica de como criar um cartão de visitas com qr code.</p>
			<h2>Passo 1 Gerando um QR code</h2>
			<p>O primeiro passo da nossa jornada é gerar um Qr code com os seus contatos por exemplo.</p>
<p>Aqui no site você escolhe a opção vcard e preenche o formulário com seus dados e clica no botão gerar qr code.</p>
<img src="img/outubro/passo1.png" class="img-fluid">
<p>Salvando seu QrCode</p>
<img src="img/outubro/passo1-2.png" class="img-fluid">
<p>Pronto o seu Qr code está pronto clica no botão download e salva o qr code no seu computador.</p>
<h2>Passo 2 Criando a arte para o seu cartão.</h2>
<p>Eu vou usar um modelo de cartão que já tenho aqui e vou deixar o link para o download, vc só precisa ter o software Adobe Ilustrator instalado no seu pc para editar o nosso cartão.</p>
<p>Vou preencher os dados do cartão inserir a logomarca trocar as cores e inserir o nosso qr code.</p>
<img src="img/outubro/passo2.png" class="img-fluid">


<h2>Passo 3 Imprimir o seu cartão</h2>
<p>Com a arte finalizada vamos enviar para a gráfica imprimir os seus cartões com o qr code.</p> 
<p>Você pode mandar na gráfica da sua cidade ou usar uma gráfica online apenas enviando o arquivo direto no site deles sem sair da sua casa.
</p>
<p>
<img src="img/outubro/passo3.png" class="img-fluid"></p>

<a href="https://qrcodegratuito.com.br/CTV-QRCODEai.ai" class="btn btn-success" download>Download do modelo</a>

			</article>
			


<hr>
		</section>
		<section>
			<article>
	
	<h1>O que é QR Code?</h1>

<p>Código QR (sigla do inglês Quick Response, resposta rápida em português) é um código de barras o mesmo podemos chamar de código barrametrico bidimensional que pode ser facilmente escaneado usando a maioria dos telefones celulares equipados com câmera. Esse código é convertido em texto (interativo), um endereço URI, um número de telefone, uma localização georreferenciada, um e-mail, um contato ou um SMS.</p>

<p>Inicialmente empregado para catalogar peças na produção de veículos, hoje o QR Code é usado no gerenciamento de inventário e controle de estoque em indústrias e comércio. Desde 2003, foram desenvolvidas aplicações que ajudam usuários a inserir dados em telefone celular (telefone móvel) usando a câmera do aparelho. Os códigos QR são comuns também em revistas e propagandas, para registrar endereços e URLs, bem como informações pessoais detalhadas. Em cartões de visita, por exemplo, o código QR facilita muito a inserção desses dados em agendas de telefones celulares. Programas de captura ou PCs com interface RS-232C podem usar um escâner para capturar as imagens.</p>

<p>O padrão japonês para o código QR, JIS X 0510, foi lançado em janeiro de 1999 e corresponde ao padrão internacional ISO/IEC 18004, tendo sido aprovado em junho de 2000. Segundo o site da Denso-Wave, o "código QR é aberto para uso e sua patente, pela Denso-Wave, não é praticada". <a href="https://pt.wikipedia.org/wiki/C%C3%B3digo_QR" target="_blank">Saiba Mais...</a></p>
			</article>
			
		
<hr>
		</section>

		<section>
			<article>
<h1>Como ler um QR Code?</h1>

<p>
Depois de instalar um leitor de QR Code em seu smartphone, você está pronto para digitalizar seu primeiro QR Code. Fazer isso é muito fácil. Apenas siga estes simples passos.
</p>

<h2>Abra o leitor de QR Code em seu telefone.</h2>

<p>Segure seu dispositivo sobre um código QR para que fique claramente visível na tela do smartphone.
</p>

<p>Duas coisas podem acontecer quando você segura corretamente seu smartphone sobre um código QR.</p>

<h2>O telefone verifica o código automaticamente.</h2>

<p>
Em alguns leitores, você precisa pressionar um botão para tirar uma foto, não muito diferente do botão na câmera do smartphone.</p>

<h2>Se necessário, pressione o botão.</h2>

<p>Presto! Seu smartphone lê o código e navega até o destino pretendido, o que não acontece instantaneamente. Isso pode levar alguns segundos na maioria dos dispositivos.
</p>
<p>
Você começará a ver códigos QR em todos os lugares. Eles são usados ​​para educar, informar, explicar e por muitos outros motivos. Fique atento a eles e tenha seu leitor de QR Code à mão! Depois que você pegar o jeito, os códigos QR economizarão muito tempo e esforço.</p>
<a href="https://www.dummies.com/business/marketing/social-media-marketing/how-to-scan-a-qr-code/" target="_blank">Artigo Original By Joe Waters</a>
			</article>
			<hr>
		</section>


		
	</div>
    	
    </div>
    <footer class="footer footer-expand-lg footer-dark bg-primary rodape">
  <div class="container">
    <p>Qr Code Gratuito Todos direitos reservados &copy; 2020</p>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>