<?php require_once('header.php'); ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col mb-4">
                <h1>Novo Serviço</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-5">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                        <label for="descricao">Descrição</label>
                        <textarea row="3" class="form-control" name="descricao" id="descricao"></textarea>
                        <label for="imagem">Imagem</label>
                        <input type="file" class="form-control" name="imagem" id="imagem">
                        <div class="form-group text-right">
                            <button class="btn btn-primary mt-1" name="cadastrar_servico">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 mb-5">
                    <img class="imagemSrv" src="img/undraw_modern_professional_yt9h.svg" alt="Ibagen">
            </div>
        </div>
    </div>

</main>

<?php require_once('footer.php'); ?>