<?php

// MangoSix.phpの読み込み
require_once('MangoSix.php');

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
