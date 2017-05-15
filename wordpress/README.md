#Testing a Wordpress installation with docker

Sample Docker project for testing a local Wordpress installation 

##Features
- docker-compose.yml for launching the webserver and a mariadb database services
- Additional phpmyadmin server to manage the database 

##Usage

Exec from command line

```bash
$ docker-compose up -d 
```
**Available services**

* <http://localhost:80> Wordpress installation
* <http://localhost:81> phpmyadmin

**Close services with**

```bash
$ docker-compose stop
```

###More information
* [Official php docker image](https://hub.docker.com/_/php)
* [Official mariadb docker image](https://hub.docker.com/_/mariadb)
* [Official phpmyadmin docker image](https://hub.docker.com/r/phpmyadmin/phpmyadmin)
