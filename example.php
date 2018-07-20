<?php
/*
 * User: simon.dejmek
 */
date_default_timezone_set('Europe/Prague');

require_once dirname(__FILE__).'/FioAPIExchange.php';

$fio = new FioApi('FIO_API_TOKEN');
$fio->reset();
$transactions = $fio->getData();

echo "iBan: ".$transactions['iban']."<br>";
echo "Cislo: ".$transactions['cislo']."<br>";
echo "Kod banky: ".$transactions['kod_banky']."<br>";
echo "Měna: ".$transactions['mena']."<br>";


echo "<br><br>";
//var_dump($transactions);

foreach ($transactions['transakce'] as $key => $value) {
    echo "Transaction: ".$key;
    echo "<br>";
    echo "Protiucet: ".$transactions['transakce'][$key]['protiucet']."<br>";
    echo "Banka: ".$transactions['transakce'][$key]['banka']."<br>";
    echo "Částka: ".$transactions['transakce'][$key]['castka']."<br>";
    echo "Měna: ".$transactions['transakce'][$key]['mena']."<br>";
    echo "KS: ".$transactions['transakce'][$key]['ks']."<br>";
    echo "VS: ".$transactions['transakce'][$key]['vs']."<br>";
    echo "SS: ".$transactions['transakce'][$key]['ss']."<br>";
    echo "Datum: ".$transactions['transakce'][$key]['datum']."<br>";
    echo "Popis: ".$transactions['transakce'][$key]['popis']."<br>";
    echo "Popis interni: ".$transactions['transakce'][$key]['popis_interni']."<br>";
    echo "Ident: ".$transactions['transakce'][$key]['ident']."<br>";
    echo "Typ: ".$transactions['transakce'][$key]['typ']."<br>";



    echo "<br>";
    echo "<br>";

}