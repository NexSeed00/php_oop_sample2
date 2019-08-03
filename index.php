<?php

require_once('autoload.php');

// MangoSix.phpの読み込み
// require_once('MangoSix.php');

// new Class名 === クラスのインスタンス化
// MangoSixクラスのインスタンスを$mangoSixに代入
$mangoSix = new MangoSix('La Guardia St');

// MangoSixクラスのprovideメソッド実施
$mangoSix->provide('マンゴーシェイク');

// MangoSixクラスのplaceプロパティにアクセス
// privateなため、クラス外からはアクセスできずエラー
// publicにするとエラーは消える
// $mangoSix->place;

echo '<br>';

// MangoSixクラスのgetPlaceメソッド実施
echo $mangoSix->getPlace();

// MangoSixクラスのhireメソッド実施
$mangoSix->hire('あつし', '店長');

echo '<br>';

// MangoSixクラスのstaffプロパティ(配列)の
// 0番のnameプロパティにアクセス
// 0番にはhireメソッドでstaffクラスのインスタンスが入ってる
echo $mangoSix->staff[0]->name;

$mangoSix->hireWaiter('かん');

echo '<br>';
// 1番にはhireWaiterメソッドでWaiterクラスのインスタンスが入ってる
// Waiterにはnameプロパティがないが、継承元のStaffにnameプロパティがあるためエラーにならない
echo $mangoSix->staff[1]->name;

echo '<br>';
echo $mangoSix->staff[1]->role;

echo '<br>';
$mangoSix->staff[1]->getOrder('コッペパン');

echo '<br>';
$goodChef = new Good\Chef('しんや');
echo $goodChef->hello();
