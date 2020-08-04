<?php

require __DIR__ . '/_config.php';

$filepath = \nueip\phpSpreadsheet\Helper::newSpreadsheet()
    ->addRow(['Add A1'])
    ->save("/tmp/save");

echo "Successful Wrtie to: {$filepath}";