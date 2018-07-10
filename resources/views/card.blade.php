<div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
        <img class="card-img-top" src="<?= $produto->imagem ?? 'http://vargasmotos.com.br/images/sem_foto.png' ?>" alt="">
        <div class="card-body">
        <h4 class="card-title"><?= $produto->nome ?? 'Sem nome' ?></h4>
            <p class="card-text"><?= $produto->descricao ?? 'Não tem descricao' ?></p>
        </div>
        <div class="card-footer">
            <a href="/carrinho" class="btn btn-primary">+ Carrinho</a>
        <a href="/visao-produto/{{ $produto->id }}" class="btn btn-secundary">Ver produto</a>
        </div>
    </div>
</div>
