# Laravel 10 註冊任務成為 Artisan 指令

引入 spatie 的 laravel-artisan-dispatchable 套件來擴增匯註冊任務成為 Artisan 指令，方便利用 Artisan 指令執行任務。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __process-podcast__ 來執行處理 Podcast 任務。
```sh
$ php artisan process-podcast --podcastId={Podcast 代號}
```

----

## 畫面截圖
![](https://i.imgur.com/c0NOObc.png)
> 方便利用 Artisan 指令來幫助開發或進行作業
