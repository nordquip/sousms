package org.example.webviewdemo;

import android.app.Activity;
import android.content.Context;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.View;
import android.view.View.OnClickListener;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.Toast;

public class WebViewDemo extends Activity {
	private class MyWebViewClient extends WebViewClient {
  }
	private WebView webView;
    private Button homeButton;
    private Button tradeButton;
    private Button researchButton;
    private Button profileButton;
    Toast toast;
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
    	Context context = getApplicationContext();
    	CharSequence text = "Welcome";
    	int duration = Toast.LENGTH_SHORT;

    	toast = Toast.makeText(context, text, duration);
    	
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);

        // Create reference to UI elements
        webView  = (WebView) findViewById(R.id.webview_compontent);
        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webView.loadUrl("http://140.211.89.15/mobile/html/");
        homeButton = (Button)findViewById(R.id.home_button);
        tradeButton = (Button)findViewById(R.id.trade_button);
        researchButton = (Button)findViewById(R.id.research_button);
        profileButton = (Button)findViewById(R.id.profile_button);
        
        
        // workaround so that the default browser doesn't take over
        webView.setWebViewClient(new MyWebViewClient());
        
        
        
        // Setup click listener
        homeButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView.loadUrl("http://140.211.89.15/mobile/html/home.html");
        		//toast.show();
        	}
        });

        tradeButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView.loadUrl("http://140.211.89.15/mobile/html/tradepagemaster.html");
        	}
        });
        researchButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView.loadUrl("http://140.211.89.15/mobile/html/ResearchPage.html");
        	}
        });
        profileButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView.loadUrl("http://140.211.89.15/mobile/html/profile.php");
        	}
        });
 
    }
    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        // Check if the key event was the Back button and if there's history
        if ((keyCode == KeyEvent.KEYCODE_BACK) && webView.canGoBack()) {
            webView.goBack();
            return true;
        }
        // If it wasn't the Back key or there's no web page history, bubble up to the default
        // system behavior (probably exit the activity)
        return super.onKeyDown(keyCode, event);
    }
}

