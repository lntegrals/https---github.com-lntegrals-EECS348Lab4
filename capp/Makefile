# Simple Makefile for the isOdd program
#Assisted by ChatGPT
CC = gcc
CFLAGS = -Wall -Wextra -std=c11 -g
OBJ = main.o isOdd.o
BIN = isOdd

all: $(BIN)

$(BIN): $(OBJ)
	$(CC) $(OBJ) -o $(BIN)

main.o: main.c isOdd.h
	$(CC) $(CFLAGS) -c main.c

isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) -c isOdd.c

clean:
	rm -f $(OBJ) $(BIN)

