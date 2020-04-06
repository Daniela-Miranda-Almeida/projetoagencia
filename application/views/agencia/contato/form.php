<div class="container my-5 p-5">
    <br>
    <?php if ($valida == true) { ?>

        <div class="alert alert-success p-4" role="alert">
            <h4 class="alert-heading">Contato Enviado!</h4>
            <p class="my-3">A mensagem foi enviado com sucesso, a resposta será encaminhada no seu e-mail informado quando possivel.</p>
            <hr>
            <p class="mb-0">Retornar para o formulário de contato: <a href="<?=base_url('contato')?>" class="alert-link link-detalhe">Clique aqui!</a></p>
        </div>

    <?php } else { ?>
        <h2 class="text-center h2">Contato</h2>
        <p class="text-muted mt-0 text-center h6">Em caso de dúvida entre em contato por meio do formulário abaixo.</p>

        <form method="POST" class="p-4 col-md-11 mx-auto" style="font-family: Arial, Helvetica, sans-serif">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="nome" name="contato[nome]" value="<?= set_value('contato[nome]') ?>" class="form-control">
                        <label for="nome">Digite seu nome</label>
                        <?php echo form_error('contato[nome]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="email" id="email" name="contato[email]" value="<?= set_value('contato[email]') ?>" class="form-control">
                        <label for="email">Digite seu e-mail</label>
                        <?php echo form_error('contato[email]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="assunto" name="contato[assunto]" value="<?= set_value('contato[assunto]') ?>" class="form-control">
                        <label for="assunto">Assunto da mensagem </label>
                        <?php echo form_error('contato[assunto]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea class="form-control md-textarea" id="mensagem" name="contato[mensagem]" rows="2"><?= set_value('contato[mensagem]') ?></textarea>
                        <label for="mensagem">Mensagem</label>
                        <?php echo form_error('contato[mensagem]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
                    </div>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <button class="btn btn-dark btn-block borda-redonda">Enviar</button>
                </div>
            </div>

        </form>
    <?php } ?>
</div>