<?php 
@session_start();
require_once('../../../../conexao.php');

$busca = '%' . @$_POST['busca']. '%';

if(@$_POST['pagina'] == ""){
    @$_POST['pagina'] = 0;
}

$pagina = intval(@$_POST['pagina']);
$limite = $pagina * 10;

$query = $pdo->query("SELECT * FROM produtos  ORDER BY nome ASC LIMIT $limite,10");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total = @count($res);

if($total > 0){
    $html = "<table class='table'>
    <thead>
      <tr>
        <th scope='col'>Código</th>
        <th scope='col'>Produto</th>
        <th scope='col'>Fornecedor</th>
        <th scope='col'>Quantidade</th>
        <th scope='col'>Categoria</th>
      </tr>
    </thead>
    <tbody>";

  for($i = 0; $i<=$total;$i++){
      $codigo = $res[0]['id_produto'];
      $nome = $res[0]['nome'];
      $forn = $res[0]['fornecedor'];
      $qtd = $res[0]['quantidade'];
      $cat = $res[0]['categoria'];
      $html .= "<tr>
      <th scope='row'>{$codigo}</th>
      <td>{$nome}</td>
      <td>{$forn}</td>
      <td>{$qtd}</td>
      <td>{$cat}</td>
    </tr>";
  }

  $html .= "</tbody>
  </table>";
  echo $html;
}else{
    echo 'Nenhum registro encontrado';
}
