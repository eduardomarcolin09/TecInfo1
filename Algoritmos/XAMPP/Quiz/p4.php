<?php
    session_start();
    $p = $_POST;
    echo('<h1 style="text-align: center;">Super Quiz</h1>');
    echo($_SESSION['nome']);
    $respostas = $_SESSION['totalacertos'];
    if($p['r3'] === "certa"){
        $respostas++;
        $_SESSION['totalacertos'] = $respostas;
    }
?>

<form action="p5.php" method="post">
    <p>Qual o campeão da Copa do mundo de 2014?</p>
    <label for="r4">
        <input type="radio" name="r4" value="errada">Holanda
    </label>

    <label for="r4">
        <input type="radio" name="r4" value="errada">Portugal
    </label>

    <label for="r4">
        <input type="radio" name="r4" value="certa">Alemanha
    </label>

    <label for="r4">
        <input type="radio" name="r4" value="errada">Uruguai
    </label>

    <p>
        <input type="submit" value="Responder">
    </p>
</form>    
   