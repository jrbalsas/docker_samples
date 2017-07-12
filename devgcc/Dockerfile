FROM ubuntu:latest

RUN apt-get update \
	&& apt-get install --no-install-recommends -y \
			g++ make gdb valgrind openssh-server \
	&& rm  -rf /var/lib/apt/lists/*

#Create a user for ssh access and set password
RUN useradd developer -m -s /bin/bash \
	&& echo 'developer:coding' | chpasswd

WORKDIR /home/developer

EXPOSE 22
#Launch ssh server for remote connections
CMD  /etc/init.d/ssh start && bash


