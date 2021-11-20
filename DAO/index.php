<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

//$lista = [];
//$sql = $pdo->query("SELECT * FROM usuarios");
//if($sql->rowCount() > 0){
//   $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
//}
//$sql = $pdo->query('SELECT * FROM usuarios');
//$dados = $sql->fetchAll( PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($dados);
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>    

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario):?>
        <tr>
        <th><?= $usuario->getId()?></th>
        <th><?= $usuario->getNome()?></th>
        <th><?= $usuario->getEmail()?></th>
        <td>
            <a href="editar.php?id=<?= $usuario->getId()?>">[ Editar ]</a>
            <a href="excluir.php?id=<?= $usuario->getId()?>" onclick="return confirm('Tem certeza que deseja excluir ?')">[ Excluir ]</a>
        </td>
    </tr>


    <?php endforeach;?>
</table>