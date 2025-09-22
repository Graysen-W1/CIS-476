package main

import (
	"fmt"
	"net/http"
	"time"
)

func handler(response http.ResponseWriter, request *http.Request) {
	// fmt.Fprintf(response, "hello, %s!", request.URL.Path[1:])

	fmt.Fprintf(response, "<html><h2>Request received at: " + time.Now().Format(time.RFC1123) + "</h2>Graysen Wargo</html>")
}

func main() {
	http.HandleFunc("/", handler)
	http.ListenAndServe("", nil)
}