<?php
$db = mysqli_connect("localhost:3306","root","","siris") or die("Falha na conexão com BD.".mysqli_error($db));
mysqli_select_db($db, "siris") or die("Base de dados não encontrada.");
