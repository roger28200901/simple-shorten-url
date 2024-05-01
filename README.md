# Shorten URL 專案

這是一個簡單的短網址專案，使用 Laravel 框架開發。它允許用戶將長網址轉換為短網址，方便共享和管理。

## 開始

要開始使用這個專案，你可以按照以下步驟進行設置：

clone 這個倉庫到你的本地環境中。

進入專案目錄。

安裝依賴。

配置環境變量。複製 `.env.example` 文件並重命名為 `.env`，然後配置數據庫信息。

生成應用程序密鑰。

運行數據庫遷移。

啟動 Laravel Valet。

使用瀏覽器訪問 `http://shorten-url.test`，開始使用短網址服務。

## 使用 API

此專案還提供了 API 接口，你可以通過 API 來縮短網址。以下是一個簡單的例子：

短網址創建（POST /api/shorten）

响應：

{
"original_url": "https://example.com/very/long/url",
"short_url": "http://shorten-url.test/abc123"
}
