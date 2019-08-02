<?php

// MangoSix.phpの読み込み
require_once('MangoSix.php');

// new Class名 === クラスのインスタンス化
// MangoSixクラスのインスタンスを$mangoSixに代入
$mangoSix = new MangoSix();

// MangoSixクラスのprovideメソッド実施
$mangoSix->provide('マンゴーシェイク');

// MangoSixクラスのplaceプロパティにアクセス
// privateなため、クラス外からはアクセスできずエラー
// publicにするとエラーは消える
$mangoSix->place;
