<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 3.6 boucle</title>
    </head>
    <body >
        <p>
            <?php
            for ($idx=20; $idx >=0; $idx--)
            {
                echo nl2br("c'est presque bon\n");
            }
            ?>
       </p>
    </body>
</html>