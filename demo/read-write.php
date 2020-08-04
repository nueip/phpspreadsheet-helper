<?php

require __DIR__ . '/_config.php';

$filepath = __DIR__ . '/import.xlsx';

\nueip\phpSpreadsheet\Helper::newSpreadsheet($filepath)
    ->addRow(['Modified A1'])
    ->output();