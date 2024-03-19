/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package javaapplication9;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.nio.charset.Charset;
import static javafx.css.StyleOrigin.USER_AGENT;
import jdk.internal.util.xml.impl.Input;
import org.apache.commons.io.IOUtils;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONTokener;

/**
 *
 * @author HP-FPT
 */
public class clsapi {
    public JSONArray getapi(){
        String myurl = "http://localhost:8000/CongNgheMoi/1_Project_PHP_TaoAPI/xemsinhvien.php";
        JSONArray jarr = new JSONArray();
        try{
            JSONArray arr = (JSONArray) new JSONTokener(IOUtils.toString(new URL(myurl).openStream(),Charset.forName("utf-8"))).nextValue();
            jarr = arr;
        }
        catch(IOException | JSONException e){
            
        }
        return jarr;
    }
    private static String USER_AGENT="Mozila/5.0";
    
    public void sendGET(String masv, String hodem, String ten) throws IOException{
        masv=masv.replaceAll(" ","%20");
        hodem= hodem.replaceAll(" ", "%20");
        ten= ten.replaceAll(" ", "%20");
        String s = "masv="+masv+"&hodem="+hodem+"&ten="+ten+"";
        String GET_URL = "http://localhost:8000/CongNgheMoi/1_Project_PHP_TaoAPI/themsinhvien.php?"+s;
        URL obj = new URL(GET_URL);
        HttpURLConnection conn = (HttpURLConnection) obj.openConnection();
        conn.setRequestMethod("GET");
        conn.setRequestProperty("USER-Agent", USER_AGENT);
        int reponseCode = conn.getResponseCode();
        if(reponseCode == HttpURLConnection.HTTP_OK){
            BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            String inputLine;
            StringBuffer response = new StringBuffer();
            while((inputLine = in.readLine()) != null){
                response.append(inputLine);
            }
            in.close();
            
            System.out.println(response.toString());
        }else{
            System.out.println("GET request did not work");
        }
    }
    public void deleGET(String masv) throws IOException{
        masv=masv.replaceAll(" ","%20");
        
        String s = "masv="+masv;
        String GET_URL = "http://localhost:8000/CongNgheMoi/1_Project_PHP_TaoAPI/xoasinhvien.php?"+s;
        URL obj = new URL(GET_URL);
        HttpURLConnection conn = (HttpURLConnection) obj.openConnection();
        conn.setRequestMethod("GET");
        conn.setRequestProperty("USER-Agent", USER_AGENT);
        int reponseCode = conn.getResponseCode();
        if(reponseCode == HttpURLConnection.HTTP_OK){
            BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            String inputLine;
            StringBuffer response = new StringBuffer();
            while((inputLine = in.readLine()) != null){
                response.append(inputLine);
            }
            in.close();
            
            System.out.println(response.toString());
        }else{
            System.out.println("GET request did not work");
        }
    }
}
