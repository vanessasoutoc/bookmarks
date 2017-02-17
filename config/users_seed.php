<?php
/**
 * BasicSeed plugin data seed file.
 */

namespace App\Config\BasicSeed;

use Cake\ORM\TableRegistry;

// Write your data import statements here.
$data = [
    'users' => [
    //'_truncate' => true,
    //'_entityOptions' => [
    //	'validate' => false,
    //],
    //'_saveOptions' => [
    //	'checkRules' => false,
    //],
    //'_defaults' => [],
    [
    [
    'id' => 1,
    'email' => 'vanessasoutoc@gmail.com',
    'password' => 'vane5060',
],
],
],
];

$this->importTables($data);
