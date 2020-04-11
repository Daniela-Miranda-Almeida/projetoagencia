<div class="col-md-4">
    <div class="md-form mb-0">
        <input type="text" id="cep_" name="empresa[cep_empresa]" onblur="pesquisacep(this.value);" value="<?= set_value('empresa[cep_empresa]') ?><?= isset($empresa) ? $empresa['cep_empresa'] : '' ?>" class="form-control">
        <label for="cep_">CEP</label>
        <?php echo form_error('empresa[cep_empresa]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>
    <div class="md-form mb-0">
        <input type="text" id="bairro" name="empresa[bairro_empresa]" value="<?= set_value('empresa[bairro_empresa]') ?><?= isset($empresa) ? $empresa['bairro_empresa'] : '' ?>" class="form-control">
        <label for="bairro">Bairro</label>
        <?php echo form_error('empresa[bairro_empresa]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>
</div>
<div class="col-md-4">
    <div class="md-form mb-0">
        <input type="text" id="rua" name="empresa[empresa_rua]" value="<?= set_value('empresa[empresa_rua]') ?><?= isset($empresa) ? $empresa['empresa_rua'] : '' ?>" class="form-control">
        <label for="rua">Rua</label>
        <?php echo form_error('empresa[empresa_rua]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>
    <div class="md-form mb-0">
        <input type="text" id="city" name="empresa[municipio_empresa]" value="<?= set_value('empresa[municipio_empresa]') ?><?= isset($empresa) ? $empresa['municipio_empresa'] : '' ?>" class="form-control">
        <label for="city">Cidade</label>
        <?php echo form_error('empresa[municipio_empresa]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>
</div>
<div class="col-md-1">
    <div class="md-form mb-0">
        <input type="number" id="numero" name="empresa[numero_empresa]" value="<?= set_value('empresa[numero_empresa]') ?><?= isset($empresa) ? $empresa['numero_empresa'] : '' ?>" class="form-control">
        <label for="numero">Nº</label>
        <?php echo form_error('empresa[numero_empresa]', '<div class="alert-danger text-center borda-redonda" style="font-size:6pt;">', '</div>'); ?>
    </div>
    <div class="md-form mb-0">
        <input type="text" id="uf" name="empresa[uf_empresa]" value="<?= set_value('empresa[uf_empresa]') ?><?= isset($empresa) ? $empresa['uf_empresa'] : '' ?>" class="form-control">
        <label for="uf">UF</label>
        <?php echo form_error('empresa[uf_empresa]', '<div class="alert-danger text-center borda-redonda" style="font-size:6pt;">', '</div>'); ?>
    </div>
</div>
<div class="col-md-3">
    <div class="md-form mb-0">
        <input type="text" id="comp" name="empresa[complemento]" value="<?= set_value('empresa[complemento]') ?><?= isset($empresa) ? $empresa['complemento'] : '' ?>" class="form-control">
        <label for="comp">Complemento (opcional)</label>
        <?php echo form_error('empresa[complemento]', '<div class="alert-danger text-center borda-redonda">', '</div>'); ?>
    </div>
</div>
