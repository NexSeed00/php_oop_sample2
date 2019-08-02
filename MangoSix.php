<?php

// WaiterクラスでStaffクラスを読み込んでいるため、Waiterクラスのみの読み込みでOK
require_once('Waiter.php');

// クラスを定義
// 定義の仕方
// class クラス名 {} 
class MangoSix
{
    // プロパティ
    // クラス内の変数
    private $place;
    public $staff = [];

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

    public function hire($name, $role)
    {
        // MangoSixクラスのインスタンスのstaffプロパティに,
        // Staffクラスのインスタンスを追加
        $this->staff[] = new Staff($name, $role);
    }

    public function hireWaiter($name)
    {
        // MangoSixクラスのインスタンスのstaffプロパティに,
        // Staffクラスのインスタンスを追加
        $this->staff[] = new Waiter($name);
    }

    // アクセス修飾子
    // プロパティ、メソッドがどこからアクセス可能か決める
    /**
     * public どこからでも
     * protected クラス内、または、継承しているクラス
     * private クラス内のみ
     */
}
