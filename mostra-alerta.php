<?php
session_start();
function mostraAlerta($tipo)
{
    if (isset($_SESSION[$tipo])) :
   ?>
		<p id="alerta" class="text-center alert alert-<?=$tipo?>"><?= $_SESSION[$tipo]?></p>
<?php
        unset($_SESSION[$tipo]);
    endif;
}
