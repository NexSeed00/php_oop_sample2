<?php

// 同じ名前のclass名は使用できない
// namespaceを使用して上記問題を解決
// 異なるnamespaceであれば、class名が重複しても良い
/**
 * namespace === 学校のクラスのようなイメージ
 * A組の田中、B組の田中、C組の田中
 * 田中だけだと、誰かわからないが、
 * ○○クラスの田中とすることで特定する
 */

namespace Good;

/**
 * namespaceを使用した場合、
 * 該当のファイルで使用するクラス名は全て、namespace\クラス名となる。
 * 別のnamespaceのクラスを使用したい場合は、
 * 使用する時に①namespaceから全て書く、または、
 * ②あらかじめ、使用するクラスが、どのnamespaceのクラスか記述する
 * その時に使用するのが use
 * Staffは Good\Staff、ではなく、ただのStaff(namespaceなし)のため、
 * Staffとしている。
 */

use Staff;

class Chef extends Staff
{ }
