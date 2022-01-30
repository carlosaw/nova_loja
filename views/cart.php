<h1>Carrinho de Compras</h1>

<table border="0" width="100%">
  <tr>
    <th width="100">Imagem</th>
    <th>Nome</th>
    <th width="80" style="text-align:center;">Qtd.</th>
    <th width="120">Preço</th>
    <th width="100" style="text-align:center;">Qtde.</th>
  </tr>
  <hr/>
  <?php
  $subtotal = 0;
  ?>
  <?php foreach($list as $item): ?>
    <?php
    $subtotal += (floatval($item['price']) * intval($item['qt']));
    ?> 
    <tr>
      <td><img src="<?php echo BASE_URL; ?>media/products/<?php echo $item['image']; ?>" width="80" /></td>
      <td><?php echo $item['name']; ?></td>
      <td style="text-align:center" ><?php echo $item['qt']; ?></td>
      <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
      <td>
        <form method="POST" class="uptocartform" action="<?php echo BASE_URL; ?>cart/update">
          <input type="hidden" name="id_product" value="<?php echo $item['id']; ?>" />
          <input type="hidden" name="qt_product" value="<?php echo $item['qt']; ?>" />                     
          <input type="submit" name="-" value="-"  class="uptocart_qt_sub"/>
          <input type="submit" name="+" value="+"  class="uptocart_qt_add"/>
          
        </form>        
      </td>
  <?php endforeach; ?>
  <tr>
    <td colspan="3" align="right">Sub-total:</td>
    <td><strong>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></strong></td>
  </tr>
  <tr>
    <td colspan="3" align="right">Frete:</td>
    <td>
      <?php if(isset($shipping['price'])): ?>
        <strong>R$ <?php echo $shipping['price']; ?></strong> (<?php echo $shipping['date']; ?> dia<?php echo($shipping['date']=='1')?'':'s'; ?>)
      <?php else: ?>
        Qual seu CEP?<br/>
        <form method="POST">
          <input type="number" name="cep" /><br/>
          <input type="submit" value="Calcular" />
        </form>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="right">Total:</td>
    <td><strong>R$ <?php
    if(isset($shipping['price'])) {
      $frete = floatval(str_replace(',', '.', $shipping['price']));
    } else {
      $frete = 0;
    }    
    $total = $subtotal + $frete;
    echo number_format($total, 2, ',', '.');
     ?></strong></td>
  </tr>

</table>
<hr/>

<?php if($frete > 0): ?>
<form method="POST" action="<?php echo BASE_URL; ?>cart/payment_redirect" style="float:right">
  <select name="payment_type">
    <option value="checkout_transparente">PagSeguro Checkout Transparente</option>
    <option value="mp">Mercado Pago</option>
  </select>

  <input type="submit" value="Finalizar Compra" class="button"/>
</form>
<?php endif; ?>