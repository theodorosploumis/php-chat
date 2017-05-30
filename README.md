Instant php chat
------------------------------

![php chat screenshot](https://raw.githubusercontent.com/theodorosploumis/php-chat/master/php_chat.png)

### About

This is a very simple php chat running with php.

 - Messages are saved on an html file (messages.html). There is no database.
 - Messages are posted with ajax.
 - No cache, either cookies exist.

### Install

You need **php** of course.

Here is an example using the php built in server:

```
git clone git@github.com:theodorosploumis/php-chat.git
cd php-chat/app
php -S localhost:8000

// Open http://localhost:8000
```

### Using docker

There is an image on docker hub: [tplcom/php-chat](https://hub.docker.com/r/tplcom/php-chat)

```
docker pull tplcom/php-chat
docker run -tid -p 8088:80 tplcom/php-chat
// Open localhost:8088
```

Or using docker-compose

```
git clone git@github.com:theodorosploumis/php-chat.git
cd php-chat

docker-compose up -d
```

### License

IMPORTANT. This app may not be suitable for production. In any case see the LICENSE.

GNU GPL v2, see [LICENSE](https://github.com/theodorosploumis/php-chat/blob/master/LICENSE).
