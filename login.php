<h2>login</h2>

<form>
    <input type="text" name="user" placeholder="user">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit">
</form>

<?php

$usu = ["paco" => "1234", "jaime" => "5678", "luis" => "9012"];

if (isset($_GET["user"]) && isset($_GET["pass"])) {
    echo "Usuari:".$_GET["user"]."<br>\n";
    $clave = array_key_exists($_GET["user"], $usu);
    if (!$clave) {
        echo "USUARI INCORRECTE";
    } else {
        if (strcmp($usu[$_GET["user"]], $_GET["pass"])==0) {
            echo "USUARI INCORRECTE";
        } else {
                echo "CONTRASEÑA INCORRECTE";
        }
    }
}


?>