<?php
session_destroy();
mysqli_close($db);
header("Location: index.php");
exit;

