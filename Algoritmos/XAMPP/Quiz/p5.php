<?php
    session_start();
    $p = $_POST;
    echo('<h1 style="text-align: center;">Super Quiz</h1>');
    echo($_SESSION['nome']);
    $respostas = $_SESSION['totalacertos'];
    if($p['r4'] === "certa"){
        $respostas++;
        $_SESSION['totalacertos'] = $respostas;
    }
?>

<form action="final.php" method="post">
    <p>Qual o campeão da Copa do mundo de 2010?</p>
    <label for="r5">
        <input type="radio" name="r5" value="errada">Argentina
    </label>

    <label for="r5">
        <input type="radio" name="r5" value="certa">Espanha
    </label>

    <label for="r5">
        <input type="radio" name="r5" value="errada">Suiça
    </label>

    <label for="r5">
        <input type="radio" name="r5" value="errada">Croácia
    </label>

    <p>
        <input type="submit" value="Responder">
    </p>
</form>    
   