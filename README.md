## PHP + puppeteer / JS + puppeteer でスクリーンショット

Google ChromeがインストールされたMac前提のコードです。

PHPでの利用ライブラリ

[rialto-php/puphpeteer: A Puppeteer bridge for PHP, supporting the entire API.](https://github.com/rialto-php/puphpeteer)

M1 mac でのセットアップ
```bash
brew install chromium # アプリは動作しないものの、puppeterのインストールに必要
# <https://github.com/puppeteer/puppeteer/issues/6622#issuecomment-7879127582>
export PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true
export PUPPETEER_EXECUTABLE_PATH=`which chromium`
composer install
npm i
```

実行
```bash
# PHP, js ともに同じ動作をするコードです
php example.php
node example.js
```