package main

import (
	"fmt" 
	"time"
)

func printMessage(msg string) {
	for i := 0; i < 10; i++ {
		fmt.Println(msg)
		time.Sleep(100 * time.Millisecond)
	}
}


func main() {
	fmt.Println("hello, world");

	go printMessage("hi");
	printMessage("there");
}

