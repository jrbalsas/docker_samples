#Apache-PHP Docker APP

Sample Docker project for creating an Apache-PHP server image with customized extensions

##Features
- Dockerfile for creating customized a apache-php server image
- docker-compose.yml for launching the webserver and a mariadb database image
- php.ini file for enabling php errors in docker logs console
- Sample php app for local development

##Usage
Exec from command line

```bash
$ docker-compose up -d 
```

Check logs for debugging 

```bash
$ docker-compose logs -f
```

Close services with

```bash
$ docker-compose stop
```

