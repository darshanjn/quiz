<?php
include'../vendor/autoload.php';
$app=new App_CLI('LoanMe');
$app->dbConnect();

// $m_bor = $app->add('Model_Agreement');

var_dump($app);