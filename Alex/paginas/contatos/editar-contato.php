<?php
$idContato = $_GET['idContato'];
$sql = "SELECT * FROM tbcontatos WHERE idContato = '{$idContato}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);
?>


<h3>Editar contato</h3>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label for="idContato">ID</label>
            <input type="text" name="idContato" id="idContato" value="<?=$dados["idContato"]?>">
        </div>

        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" id="nomeContato" value="<?=$dados["nomeContato"]?>">
        </div>

        <div>
            <label for="emailContato">Email</label>
            <input type="email" name="emailContato" id="emailContato" value="<?=$dados["emailContato"]?>">
        </div>

        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" id="telefoneContato" value="<?=$dados["telefoneContato"]?>">
        </div>

        <div>
            <label for="enderecoContato">Endereço</label>
            <input type="text" name="enderecoContato" id="enderecoContato" value="<?=$dados["enderecoContato"]?>">
        </div>

        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato" id="sexoContato" value="<?=$dados["sexoContato"]?>">
        </div>

        <div>
            <label for="dataNascContato">Data de Nascimento</label>
            <input type="date" name="dataNascContato" id="dataNascContato" value="<?=$dados["dataNascContato"]?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>