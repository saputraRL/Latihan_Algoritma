/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package suffix;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class Suffix {

    private String[] text;
    private int length;
    private int[] index;
    private String[] suffix;
 
    public Suffix(String text)
    {
        this.text = new String[text.length()]; 
 
        for (int i = 0; i < text.length(); i++)
        {
            this.text[i] = text.substring(i, i+1);
        } 
 
        this.length = text.length();
        this.index = new int[length];
        for (int i = 0; i < length; i++)
        {
            index[i] = i;
        }	
 
        suffix = new String[length];
    }
 
    public void createSuffixArray()
    {   
        for(int index = 0; index < length; index++)	
        {
            String text = "";
            for (int text_index = index; text_index < length; text_index++)
            {
                text+=this.text[text_index];
            } 
            suffix[index] = text;
        }
 
        int back;
        for (int iteration = 1; iteration < length; iteration++)
        {
            String key = suffix[iteration];
            int keyindex = index[iteration];
 
            for (back = iteration - 1; back >= 0; back--)
            {
                if (suffix[back].compareTo(key) > 0)
                {
                    suffix[back + 1] = suffix[back];
                    index[back + 1] = index[back];
                }
                else
                {
                    break;
                }
            }
            suffix[ back + 1 ] = key;
            index[back + 1 ] = keyindex;
        }
 
        System.out.println("SUFFIX \t INDEX");
        for (int iterate = 0; iterate < length; iterate++)
        {		
            System.out.println(suffix[iterate] + "\t" + index[iterate]);
        }
    }
    
    public static void main(String[] args) throws IOException {
        boolean proses = true;
        String pilih;

        Scanner ds = new Scanner(System.in);
        
         while (proses) {
        
        String text = "";
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
        System.out.print("Enter the Text String : ");
        text = reader.readLine();
        
        Suffix suffixarray = new Suffix(text);
        suffixarray.createSuffixArray();
        
        System.out.println("Apakah Anda Ingin Melanjutkan ? : ");
            System.out.print("Jawab [ya/tidak] > ");
            pilih = ds.nextLine();
            System.out.println("----------------------------------------");

            if (pilih.equalsIgnoreCase("tidak")) {

                proses = false;

            }
         }
    }
    
}
