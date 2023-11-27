<?php
try {
    $bdd = new PDO('sqlite:ma_base.db');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
