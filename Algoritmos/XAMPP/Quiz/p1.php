<?php
    session_start();
    $p = $_POST;
    $jogador = '<h4> Jogador(a): ' . $p['nome'] . '</h4>';
    $nomedojogador = $jogador;
    $_SESSION['nome'] = $nomedojogador;
    echo('<h1 style="text-align: center;">Super Quiz</h1>');
    echo($_SESSION['nome']);
   
?>

<form action="p2.php" method="post">
    <p>Qual o campeão da Copa do mundo de 2002?</p>
    <label for="r1">
        <input type="radio" name="r1" value="certa">Brasil
    </label>

    <label for="r1">
        <input type="radio" name="r1" value="errada">Inglaterra
    </label>

    <label for="r1">
        <input type="radio" name="r1" value="errada">Senegal
    </label>

    <label for="r1">
        <input type="radio" name="r1" value="errada">Croácia
    </label>

    <p>
        <input type="submit" value="Responder">
    </p>
</form>