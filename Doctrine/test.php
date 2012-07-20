<?php

$lib = __DIR__;
require $lib . '/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', $lib . 'Common');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', $lib . 'DBAL');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', $lib . 'ORM');
$classLoader->register();

$classloader = new \Doctrine\Common\ClassLoader('Symfony', $lib . 'vendor/');
$classloader->register();


echo 'oldu';
