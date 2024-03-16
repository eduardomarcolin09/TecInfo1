<?php
    session_start();
    $p = $_POST;
    echo('<h1 style="text-align: center;">Super Quiz</h1>');
    echo($_SESSION['nome']);
    if($p['r1'] === "certa"){
        $respostas = 1;
        $_SESSION['totalacertos'] = $respostas;
    }
?>

<form action="p3.php" method="post">
    <p>Qual o campeão da Copa do mundo de 2018?</p>
    <label for="r2">
        <input type="radio" name="r2" value="errada">Brasil
    </label>

    <label for="r2">
        <input type="radio" name="r2" value="certa">França
    </label>

    <label for="r2">
        <input type="radio" name="r2" value="errada">Argentina
    </label>

    <label for="r2">
        <input type="radio" name="r2" value="errada">Coreia
    </label>

    <p>
        <input type="submit" value="Responder">
    </p>
</form>    
   
    
