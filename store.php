<?php
require 'vendor/autoload.php';
require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$db->addTask($_POST);