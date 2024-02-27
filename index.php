<?php
include('src/Html/Table/Table.php');
include('src/Html/Table/Thead.php');
include('src/Html/Table/Trow.php');

$trow = new Trow();
$thead = new Thead($trow);

$winkelwagenTabel = new Table($thead);
$winkelwagenTabel->draw();
