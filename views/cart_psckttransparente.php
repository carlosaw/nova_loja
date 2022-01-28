<h1>Checkout Transparente - PagSeguro</h1>
<h4>Preencha todos os campos para efetuar sua compra!</h4>
<h3>Dados Pessoais</h3>
<strong>Nome:</strong><br/>
<input type="text" name="name" value="Carlos Alberto Sampaio Moraes" /><br/><br/>

<strong>CPF:</strong><br/>
<input type="text" name="cpf" value="49123866934" /><br/><br/>

<strong>Telefone:</strong><br/>
<input type="tel" name="telefone" value="65998776655" /><br/><br/>

<strong>E-mail:</strong><br/>
<input type="email" name="email" value="c53506150352904262381@sandbox.pagseguro.com.br" /><br/><br/>

<strong>Senha:</strong><br/>
<input type="password" name="password" value="xRj8143TGtGy3200"/><br/><br/>

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

<h3>Informacoes de Pagamento</h3>
<strong>Titular do Cartao:</strong><br/>
<input type="text" name="cartao_titular" value="Carlos A S Moraes" /><br/><br/>

<strong>CPF do Titular do Cartao:</strong><br/>
<input type="text" name="cartao_cpf" value="49123866934" /><br/><br/>

<strong>Numero do Cartao:</strong><br/>
<input type="text" name="cartao_numero" /><br/><br/>

<strong>Codigo de Seguranca:</strong><br/>
<input type="text" name="cartao_cvv" value="123" /><br/><br/>

<strong>Validade:</strong><br/>
  <select name ="cartao_mes">
    <?php for($q=1;$q<=12;$q++): ?>
      <option><?php echo ($q<10)?'0'.$q:$q; ?></option>
    <?php endfor; ?>
  </select>
  <select name="cartao_ano">
    <?php $ano = intval(date('Y')); ?>
    <?php for($q=$ano;$q<=($ano+20);$q++): ?>
      <option><?php echo $q; ?></option>
    <?php endfor; ?>
  </select><br/><br/>
  
  

  <strong>Parcelas</strong>
  <select name="parc"></select>
  <input type="hidden" name="total" value="<?php echo $total; ?>" />

  <button class="button efetuarCompra">Efetuar Compra</button>

<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/psckttransparente.js"></script>

<script type="text/javascript">
  PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>