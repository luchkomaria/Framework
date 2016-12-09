<?php
    $art = Model_DB::query("SELECT * FROM `article`");
    foreach($art as $line => $do)
    {
        echo '<div class="article">';
        echo("<h2>$do[title]</h2>");
        echo("<p>$do[content]</p>");
        echo '</div><br>';
    }
?>