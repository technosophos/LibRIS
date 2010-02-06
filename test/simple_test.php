<?php
require_once '../src/LibRIS.php';

$ris = new LibRIS();
$ris->parseFile('./test1.ris');

$ris->printRecords();

$records = $ris->getRecords();

$rw = new RISWriter();
print $rw->writeRecords($records);