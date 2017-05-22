#Simple C++ Dev container

#Features
* Alpine based container
* g++ compiler
* make
* gdb
* valgrind

#Usage

Build image

```sh
$ docker build -t devgcc:latest .
```

Open a shell for using tools with sources on current dir

```sh
$ docker run --rm -it -v "$(pwd)":/src devgcc:latest sh
```

or the tools directly from command line

```sh
$ docker run --rm -v "$(pwd)":/src  devgcc:latest g++ *cpp
```
 
