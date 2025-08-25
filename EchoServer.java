
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

public class EchoServer {

    public static void main(String[] args) throws IOException {

        ServerSocket serverSocket = new ServerSocket(244);

        Socket clientSocket = serverSocket.accept();

        // objects that communicate through the socket
        PrintWriter out = new PrintWriter(
                clientSocket.getOutputStream(), true);
        BufferedReader in = new BufferedReader(
                new InputStreamReader(
                        clientSocket.getInputStream()));

        out.println("connection made");

        String inputLine = null;
        while ((inputLine = in.readLine()) != null) {
            
            // debug: sent to console
            System.out.println(inputLine);

            if (inputLine.equals("bye")) {
                break;
            }

            out.println(inputLine);
        }
        out.println("bye");

        out.close();
        in.close();
        clientSocket.close();
        serverSocket.close();
    }

}
