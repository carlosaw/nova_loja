<h1>Checkout Boleto</h1>

<h3>Dados Pessoais</h3>

<?php if(!empty($error)): ?>
  <div class="warn">
    <?php echo $error; ?>
  </div>
<?php endif; ?>

<form method="POST">
  <strong>Nome:</strong><br/>
  <input type="text" name="name" value="Carlos Alberto Sampaio Moraes" /><br/><br/>

  <strong>CPF:</strong><br/>
  <input type="text" name="cpf" value="49123866934" /><br/><br/>

  <strong>Telefone:</strong><br/>
  <input type="tel" name="telefone" value="65998776655" /><br/><br/>

  <strong>E-mail:</strong><br/>
  <input type="email" name="email" value="teste@hotmail.com" /><br/><br/>

  <strong>Senha:</strong><br/>
  <input type="password" name="pass" value="123"/><br/><br/>

  <h3>Informacoes de Endereco</h3>
  <strong>CEP:</strong><br/>
  <input type="text" name="cep" value="78125650" /><br/><br/>

  <strong>Rua:</strong><br/>
  <input type="text" name="rua" value="Rua Mem de Sa" /><br/><br/>

  <strong>Numero:</strong><br/>
  <input type="text" name="numero" value="61" /><br/><br/>

  <strong>Complemento:</strong><br/>
  <input type="text" name="complemento" value="casa" /><br/><br/>

  <strong>Bairro:</strong><br/>
  <input type="text" name="bairro" value="Centro-Sul" /><br/><br/>

  <strong>Cidade:</strong><br/>
  <input type="text" name="cidade" value="Varzea Grande" /><br/><br/>

  <strong>Estado:</strong><br/>
  <input type="text" name="estado" value="MT" /><br/><br/>

  <input type="submit" name="mp" value="Efetuar Compra" class="button efetuarCompra" /><br/><br/>

</form>