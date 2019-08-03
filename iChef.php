<?php

/**
 * Interface
 * https://www.php.net/manual/ja/language.oop5.interfaces.php
 * 
 * interfaceをクラスに実装(implements)する
 * interfaceを実装したクラスは、
 * interfaceに定義されているメソッドを、定義しなくてはいけない
 * 定義しないとエラーになる
 * interfaceを使用することで、
 * interfaceを実装してるクラスは、interfaceで定義されているメソッドを
 * 実装してることが保証される。
 */

interface iChef
{
    // アクセス修飾子はpublicのみ
    // 実装{}←はない。
    public function cook($name);
}
