<?php

session_start();
session_destroy();
header('Location: ../index.php?autenticacao=erro002');

?>