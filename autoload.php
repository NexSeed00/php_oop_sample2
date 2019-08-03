<?php

/**
 * 読み込まれていないクラスが読み込まれた場合に実行されるメソッド
 * https://www.php.net/manual/ja/function.spl-autoload.php
 * クラスが読み込まれるタイミングでrequire_onceでファイルを読み込む
 * クラスが読み込まれたタイミングでloadClass関数を実行している
 * 引数には無名関数を指定することも可能
 */

// 引数に無名関数を指定
// spl_autoload_register(function ($name) {
//     require($name . '.php');
// });


spl_autoload_register('loadClass');

// nameには読み込まれたクラス名(namespace含む)が入っている
function loadClass($name)
{
    // namespaceの\を/に置換
    // ※namespaceとフォルダ構成が同じ前提
    $name = str_replace('\\', '/', $name);

    require_once($name . '.php');
}
