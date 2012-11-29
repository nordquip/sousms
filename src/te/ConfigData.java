import java.io.*;
import java.util.*;

class ConfigData {
    private String fileName; 

    //These array lists act much like a dictionary. Each index in both arrays
    //is pared with the other. 
    private ArrayList<String> configKeys;
    private ArrayList<String> configValues;
    
    public ConfigData(String filename) {
        this.fileName = filename;
        configKeys = new ArrayList<String>();
        configValues = new ArrayList<String>();
        getConfigData();
    }
    
    public String get(String field) {
        String retval = null;
        
        for(int i = 0; i < configKeys.size(); i++) {
            if(configKeys.get(i).equals(field))
                retval = configValues.get(i);
        }
        
        return retval;
    } 
    
    private void getConfigData() {
        String input = ""; //stores lines read from config file
        try {
            BufferedReader configFile = new BufferedReader(new FileReader(new File(fileName)));
            
            //Throw away everything until we reach the data section.
            while(!configFile.readLine().equals("<data>")) {}
            
            while(!input.equals("</data>")) {
            
                input = configFile.readLine();
                String exp = "<|</|>";
                String[] arr = input.split(exp);
                
                //A bit hackish, but we don't want to parse the end of the config file.
                if( input.equals("</data>") )
                    continue; 
                else if(arr.length < 3)
                    System.err.println("[CRITICAL] Failed to load \'" + input + "\' from config file.");
                else {
                    //Regex stores the key in [1] and the value in [2]
                    configKeys.add(arr[1]);
                    configValues.add(arr[2]);
                }
            }
            
            configFile.close();
        } catch (IOException ioe) {
            System.err.println("[CRITICAL] Failed to load Config file: " + fileName);
            System.exit(-1);
        }
    }
}