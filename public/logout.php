<?php

    session_start(); //iniciar sessão
    session_destroy(); //destuir sessão
     
    header("Location: ../index.php"); //te joga para o index.php
    exit();//fecha estrutura

?>