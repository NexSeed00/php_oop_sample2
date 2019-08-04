<?php

// Staffクラスを継承したWaiterクラスを作成
// 継承先のクラス(Waiter)は、
// 継承元のクラスのプロパティ、メソッドにアクセス可能
// ※privateは除く
// class 継承先のクラス extends 継承元のクラス {}
class Waiter extends Staff
{
    public static $uniform = 'かわいい';

    // オーバーライド
    public $role = 'ウェイター';

    // 継承元のプロパティ(メソッド)を継承先で上書きすること
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getOrder($item)
    {
        echo '厨房に頼む';
    }
}
