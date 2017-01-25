<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

//array getData([$file])

function getData ($file = "popschool.yml") {
  return Yaml::parse(file_get_contents($file));
}

$data = getData();

$users = $data["users"];

$fatality = random_int(0, count($users) - 1);

echo $users[$fatality] . "\n";
