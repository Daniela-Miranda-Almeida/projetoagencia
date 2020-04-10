<div class="col-md-7 p-5">

    <div class="md-form mb-0">
        <input type="text" id="nome" name="empresa[nome_empresa]" value="<?= set_value('empresa[nome_empresa]') ?><?= isset($empresa) ? $empresa['foto'] : '' ?>" class="form-control">
        <label for="nome">Nome da Empresa</label>
        <?php echo form_error('empresa[nome_empresa]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>

    <div class="md-form mb-0 mt-5">
        <input type="text" id="cnpj" name="empresa[cnpj_empresa]" value="<?= set_value('empresa[cnpj_empresa]') ?><?= isset($empresa) ? $empresa['foto'] : '' ?>" class="form-control mt-3" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()'>
        <label for="nome">CNPJ da Empresa</label>
        <?php echo form_error('empresa[cnpj_empresa]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>
</div>
