import java.io.*;

class ConfigData {
    private String fileName;    
    private final String[] fieldData = {
        "mysqlUser",
        "mysqlPassword",
        "mysqlDatabase"
    };
    private String[] valueData;
    
    
    public ConfigData(String filename) {
        this.fileName = filename;
        valueData = new String[fieldData.length];
        getConfigData();
    }
    
    public String get(String field) {
        String retval = null;
        
        for(int i = 0; i < fieldData.length; i++) {
            if(fieldData[i].equals(field))
                retval = valueData[i];
        }
        
        return retval;
    } 
    
    private void getConfigData() {
        String input; //stores lines read from config file
        try {
            BufferedReader configFile = new BufferedReader(new FileReader(new File(fileName)));
            
            //Throw away everything until we reach the data section.
            while(!configFile.readLine().equals("<data>")) {}
            
            for(int i = 0; i < fieldData.length; i++) {
            
                input = configFile.readLine();
                String exp = "</??" + fieldData[i] + ">";
                String[] arr = input.split(exp);
                
                if(arr.length < 2)
                    System.err.println("[CRITICAL] Failed to load \'" + fieldData[i] + "\' from config file.");
                else
                    //Regex stores the match in [1]
                    valueData[i] = arr[1];
            }
            
            configFile.close();
        } catch (IOException ioe) {
            System.err.println("[CRITICAL] Failed to load Config file: " + fileName);
            System.exit(-1);
        }
    }
}