<?php
$date=date_create("2020-05-01");
date_add($date, date_interval_create_from_date_string('6 month'));
echo date_format($date,"m/y/d");
?>