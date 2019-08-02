<?php

// クラスを定義
// 定義の仕方
// class クラス名 {} 
class MangoSix
{
    // プロパティ
    // クラス内の変数
    private $place;

    // メソッド
    // クラス内の関数
    public function provide($name)
    {
        echo $name;
    }

    // アクセス修飾子
    // プロパティ、メソッドがどこからアクセス可能か決める
    /**
     * public どこからでも
     * protected クラス内、または、継承しているクラス
     * private クラス内のみ
     */
}
