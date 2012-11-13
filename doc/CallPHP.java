// java program that takes a bit stream from a php script "resulting output" (actually will take
// the stream of any text transfer), through an http address
// written by Ben Harris
// October 26, 2012
// CS469 - SMS - Trade Engine
import java.net.*;
import java.io.*;
public class CallPHP {
	public static void main(String[] args) {
		String phpout = ""; // String variable to hold the text stream coming from the server
		String phpadd = "http://localhost/test.php"; // String variable to hold the http address
		String phppara = ""; // String variable to hold the php argument parameters
		String phpin = phpadd + phppara; // String variable that combines the address and parameters
		String sani = ""; // String to hold sanitized version of the text stream (without the end 16 - all on - bit transmission)
		int c = 0; // instantiates and assigns an initial value of zero to the variable
		try { // beginning of error catching
			URL url = new URL( phpin ); // turns the string "phpin" into a java URL object
			HttpURLConnection conn = (HttpURLConnection) url.openConnection(); // instantiates and assigns "the connection"
			if( conn.getResponseCode() == HttpURLConnection.HTTP_OK ){ // if the response from the http request is good, then ...
				InputStream is = conn.getInputStream(); // instantiates and gets the "input stream" from the server
				while ( c != -1 ) { // loop to discover the end of the stream
					c = is.read(); // assigns the byte value to an integer
					phpout += (char)c; // adds the character representation of "the integer" to the resulting text string
				} // end while
				for (int i = 0; i < phpout.length() - 1; i++) { // loop to eliminate the mystery (end of transmission) character "?" (65535) 
					sani += phpout.charAt(i); // makes new "text stream" to eliminate the mystery character "?"(65535)
				} // end for
				System.out.println( phpout ); // command line display of the original text
				System.out.println( sani ); // command line display of the sanitized text (without mystery character)
			} else {
				InputStream err = conn.getErrorStream(); // just in case
				// err may have useful information.. but could be null see javadocs for more information
			} // end else
		} catch (MalformedURLException e) { // routine in case of bad URL
			System.out.println( "URL was bad." );
		} catch (IOException e) { // routine in case of stream problems
			System.out.println( "Stream was no good." );
		} // end try-catch-catch
	} // end main
} // end class CallPHP
