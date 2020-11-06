 <h2>Gerar Vcard</h2>
     <form method="post" class="formulario">
      <div class="form-row">
    <div class="col">
     <input type="text" name="nome" placeholder="Nome Completo" required="">
    </div>
    <div class="col">
     <input type="text" name="orgName" placeholder="Empresa">
    </div>
  </div>

    <div class="form-row">
    <div class="col">
      <input type="text" name="fonetrabalho" placeholder="Telefone Comercial">
    </div>
     <div class="col">
      <input type="text" name="fonecasa" placeholder="Telefone">
    </div>
    </div>  

  <div class="form-row">
    <div class="col">
    <input type="text" name="cel" placeholder="Celular" required="">
  </div>

   <div class="col">
    <input type="text" name="email" placeholder="Email" required="">
  </div>

  </div>  
<div class="form-group"><input type="submit" value="Gerar Qr Code" class="btn btn-primary""></div>  
  <input type="hidden" name="gerar" value="s">  
  
</form>