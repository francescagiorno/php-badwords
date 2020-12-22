<?php

$badword = $_GET["badword"];
$text = "oggi fa davvero freddo cavolo ! !";

$text = str_replace($badword, "***", $text);
 ?>

 <p> <?php echo ($text)  ?> </p>
 <p> <?php echo ("Il testo è lungo " . strlen($text) . " caratteri")  ?> </p>
