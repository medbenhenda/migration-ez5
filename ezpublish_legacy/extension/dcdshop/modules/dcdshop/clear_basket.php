<?php

$basket = eZBasket::currentBasket();
$basket->remove();
eZExecution::cleanExit();

?>
