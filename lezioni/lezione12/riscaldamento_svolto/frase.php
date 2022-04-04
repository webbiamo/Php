<?php

require('functions.php');
require('sessions.php');

$articles=['il','lo','la','i','gli','le'];
$nouns=['cane','gatto','pera','mela','arrosto','città'];


?> 
 <table>
     <tr><td>articoli</td><td>sostantivi</td></tr>

    <tr>
        <td>
            <?= print_list($articles) ?>
        </td>

        <td>
            <?= print_list($nouns) ?>
    </td>
    </tr>
</table>

<p>frase composta: <?= $_SESSION['phrase'] ?></p>
