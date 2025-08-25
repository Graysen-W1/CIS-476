import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;

public class Server {
	public static void main(String[] args) throws IOException {
		System.out.println("hello");
		
		ServerSocket ss = new ServerSocket(80);
		
		Socket client = ss.accept();
		
		System.out.println("connection accepted");
	}
}
