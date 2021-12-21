const puppeteer = require('puppeteer');

(async () => {
    //利用するブラウザを指定
    const browser = await puppeteer.launch({ executablePath: '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome' });

    const page = await browser.newPage();
    // ビューポートとスケールの設定
    // <https://github.com/puppeteer/puppeteer/issues/571#issuecomment-325404760>
    await page.setViewport({ width: 800, height: 800, deviceScaleFactor: 2 });
    await page.goto('https://www.yahoo.co.jp');
    await page.screenshot({ path: 'yahooByJS.png' });

    await browser.close();
})();