<?php
    $p = $_POST;
    $poema = 
    '<h4 style="text-align: center; color: white;">Soneto de Fidelidade (Vinicius de Moraes)</h4>

        <div style="text-align: center; color: white;">
        "De tudo, ao meu amor serei atento <br>
        Antes, e com tal zelo, e sempre, e tanto <br>
        Que mesmo em face do maior encanto <br>
        Dele se encante mais meu pensamento.Quero vivê-lo em cada vão momento <br>
        E em louvor hei de espalhar meu canto <br>
        E rir meu riso e derramar meu pranto <br>
        Ao seu pesar ou seu contentamento.E assim, quando mais tarde me procure <br>
        Quem sabe a morte, angústia de quem vive <br>
        Quem sabe a solidão, fim de quem amaEu possa me dizer do amor (que tive): <br>
        Que não seja imortal, posto que é chama <br>
        Mas que seja infinito enquanto dure."
        </div>';

    if($p['botao'] == 'green'){
        echo '<style>body {background-color: green}</style>';
        echo $poema;
    }
    else if($p['botao'] == 'black'){
        echo '<style>body {background-color: black}</style>';
        echo $poema;
    }
    else if($p['botao'] == 'red'){
        echo '<style>body {background-color: red}</style>';
        echo $poema;
    }
    else if($p['botao'] == 'blue'){
        echo '<style>body {background-color: blue}</style>';
        echo $poema;
    }
    else{
        echo '<style>body {background-color: purple}</style>';
        echo $poema;
    }
