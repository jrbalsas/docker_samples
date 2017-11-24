#Sample PHP/apache docker image for Heroku

## Local use:

build
```bash
$ docker build -t phpweb .
```
Run
```bash
$ docker run -it -d -v "$(pwd)/src:/var/www/html -p 80:5000 --name phpweb phpweb
```

## Heroku deploy:
From [Heroku Manual](https://devcenter.heroku.com/articles/container-registry-and-runtime)

```bash
$ heroku container:login
$ heroku create -a phpwebapp
$ heroku container:push web -a phpwebapp
$ heroku open -a phpwebapp
```

