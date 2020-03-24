<div class="bg-light p-4">

    <div class="container">

        <h1 class="text-center text-dark mb-5">
            Calculadora
        </h1>

        <div class="row">

            <div class="col-md-8">

                <?= validation_errors('<div class="alert alert-dark col-md-11 text-center">', '</div>'); ?>

                <form method="post" class="form-calcule">

                    <div class="form-row">
                        <div class="col-md-3 mt-2">
                            <input type="text" class="form-control" name="valor1" value="<?= set_value('valor1'); ?>" placeholder="Digite o valor 1">
                        </div>

                        <div class="col-md-1  mt-2">
                            <select name="operacao" class="custom-select p-2">
                                <option value="+" <?= (set_value('operacao') == '+' ? 'selected' : false) ?> title="somar">+</option>
                                <option value="-" <?= (set_value('operacao') == '-' ? 'selected' : false) ?> title="subtrair">-</option>
                                <option value="x" <?= (set_value('operacao') == 'x' ? 'selected' : false) ?> title="multiplicar">x</option>
                                <option value="/" <?= (set_value('operacao') == '/' ? 'selected' : false) ?> title="dividir">/</option>
                                <option value="%" <?= (set_value('operacao') == '%' ? 'selected' : false) ?> title="porcentagem">%</option>
                            </select>
                        </div>

                        <div class="col-md-3 mt-2">
                            <input type="text" class="form-control" name="valor2" value="<?= set_value('valor2'); ?>" placeholder="Digite o valor 2">
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-dark btn-md col-md-12 " style="border-radius: 25px;">Calcular</button>
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-md-4 mt-2 mx-auto">
                <div class="card mx-auto" style="width: 20rem;">
                    <div class="card-header primary-color-dark text-white h6 text-center">Resultado</div>
                    <div class="card-body p-5 h5 text-center">
                        <?= $resultado == null ? 'Realize um calculo para visualizar o resultado.' : $resultado ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>