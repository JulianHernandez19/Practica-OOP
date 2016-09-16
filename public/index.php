<?php

namespace Styde;

require '../vendor/autoload.php';

require '../src/Helper.php';

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');

$silence->attack($ramm);

$ramm->setArmor(new CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);