

<h1>Richieste delle Offerte del Giorno</h1>

<form action="elenco.php" method="post">
    <input type="submit" name="filtra" value="filtra">
</form>

<table width='500px' border="2px solid black">

    <?php

    echo '<tr>';
    echo '<td><h2> Spedisci </h2> </td>';
    echo '<td> <h2>Data </h2></td>';
    echo '<td><h2> Qta </h2> </td>';
    echo '<td><h2> Email </h2></td>';
    echo '</tr>';

    $prenotazioni = json_decode(file_get_contents('Archivio/elenco.JSON'), true); // trasforma JSON in ARRAY




    //ogni riga di prenotazione avrà la coppia chiave valore(chiave=>riga)

    foreach ($prenotazioni as $chiave => $riga) {

        if ($riga['Spedito'] == 0) {
            $bottone = '<form action="spedisci.php" method="post">';
            $bottone .= '<input type="submit"  value="spedisci">';
            $bottone .= '<input type="hidden" name="rigaSpedita" value="' . $chiave . '">';
            $bottone .= '</form>';
            //.= accoda la variabile dentro al bottone

        } else {

            $bottone = "spedito";
        }

        // se non esiste il filtro OR esiste il filtro e non è spedito, stampa la riga
        if (!isset($_POST['filtra']) || ($riga['Spedito'] == 0 && isset($_POST['filtra']))) {

            echo '<tr>';
            echo '<td>' . $bottone . '</td>';
            echo '<td>Data</td>';
            echo '<td>' . $riga['Qta'] . '</td>';
            echo '<td>' . $riga['Email'] . '</td>';
            echo '</tr>';
        }
    }




    ?>

</table>