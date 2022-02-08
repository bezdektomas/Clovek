<?php

declare(strict_types=1);

use Tridy\Clovek;

spl_autoload_register(fn (string $classname): int => require "$classname.class.php");

$clovekJson = json_decode(file_get_contents("clovek.json"));

foreach ($clovekJson as $key => $value) {
    $lide[] = new Clovek($value->rocnik, $value->trida, $value->password, $value->login, $value->rc, $value->pohlavi, $value->datum, $value->jmeno, $value->prijmeni, $value->mesto);
}

foreach ($lide as $key => $value) {
    var_dump($value->overeni());
}