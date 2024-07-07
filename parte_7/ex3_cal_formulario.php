<?php

if (isset($_POST['btn_calcular'])) {
    $gJaneiro = trim($_POST['gJaneiro']);
    $gFevereiro = trim($_POST['gFevereiro']);
    $gMarco = trim($_POST['gMarco']);
    $gAbril = trim($_POST['gAbril']);
    $gMaio = trim($_POST['gMaio']);
    $gJunho = trim($_POST['gJulho']);
    $gJulho = trim($_POST['gJunho']);
    $gAgosto = trim($_POST['gAgosto']);
    $gSetembro = trim($_POST['gSetembro']);
    $gOutubro = trim($_POST['gOutubro']);
    $gNovembro = trim($_POST['gNovembro']);
    $gDezembro = trim($_POST['gDezembro']);
    $pJaneiro= trim($_POST['pJaneiro']);
    $pFevereiro= trim($_POST['pFevereiro']);
    $pMarco= trim($_POST['pMarco']);
    $pAbril= trim($_POST['pAbril']);
    $pMaio= trim($_POST['pMaio']);
    $pJunho= trim($_POST['pJunho']);
    $pJulho= trim($_POST['pJulho']);
    $pAgosto= trim($_POST['pAgosto']);
    $pSetembro= trim($_POST['pSetembro']);
    $pOutubro= trim($_POST['pOutubro']);
    $pNovembro= trim($_POST['pNovembro']);
    $pDezembro= trim($_POST['pDezembro']);


    $totalDeGanhos = $gJaneiro + $gFevereiro + $gMarco + $gAbril + $gMaio + $gJunho + $gJulho + $gAgosto + $gSetembro + $gOutubro + $gNovembro + $gDezembro;

    $totalDePerdas = $pJaneiro + $pFevereiro + $pMarco + $pAbril + $pMaio + $pJunho + $pJulho + $pAgosto + $pSetembro + $pOutubro + $pNovembro + $pDezembro;
    
    $lutroRealAnual = $totalDeGanhos - $totalDePerdas;

    $lucroJaneiro = $gJaneiro - $pJaneiro;
    $lucroFevereiro = $gFevereiro - $pFevereiro;
    $lucroMarco = $gMarco - $pMarco;
    $lucroAbril = $gAbril - $pAbril;
    $lucroMaio = $gMaio - $pMaio;
    $lucroJunho = $gJunho - $pJunho;
    $lucroJulho = $gJulho - $pJulho;
    $lucroAgosto = $gAgosto - $pAgosto;
    $lucroSetembro = $gSetembro - $pSetembro;
    $lucroOutubro = $gOutubro - $pOutubro;
    $lucroNovembro = $gNovembro - $pNovembro;
    $lucroDezembro = $gDezembro - $pDezembro;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CALCULADORA</title>
</head>

<body>
    <header id="topo">
        <h1>Relatório de Rendimentos.</h1>
        <h5>Preencha os dados!</h5>
    </header>

    <form method="post" action="ex3_cal_formulario.php" class="layoutForm">
        <div class="box">
            <div class="boxOne">
                <label>Ganho do mês de Jan: </label>
                <input type="text" name="gJaneiro" value="<?= isset($gJaneiro) ?: '' ?>">
                <label>Ganho do mês de Fev: </label>
                <input type="text" name="gFevereiro" value="<?= isset($gFevereiro) ?: '' ?>">
                <label>Ganho do mês de Mar: </label>
                <input type="text" name="gMarco" value="<?= isset($gMarco) ?: '' ?>">
                <label>Ganho do mês de Abr: </label>
                <input type="text" name="gAbril" value="<?= isset($gAbril) ?: '' ?>">
                <label>Ganho do mês de Mai: </label>
                <input type="text" name="gMaio" value="<?= isset($gMaio) ?: '' ?>">
                <label>Ganho do mês de Jun: </label>
                <input type="text" name="gJunho" value="<?= isset($gJunho) ?: '' ?>">
                <label>Ganho do mês de Jul</label>
                <input type="text" name="gJulho" value="<?= isset($gJulho) ?: '' ?>">
                <label>Ganho do mês de Ago: </label>
                <input type="text" name="gAgosto" value="<?= isset($gAgosto) ?: '' ?>">
                <label>Ganho do mês de Set: </label>
                <input type="text" name="gSetembro" value="<?= isset($gSetembro) ?: '' ?>">
                <label>Ganho do mês de Out: </label>
                <input type="text" name="gOutubro" value="<?= isset($gOutubro) ?: '' ?>">
                <label>Ganho do mês de Nov: </label>
                <input type="text" name="gNovembro" value="<?= isset($gNovembro) ?: '' ?>">
                <label>Ganho do mês de Dez: </label>
                <input type="text" name="gDezembro" value="<?= isset($gDezembro) ?: '' ?>">
            </div>

            <div class="boxTwo">
                <label>Perca do mês de Jan: </label>
                <input type="text" name="pJaneiro" value="<?= isset($pJaneiro) ?: '' ?>">
                <label>Perca do mês de Fev: </label>
                <input type="text" name="pFevereiro" value="<?= isset($pFevereiro) ?: '' ?>">
                <label>Perca do mês de Mar: </label>
                <input type="text" name="pMarco" value="<?= isset($pMarco) ?: '' ?>">
                <label>Perca do mês de Abr: </label>
                <input type="text" name="pAbril" value="<?= isset($pAbril) ?: '' ?>">
                <label>Perca do mês de Mai: </label>
                <input type="text" name="pMaio" value="<?= isset($pMaio) ?: '' ?>">
                <label>Perca do mês de Jun: </label>
                <input type="text" name="pJunho" value="<?= isset($pJunho) ?: '' ?>">
                <label>Perca do mês de Jul: </label>
                <input type="text" name="pJulho" value="<?= isset($pJulho) ?: '' ?>">
                <label>Perca do mês de Ago: </label>
                <input type="text" name="$pAgosto" value="<?= isset($pAgosto) ?: '' ?>">
                <label>Perca do mês de Set: </label>
                <input type="text" name="pSetembro" value="<?= isset($pSetembro) ?: '' ?>">
                <label>Perca do mês de Out: </label>
                <input type="text" name="pOutubro" value="<?= isset($pOutubro) ?: '' ?>">
                <label>Perca do mês de Nov: </label>
                <input type="text" name="pNovembro" value="<?= isset($pNovembro) ?: '' ?>">
                <label>Perca do mês de Dez: </label>
                <input type="text" name="pDezembro" value="<?= isset($pDezembro) ?: '' ?>">
            </div>
        </div>

            <div class="alignBtn">
            <button name="btnCalcular" class="btn"> CALCULAR </button>
            </div>   
    </form>

    <hr>
    <div class="boxResultados">
        <div class="resultadoOne">
            <span class="titleSpan">Total de Ganhos:</span>
            <input disabled value="R$ <?= number_format(isset($totalDeGanhos) ? $totalDeGanhos : '', 2, ',', '.') ?>">
            <span class="titleSpan">Total de Perdas:</span>
            <input disabled value="R$ <?= number_format(isset($totalDePerdas) ? $totalDePerdas : '', 2, ',', '.') ?>">
            <span class="titleSpan">Lucro Real Anual:</span>
            <input disabled value="R$ <?= number_format(isset($lutroRealAnual) ? $lutroRealAnual : '', 2, ',', '.') ?>">
        </div>

        <div class="resultadoTwo">
            <div class="columOne">
                <span class="titleSpan">Lucro Real de Janeiro:</span>
                <input disabled value="R$ <?= number_format(isset($lucroJaneiro) ? $lucroJaneiro : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Fevereiro:</span>
                <input disabled value="R$ <?= number_format(isset($lucroFevereiro) ? $lucroFevereiro : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Março:</span>
                <input disabled value="R$ <?= number_format(isset($lucroMarco) ? $lucroMarco : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Abril:</span>
                <input disabled value="R$ <?= number_format(isset($lucroAbril) ? $lucroAbril : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Maio:</span>
                <input disabled value="R$ <?= number_format(isset($lucroMaio) ? $lucroMaio : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Junho:</span>
                <input disabled value="R$ <?= number_format(isset($lucroJunho) ? $lucroJunho : '', 2, ',', '.') ?>">
            </div>

            <div class="columTwo">
                <span class="titleSpan">Lucro Real de Julho:</span>
                <input disabled value="R$ <?= number_format(isset($lucroJulho) ? $lucroJulho : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Agosto:</span>
                <input disabled value="R$ <?= number_format(isset($lucroAgosto) ? $lucroAgosto : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Setembro:</span>
                <input disabled value="R$ <?= number_format(isset($lucroSetembro) ? $lucroSetembro : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Outubro:</span>
                <input disabled value="R$ <?= number_format(isset($lucroOutubro) ? $lucroOutubro : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Novembro:</span>
                <input disabled value="R$ <?= number_format(isset($lucroNovembro) ? $lucroNovembro : '', 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Dezembro:</span>
                <input disabled value="R$ <?= number_format(isset($lucroDezembro) ? $lucroDezembro : '', 2, ',', '.') ?>">
            </div>
        </div>
    </div>



</body>

</html>