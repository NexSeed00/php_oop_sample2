<?php

require_once('Staff.php');

// Staffクラスを継承したWaiterクラスを作成
// 継承先のクラス(Waiter)は、
// 継承元のクラスのプロパティ、メソッドにアクセス可能
// ※privateは除く
// class 継承先のクラス extends 継承元のクラス {}
class Waiter extends Staff
{ }