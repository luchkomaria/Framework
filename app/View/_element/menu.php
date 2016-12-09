<div id="menu">
    <ul>
        <?php
		$app = Model_DB::query("SELECT * FROM `menu`");
    foreach($app as $shit => $door)
    {echo "<li><a href=\"$door[link]\">$door[title]</a></li>";}
        ?>
    </ul>
</div>