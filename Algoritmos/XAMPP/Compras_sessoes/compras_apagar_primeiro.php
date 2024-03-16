<?php
      // Compras_apagar_primeiro - PHP
      session_start();

      // Retira um item do começo da lista
      array_shift($_SESSION['compras']);
  
      header('location: compras.php');