<div class="row">
    <div class="col-12">
        <button class="btn btn-success" onclick="inserir()">Inserir</button>
    </div>
</div>

<div class="row" id="listar">
    
</div>

<!-- modal -->
<div class="modal fade" id="modalinserir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="titulo"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form">
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Produto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Fornecedor</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">QTD</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">QTD Min.</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="exampleFormControlInput1" class="form-label">Validade</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="exampleFormControlInput1" class="form-label">Foto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        listarcardapio();
    });

    function listarcardapio(pagina){
        $("#pagina").val(pagina);

        var busca = $("#buscar").val();
        $.ajax({
            url: 'pag/cardapio/listar.php',
            method: 'POST',
            data: {busca,pagina},
            dataType: "html",
            success: function(result){
                $("#listar").html(result);
            }
        });
    }

    function inserir(){
        $("#titulo").text("Inserir Produto");
        $("#modalinserir").modal('show');
    }
</script>