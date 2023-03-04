# このリポジトリについて

Laravelで作成したGoogle Custom Search APIを活用したWebアプリケーションのコードです。

# ひとまず動かしてみるには

- このリポジトリを `git clone` で手元に持ってきます。
- Google Custom SearchでSearch Engineを作成してAPI KeyとEngine IDを取得します。
- `.env.example` をコピーした `.env` を作成して、以下の設定を追加します。
  - `GOOGLE_CUSTOM_SEARCH_API_KEY` にAPI Keyをセットします。
  - `GOOGLE_CUSTOM_SEARCH_ENGINE_ID` にEngine IDをセットします。
  - `GOOGLE_CUSTOM_SEARCH_ENDPOINT` は `https://www.googleapis.com/customsearch/v1` とします。（こちらのアドレスを書き換えれば、API上限を気にせずに表示の確認が出来ます。）
- `composer install` 、 `npm install` で必要なパッケージをダウンロードし、 `php artisan key:generate` でアプリケーションキーを `.env` に生成し、 `npm run dev` でCSSファイルをビルドします。
- `php artisan serve` で開発サーバを起動します。表示されたアドレスにブラウザでアクセスして、アプリケーションが動作していれば成功です。
