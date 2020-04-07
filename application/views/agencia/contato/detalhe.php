<div class="container my-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="borda-redonda p-5" style=" box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);">
            <a class="text-dark" href="<?=base_url('contato/lista')?>" title="Voltar"><i class="fas fa-angle-double-left style-sombra"></i></a>
                <h3 class="text-center mb-4">Mensagem <b> #<?= $contato['id'] ?></b></h3>
                <div class="row ">
                    <div class="col-md-6 my-3">
                        <strong class="text-negrito">Nome</strong>
                        <p class="text-muted"> <i class="fas fa-angle-double-right"></i> <?= $contato['nome'] ?></p>
                        <strong class="text-negrito">E-mail</strong>
                        <p class="text-muted"> <i class="fas fa-angle-double-right"></i> <?= $contato['email'] ?></p>
                        <strong class="text-negrito">Assunto da mensagem</strong>
                        <p class="text-muted"> <i class="fas fa-angle-double-right"></i> <?= $contato['assunto'] ?></p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/carta1.png') ?>" class="img-fluid" alt="carta">
                    </div>
                </div>
                <h5 class="text-center text-negrito my-3">Mensagem</h5>
                <p class="text-muted"> <?= $contato['mensagem'] ?></p>
            </div>     
        </div>
        <div class="col-md-2"></div>
    </div>
</div>