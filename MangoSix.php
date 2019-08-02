<?php

// クラスを定義
// 定義の仕方
// class クラス名 {} 
class MangoSix
{
    // プロパティ
    // クラス内の変数
    private $place;

    // インスタンス化時に自動で実施されるメソッド
    public function __construct($place)
    {
        // このクラスのインスタンスのplaceプロパティに、変数$palceの内容を代入
        // $this ===  このクラスのインスタンス
        // $place === 引数
        $this->place = $place;
    }

    // メソッド
    // クラス内の関数
    public function provide($name)
    {
        echo $name;
    }

    // ゲッター
    // privateなプロパティにアクセスしたい時に使用する
    public function getPlace()
    {
        return $this->place;
    }

    // アクセス修飾子
    // プロパティ、メソッドがどこからアクセス可能か決める
    /**
     * public どこからでも
     * protected クラス内、または、継承しているクラス
     * private クラス内のみ
     */
}
