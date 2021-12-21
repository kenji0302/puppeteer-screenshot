<?php
require_once "vendor/autoload.php";

use Nesk\Puphpeteer\Puppeteer;

$puppeteer = new Puppeteer;
$browser = $puppeteer->launch([
    //利用するブラウザを指定
    'executablePath' => '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
]);

$page = $browser->newPage();
// ビューポートとスケールの設定
// <https://github.com/puppeteer/puppeteer/issues/571#issuecomment-325404760>
$page->setViewport(['width' => 800, 'height' => 800, 'deviceScaleFactor' => 2 ]);
$page->goto('https://www.yahoo.co.jp');
$page->screenshot(['path' => 'yahooByPHP.png']);

$browser->close();
