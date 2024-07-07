<?php

require_once './function.php';

    if(isset($_POST['btnCalcular'])){
        $gJaneiro = trim($_POST['gJaneiro']);
        $gFevereiro = trim($_POST['gFevereiro']);
        $gMarco = trim($_POST['gMarco']);
        $gAbril = trim($_POST['gAbril']);
        $gMaio = trim($_POST['gMaio']);
        $gJunho = trim($_POST['gJunho']);
        $gJulho = trim($_POST['gJulho']);
        $gAgosto = trim($_POST['gAgosto']);
        $gSetembro = trim($_POST['gSetembro']);
        $gOutubro = trim($_POST['gOutubro']);
        $gNovembro = trim($_POST['gNovembro']);
        $gDezembro = trim($_POST['gDezembro']);
        $pJaneiro = trim($_POST['pJaneiro']);
        $pFevereiro = trim($_POST['pFevereiro']);
        $pMarco = trim($_POST['pMarco']);
        $pAbril = trim($_POST['pAbril']);
        $pMaio = trim($_POST['pMaio']);
        $pJunho = trim($_POST['pJunho']);
        $pJulho = trim($_POST['pJulho']);
        $pAgosto = trim($_POST['pAgosto']);
        $pSetembro = trim($_POST['pSetembro']);
        $pOutubro = trim($_POST['pOutubro']);
        $pNovembro = trim($_POST['pNovembro']);
        $pDezembro = trim($_POST['pDezembro']);
        
        
        if(SomarGanhos($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro) == 0){
           $msgError ='Preencher Todos os Campos Obrigatórios!';
        }elseif(SomarPerdas( $pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro) == 0){
            $msgError ='Preencher Todos os Campos Obrigatórios!';
        }else{
        $totalDeGanhos = SomarGanhos ($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro,);
            

        $totalDePerdas = SomarPerdas ( $pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro);

        $lucroReal = LucroReal($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro, $pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro);

        //Array
        $LucroMensal = LucroMensal($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro, $pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro);
    }
        
    }
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Desafio</title>
</head>
<body>
    <header id="topo">
        <h1>Relatório de Rendimentos.</h1>
        <h3>Preencha todos os dados!</h3>
    </header>

    <form action="desafio.php" method="POST" class="layoutForm">
        <div class="box">
            <div class="boxOne">
                <label>Ganhos de Janeiro:</label>
                <input type="text" name="gJaneiro" value="<?= isset($gJaneiro) ? $gJaneiro : '' ?>">
                <label>Ganhos de Fevereiro::</label>
                <input type="text" name="gFevereiro" value="<?= isset($gFevereiro) ? $gFevereiro : '' ?>">
                <label>Ganhos de Março:</label>
                <input type="text" name="gMarco" value="<?= isset($gMarco) ? $gMarco : '' ?>">
                <label>Ganhos de Abril:</label>
                <input type="text" name="gAbril" value="<?= isset($gAbril) ? $gAbril : '' ?>">
                <label>Ganhos de Maio:</label>
                <input type="text" name="gMaio" value="<?= isset($gMaio) ? $gMaio : '' ?>">
                <label>Ganhos de Junho:</label>
                <input type="text" name="gJunho" value="<?= isset($gJunho) ? $gJunho : '' ?>">
                <label>Ganhos de Julho:</label>
                <input type="text" name="gJulho" value="<?= isset($gJulho) ? $gJulho : '' ?>">
                <label>Ganhos de Agosto:</label>
                <input type="text" name="gAgosto" value="<?= isset($gAgosto) ? $gAgosto : '' ?>">
                <label>Ganhos de Setembro:</label>
                <input type="text" name="gSetembro" value="<?= isset($gSetembro) ? $gSetembro : '' ?>">
                <label>Ganhos de Outubro:</label>
                <input type="text" name="gOutubro" value="<?= isset($gOutubro) ? $gOutubro : '' ?>">
                <label>Ganhos de Novembro:</label>
                <input type="text" name="gNovembro" value="<?= isset($gNovembro) ? $gNovembro : '' ?>">
                <label>Ganhos de Dezembro:</label>
                <input type="text" name="gDezembro" value="<?= isset($gDezembro) ? $gDezembro : '' ?>">
            </div>

            <div class="boxTwo">
                <label>Perdas de Janeiro </label>
                <input type="text" name="pJaneiro" value="<?= isset($pJaneiro) ? $pJaneiro : '' ?>">
                <label>Perdas de Fevereiro</label>
                <input type="text" name="pFevereiro" value="<?= isset($pFevereiro) ? $pFevereiro : '' ?>">
                <label>Perdas de Março</label>
                <input type="text" name="pMarco" value="<?= isset($pMarco) ? $pMarco : '' ?>">
                <label>Perdas de Abril:</label>
                <input type="text" name="pAbril" value="<?= isset($pAbril) ? $pAbril : '' ?>">
                <label>Perdas de Maio</label>
                <input type="text" name="pMaio" value="<?= isset($pMaio) ? $pMaio : '' ?>">
                <label>Perdas de Junho:</label>
                <input type="text" name="pJunho" value="<?= isset($pJunho) ? $pJunho : '' ?>">
                <label>Perdas de Julho</label>
                <input type="text" name="pJulho" value="<?= isset($pJulho) ? $pJulho : '' ?>">
                <label>Perdas de Agosto:</label>
                <input type="text" name="pAgosto" value="<?= isset($pAgosto) ? $pAgosto : '' ?>">
                <label>Perdas de Setembro</label>
                <input type="text" name="pSetembro" value="<?= isset($pSetembro) ? $pSetembro : '' ?>">
                <label>Perdas de Outubro:</label>
                <input type="text" name="pOutubro" value="<?= isset($pOutubro) ? $pOutubro : '' ?>">
                <label>Perdas de Novembro</label>
                <input type="text" name="pNovembro" value="<?= isset($pNovembro) ? $pNovembro : '' ?>">
                <label>Perdas de Dezembro:</label>
                <input type="text" name="pDezembro" value="<?= isset($pDezembro) ? $pDezembro : '' ?>">
            </div>
        </div>

        <div class="alignBtn">
            <button name="btnCalcular" class="btn">CALCULAR</button>
        </div>
    </form>  
    
    <hr>

    <<div class="msgerror">
            <span class="error"><?=isset($msgError) ? $msgError : '' ?></span>
    </div>

    <div class="boxResultados">
        <div class="resultadoOne">
            <span class="titleSpan">Total de Ganhos:</span>
            <input disabled value="R$ <?= number_format(isset($totalDeGanhos) ? $totalDeGanhos : '', 2, ',', '.') ?>">
            <span class="titleSpan">Total de Perdas:</span>
            <input disabled value="R$ <?= number_format(isset($totalDePerdas) ? $totalDePerdas : '', 2, ',', '.') ?>">
            <span class="titleSpan">Lucro Real Anual:</span>
            <input disabled value="R$ <?= number_format(isset($lucroReal) ? $lucroReal : '', 2, ',', '.') ?>">
        </div>

        <div class="resultadoTwo">
            <div class="columOne">
                <span class="titleSpan">Lucro Real de Janeiro:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[0], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Fevereiro:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[1], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Março:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[2], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Abril:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[3], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Maio:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[4], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Junho:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[5], 2, ',', '.') ?>">
            </div>

            <div class="columTwo">
                <span class="titleSpan">Lucro Real de Julho:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[6], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Agosto:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[7], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Setembro:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[8], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Outubro:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[9], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Novembro:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[10], 2, ',', '.') ?>">
                <span class="titleSpan">Lucro Real de Dezembro:</span>
                <input disabled value="R$ <?= number_format($LucroMensal[11], 2, ',', '.') ?>">
            </div>
        </div>
    </div>
</body>
</html>