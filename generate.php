<?php

require_once './QuickBooks.php';

QuickBooks_Loader::load('/QuickBooks/QBXML/Schema/Generator.php');

$content = file_get_contents('data/qbxmlops130.xml');
$generator = new QuickBooks_QBXML_Schema_Generator($content);
$generator->saveAll();
print 'Done';
