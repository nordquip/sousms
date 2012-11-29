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
import android.widget.LinearLayout;
import android.widget.Toast;

public class WebViewDemo extends Activity {
	private class MyWebViewClient extends WebViewClient {
  }
	private WebView webView;
	private WebView webView1;
    private Button homeButton;
    private Button tradeButton;
    private Button researchButton;
    private Button profileButton;
    Toast toast;
    LinearLayout ll;
    LinearLayout sl;
    int count = 0;
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
        webView1  = (WebView) findViewById(R.id.webview_compontent1);
        WebSettings webSettings1 = webView1.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webView.loadUrl("http://140.211.89.15/mobile/");
        homeButton = (Button)findViewById(R.id.home_button);
        tradeButton = (Button)findViewById(R.id.trade_button);
        researchButton = (Button)findViewById(R.id.research_button);
        profileButton = (Button)findViewById(R.id.profile_button);
        
        
        // workaround so that the default browser doesn't take over
    	ll=(LinearLayout)findViewById(R.id.ll_sub);
    	sl=(LinearLayout)findViewById(R.id.sl_sub);
    	ll.setVisibility(View.GONE);
    	webView.invalidate();
        webView.setWebViewClient(new MyWebViewClient(){
            @Override
            public boolean shouldOverrideUrlLoading(WebView view, String url) {
                if(url.toLowerCase().contains("http://140.211.89.15/mobile/home.html"))
                {
                	ll.setVisibility(View.VISIBLE);
                	sl.setVisibility(View.GONE);
                	webView.invalidate();
                	webView1.invalidate();
                    webView1.loadUrl("http://140.211.89.15/mobile/home.html");
            		if(count==0){
            			toast.show();
            			count++;
            		}
                    return true;
                }
                return false;
            }
        });
        webView1.setWebViewClient(new MyWebViewClient());
        
        
        // Setup click listener
        homeButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView1.loadUrl("http://140.211.89.15/mobile/home.html");    		
        	}
        });

        tradeButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView1.loadUrl("http://140.211.89.15/mobile/tradepage.php");
        	}
        });
        researchButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView1.loadUrl("http://140.211.89.15/mobile/ResearchPage.php");
        	}
        });
        profileButton.setOnClickListener( new OnClickListener() {
        	public void onClick(View view) {
        		webView1.loadUrl("http://140.211.89.15/mobile/profile.php");
        	}
        });
 
    }
    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        // Check if the key event was the Back button and if there's history
        if ((keyCode == KeyEvent.KEYCODE_BACK) && webView1.canGoBack()) {
            webView1.goBack();
            return true;
        }
        // If it wasn't the Back key or there's no web page history, bubble up to the default
        // system behavior (probably exit the activity)
        return super.onKeyDown(keyCode, event);
    }
}

