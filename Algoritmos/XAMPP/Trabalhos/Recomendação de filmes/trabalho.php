<?php
    // Trabalho feito por: Eduardo Marcolin e João Duarte
    // Turma: 1º Informática
    $get = $_GET;

    if($get['genero'] == 'g1'){
        if(isset($get['internacional'])){
            echo('Nome do Filme: Duro de Matar <br>');
            echo('Capa do Filme: <br> <img src="imagens/durodematar.jpg" width="350px">');
            echo('<br> Ano de lançamento: 1988');
        }
        else{
            echo('Nome do Filme: Tropa de Elite <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2007');
        }
    }

    if($get['genero'] == 'g2'){
        if(isset($get['internacional'])){
            echo('Nome do Filme: Velozes e Furiosos <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2001');
        }
        else{
            echo('Nome do Filme: Acampamento Intergaláctico <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2022');
        }
    }

    if($get['genero'] == 'g3'){
        if(isset($get['internacional'])){
            echo('Nome do Filme: Superbad <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2007');
        }
        else{
            echo('Nome do Filme: Minha mãe é uma peça <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2013');
        }
    }

    if($get['genero'] == 'g4'){
        if(isset($get['internacional'])){
            echo('Nome do Filme: Nomadland <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2021');
        }
        else{
            echo('Nome do Filme: 7 Prisioneiros <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2021');
        }
    }
    
    if($get['genero'] == 'g5'){
        if(isset($get['internacional'])){
            echo('Nome do Filme: O estranho mundo de Jack <br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 1993');
        }
        else{
            echo('Nome do Filme: Mulher-Maravilha<br>');
            echo('Capa do Filme: ');
            echo('<br> Ano de lançamento: 2017');
        }
    }