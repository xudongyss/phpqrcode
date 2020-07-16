# phpqrcode
PHP Qr Code, forked from: http://phpqrcode.sourceforge.net/

## 安装

```php
composer require xudongyss/phpqrcode
```

## 快速使用

```php
<?php
require_once 'vendor/autoload.php';

use phpqrcode\QRcode;

/* 二维码内容 */
$text = 'I Love You';
/* 生成的二维码文件, false 表示不生成 */
$outfile = false;
/* 容错级别：L, M, Q, H, 建议使用 H */
$level = 'H';
/* 二维码尺寸 */
$size = 10;
/* 边距：上下左右留白 */
$margin = 1;
/*
 * 上下左右留白计算规则：单位：像素
 * 上/下/左/右 = $size * $margin
 * 
 * 二维码像素计算：单位：像素
 * 宽 = $size * 25 + $size * $margin * 2
 * 高 = $size * 25 + $size * $margin * 2
 */
QRcode::png($text, $outfile, $level, $size, $margin);
```

