<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo $_SESSION['usuario']['nome'];
    echo "<a href='sair.php'>Sair</a>";
} else {
    ?>
    <main id="content">
        <form id="formlogin">
            <div class="row text-center">
                <div class="col-12">
                    <h2>Faça seu login</h2>
                </div>
                <div class="col-3">
                    <label for="txtLogin" class="form-label">Digite seu email</label>
                    <input type="email" class="form-control" id="txtLogin" name="txtLogin"
                           placeholder="name@example.com">
                </div>
                <div class="col-3">
                    <label for="txtSenha" class="form-label">Digite sua senha</label>
                    <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="123">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Acessar</button>
            <a href="index.php?pag=cadastro" class="btn btn-info">Não tenho conta</a>
        </form>
    </main>
    <?php
}
?>


<script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script type="text/javascript">

    $("#formlogin").submit(function () {

        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "paginas/login/autenticar.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {
                $('#mensagem').text('');
                $('#mensagem').removeClass()
                if (mensagem.trim() == "salvo com sucesso") {
                    window.location='index.php';
                } else {
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: mensagem,
                    });
                }


            },

            cache: false,
            contentType: false,
            processData: false,

        });

    });
</script>
