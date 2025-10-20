package main

import (
	"fmt"
	"math/rand"
	"sync"
	"time"
)

var wg sync.WaitGroup

func init() {
	rand.Seed(time.Now().UnixNano())
}

func main() {
	court := make(chan int)

	wg.Add(2)

	go player("Sinner", court)
	go player("Alcaraz", court)

	court <- 1

	wg.Wait()
}

func player(name string, court chan int) {
	defer wg.Done() // if you forget this, we will get deadlock
	for {
		ball, ok := <-court
		if !ok {
			fmt.Printf("%s won!\n", name)
			return
		}

		// simulate missing the ball
		n := rand.Intn(100)
		if n%13 == 0 {
			if ball == 1 {
				fmt.Printf("%s missed the serve!\n", name)
			} else {
				fmt.Printf("%s missed the ball!\n", name)
			}

			close(court)
			return
		}

		fmt.Printf("Player %s Hit %d\n", name, ball)
		ball++

		court <- ball
	}
}
