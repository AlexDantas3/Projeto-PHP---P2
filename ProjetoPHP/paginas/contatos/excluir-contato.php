<div class="paginas-div">
    <main class="paginas-main">
        <section class="contatos-section">
            <?php
            $idContato = mysqli_real_escape_string($conexao, $_GET['idContato']);
            $sql = "DELETE FROM tbcontatos WHERE idContato = '{$idContato}'";
            mysqli_query($conexao, $sql)
                or die("Erro ao excluir o registro. Erro:" . mysqli_error($conexao));
            echo "<div class='other-div'><span>Registro excluido com sucesso!</span></div>";
            ?>
        </section>
    </main>
</div>
