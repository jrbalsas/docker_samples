#Simple C++ Dev container

#Features
* Ubuntu based container
* gcc/g++ compiler
* make
* gdb
* valgrind
* SSH server for remote compiling and debugging

Mainly used for compiling and debugging standard C/C++ programs using Netbeans in MacOS.

#Usage

Build image

```sh
$ docker build -t devgcc:latest .
```

Open a shell for using tools with sources on current dir

```sh
$ docker run --rm -it -v "$(pwd)":/home/developer devgcc:latest 
```

or use the tools directly from command line

```sh
$ docker run --rm -v "$(pwd)":/home/developer  devgcc:latest g++ *cpp
$ docker run --rm -v "$(pwd)":/home/developer  devgcc:latest valgrind ./a.out
```
 
For remote shell access (or remote compile from and IDE, e.g Netbeans), expose port 22 and use the predefined user credentials: developer/coding. **Note:** ``--security-opt seccomp:unconfined`` is needed for using gdb in container

```sh
$ docker run -p 2222:22 -d --security-opt seccomp:unconfined --rm -v "/home/localdir":/home/developer devgcc:latest
$ ssh -P 2222 developer@localhost
``` 

From Netbeans, add a build host for C++ from Services tab and use defined host, port, user and password. You must, using Netbeans **Path mapper** option, map your */home/localdir* with the container */home/developer* folder. More info about remote compiling and debugging C++ at [Netbeans site](https://netbeans.org/kb/docs/cnd/remotedev-tutorial.html)


