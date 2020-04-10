<div class="col-md-4 p-4">
    <input type="file" name="foto" id="file-input"class="hide" value="<?= set_value('foto') ?><?= isset($empresa) ? $empresa['foto'] : '' ?>">
    <div class="quadrado-img sombreamento texto redonda-borda-cima">
        <p class="h6 text-center ">Logotipo da Empresa (opcional)<br></p>
    </div>
    <div class="result img-fluid "></div>

    <label class="btn btn-blue-grey btn-block redonda-borda-baixo" for="file-input">Escolha uma imagem</label>

</div>