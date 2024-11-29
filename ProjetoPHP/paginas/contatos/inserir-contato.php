<div class="paginas-div">
    <main class="paginas-main">
        <section class="contatos-section">
            <h3>Adicionar contato</h3>
            <?php
            $nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
            $emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
            $telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
            $enderecoContato = mysqli_real_escape_string($conexao, $_POST["enderecoContato"]);
            $sexoContato = mysqli_real_escape_string($conexao, $_POST["sexoContato"]);
            $dataNascContato = mysqli_real_escape_string($conexao, $_POST["dataNascContato"]);
            $sql = "INSERT INTO tbcontatos (nomeContato, emailContato, telefoneContato, enderecoContato, sexoContato, dataNascContato) VALUES('{$nomeContato}', '{$emailContato}', '{$telefoneContato}', '{enderecoContato}', '{$sexoContato}', '{$dataNascContato}' )";
            mysqli_query($conexao, $sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));
            echo "<div class='other-div'><span>O registro foi inserido com sucesso!</span></div>";
            ?>
        </section>
    </main>
</div>
