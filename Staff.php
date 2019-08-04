<?php

class Staff
{
    public $name;
    public $role;

    // staticをつけると静的プロパティになる
    // 静的プロパティはインスタンス化しなくてもアクセス可能
    // 呼び出す時はClass名::プロパティで呼び出す
    public static $uniform = 'ダサい';

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    // staticをつけると静的メソッドになる
    // 静的メソッドはインスタンス化しなくてもアクセス可能
    // 呼び出す時はClass名::メソッド名()で呼び出す
    public static function otsukaresama()
    {
        echo __CLASS__ . 'お疲れ様';
    }
}
