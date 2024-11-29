<div class="paginas-div">
    <main class="paginas-main">
        <section class="contatos-section">
            <h3>Adicionar contato</h3>
            <div class="contatos-form-div">
                <form action="index.php?menuop=inserir-contato" method="post">
                    <div class="form-div">
                        <label for="nomeContato">Nome</label>
                        <input type="text" name="nomeContato" id="nomeContato">
                    </div>
                    <div class="form-div">
                        <label for="emailContato">Email</label>
                        <input type="email" name="emailContato" id="emailContato">
                    </div>
                    <div class="form-div">
                        <label for="telefoneContato">Telefone</label>
                        <input type="text" name="telefoneContato" id="telefoneContato">
                    </div>
                    <div class="form-div">
                        <label for="enderecoContato">Endereço</label>
                        <input type="text" name="enderecoContato" id="enderecoContato">
                    </div>
                    <div class="form-div">
                        <label for="sexoContato">Sexo</label>
                        <input type="text" name="sexoContato" id="sexoContato">
                    </div>
                    <div class="form-div">
                        <label for="dataNascContato">Data de Nascimento</label>
                        <input type="date" name="dataNascContato" id="dataNascContato">
                    </div>
                    <div>
                        <input class="btn btn-secondary" type="submit" value="Adicionar" name="btnAdicionar">
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
