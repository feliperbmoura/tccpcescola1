<form id="form">
        <div class="row">
            <div class="col-12">
                <h2>Faça seu login</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <label for="txtNome" class="form-label">Digite seu nome</label>
        <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="seu nome" required>
            </div>
            <div class="col-6">
            <label for="txtEmail" class="form-label">Digite seu Email</label>
        <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="(xx)x.xxxx-xxxx" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <label for="txtSenha" class="form-label">Digite sua senha</label>
        <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="seu nome" required>
            </div>
            <div class="col-6">
            <label for="txtCsenha" class="form-label">Confirma a senha</label>
        <input type="password" class="form-control" id="txtCsenha" name="txtCsenha" placeholder="(xx)x.xxxx-xxxx" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php?pag=login" class="btn btn-info">Tenho conta</a>
            </div>
        </div>
</form>
<script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script type="text/javascript">

    $("#form").submit(function () {

        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "paginas/login/cadastrar.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {
                if (mensagem.trim() == "Salvo com Sucesso") {
                    alert('Cadastrado com Sucesso!');
                } else {
                    alert(mensagem);
                }


            },

            cache: false,
            contentType: false,
            processData: false,

        });

    });
</script>