<?php
/**
 * User: Jasmine2
 * Date: 2018/9/10 19:24
 * Email: youjingqiang@gmail.com
 * Copyright (c) Guangzhou Zhishen Data Service co,. Ltd
 */
require 'vendor/autoload.php';

$sfzs = [
    '110101199003078152',
    '110101199003075832',
    '110101199003071532',
    '110101199003073239',
    '110101199003074012',
    '110101199003077918',
    '110101199003078195',
    '110101199003079294',
    '110101199003078638',
    '11010119900307977X',
    '110101199003075832',
    '110101199003079235',
    '110101199003070054',
    '110101199003071030',
    '11010119900307619X',
    '110101199003075912',
    '110101199003078355',
    '110101199003071073',
    '110101199003079091',
    '11010119900307539X',
    '110101199003072893',
    '110101199003070994',
    '110101199003075496',
    '11010119900307483X',
    '110101199003079294',
    '110101199003079454',
    '110101199003078232',
    '11010119900307555X',
    '110101199003079796',
    '110101199003078873',
    '110101199003078750',
    '110101199003077950',
    '110101199003074733',
    '110101199003070310',
    '110101199003071196',
    '110101199003078734',
    '110101199003078195',
    '110101199003079374',
    '110101199003078013',
    '110101199003076835',
    '110101199003079155',
    '110101199003073853',
    '110101199003076077',
    '110101199003079198',
    '110101199003074872',
    '110101199003072279',
    '110101199003075111',
    '110101199003073239',
    '110101199003073335',
    '110101199003074215',
    '110101199003078611',
    '110101199003076210',
    '110101199003075197',
    '110101199003074119',
    '110101199003071030',
    '110101199003074493',
    '110101199003073570',
    '110101199003079251',
    '110101199003070054',
    '110101199003073378',
    '110101199003078136',
    '110101199003078814',
    '11010119900307133X',
    '110101199003072877',
    '110101199003079091',
    '110101199003072519',
    '110101199003071612',
    '110101199003077299',
    '110101199003071890',
    '110101199003079614',
    '110101199003074151',
    '110101199003071057',
    '110101199003073474',
    '110101199003070230',
    '110101199003070230',
    '110101199003078339',
    '110101199003072498',
    '110101199003075330',
    '110101199003071591',
    '110101199003075816',
    '110101199003079534',
    '110101199003070214',
    '110101199003072017',
    '110101199003074733',
    '110101199003074311',
    '110101199003073052',
    '110101199003079219',
    '110101199003077870',
    '110101199003072316',
    '110101199003079251',
    '11010119900307125X',
    '11010119900307045X',
    '110101199003078056',
    '110101199003072551',
    '110101199003073319',
    '110101199003077176',
    '110101199003075058',
    '11010119900307491X',
    '110101199003074477',
];
foreach ($sfzs as $item) {
    $identy = new \jasmine2\GBT2260\Identity($item);
    echo $identy->region()->treeString() . "\n";
}
