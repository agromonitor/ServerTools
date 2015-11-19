CC = arm-linux-gnueabihf-g++
CFLAGS = -Wall -g3
OBJ = hellomake.o hellofunc.o 

arm:
	arm-linux-gnueabihf-g++ -Wall -g3 -static -Llibs/arm/curl/lib -Ilibs/arm/curl/include -o arm-server-com ServerComm.cpp -lcurl