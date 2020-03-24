<div class="container my-5 p-5">
    <h2 class="text-center h2">Contato</h2>
    <p class="text-muted mt-0 text-center h6">Em caso de dúvida entre em contato por meio do formulário abaixo.</p>

    <form method="POST" class="p-4 col-md-11 mx-auto">
        <div class="row">
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="nome" name="contato[nome]" value="<?= set_value('contato[nome]') ?>" class="form-control">
                    <label for="nome">Digite seu nome</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="email" id="email" name="contato[email]" value="<?= set_value('contato[email]') ?>" class="form-control">
                    <label for="email">Digite seu e-mail</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <input type="text" id="assunto" name="contato[assunto]" value="<?= set_value('contato[assunto]') ?>" class="form-control">
                    <label for="assunto">Assunto da mensagem </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <textarea type="text" id="mensagem" name="contato[messagem]" rows="2" class="form-control md-textarea"><?= set_value('contato[mensagem]') ?></textarea>
                    <label for="mensagem">Mensagem</label>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-dark btn-block" style="border-radius: 18px">Enviar</button>
            </div>
        </div>

    </form>
</div>