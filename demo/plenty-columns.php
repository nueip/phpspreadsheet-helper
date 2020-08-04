<?php

require __DIR__ . '/_config.php';

$row = [];
for ($i=1; $i <= 100 ; $i++) { 
    $value = \nueip\phpSpreadsheet\Helper::num2alpha($i);
    $row[] = $value;
}

\nueip\phpSpreadsheet\Helper::newSpreadsheet()
    ->addRow($row)
    ->output();