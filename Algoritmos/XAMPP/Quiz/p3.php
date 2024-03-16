<?php
    session_start();
    $p = $_POST;
    echo('<h1 style="text-align: center;">Super Quiz</h1>');
    echo($_SESSION['nome']);
    $respostas = $_SESSION['totalacertos'];
    if($p['r2'] === "certa"){
        $respostas++;
        $_SESSION['totalacertos'] = $respostas;
    }
?>

<form action="p4.php" method="post">
    <p>Qual o campeão da Copa do mundo de 1998?</p>
    <label for="r3">
        <input type="radio" name="r3" value="errada">Egito
    </label>

    <label for="r3">
        <input type="radio" name="r3" value="errada">Camarões
    </label>

    <label for="r3">
        <input type="radio" name="r3" value="certa">Argentina
    </label>

    <label for="r3">
        <input type="radio" name="r3" value="errada">Brasil
    </label>

    <p>
        <input type="submit" value="Responder">
    </p>
</form>    
   
    
