# utsupedia
うつ病に関する知識とコラムと相談フォームを作る

## インストール
 
```
$ git clone https://github.com/t1k2a/utsupedia.git
$ cd utsupedia
$ docker-compose up -d --build
$ docker-compose exec app ash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```
## MySQLログイン

```
$ docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
```

## 参考
- [【初心者向け】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)
 - [【入門】Laravelチュートリアル – 掲示板を作成してみよう
](https://blog.hiroyuki90.com/articles/laravel-bbs/)