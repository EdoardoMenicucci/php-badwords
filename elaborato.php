
<!-- QUA CODICE IN PHP DATI DA RICEVERE -->
<?php 
    $testo = $_GET["testo"];
    $brutto = $_GET["brutto"]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HELLO</title>
    <h4>
        il tuo testo:
     <?php 
        echo $testo
    ?>
    <br>
    La lunghezza del tuo testo:
    <?php 
        echo strlen($testo)
    ?>
    </h4>
    <br>
    <h4>
    <?php 
        $testobrutto = str_replace('cane', '****',$brutto);
        echo $testobrutto
    ?>
    <br>
    la lunghezza del testo: <br>
    <?php 
        ;
        echo strlen($testobrutto)
    ?>
    </h4>
    <form action="index.php">
        <button type="submit">Torna alla pagina precedente</button>
    </form>
    
</head>
<body>
    

</body>
</html>