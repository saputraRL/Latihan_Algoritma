/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package waytoolongworddodi;

import java.util.Scanner;

/**
 *
 * @author ASUS
 */
public class WaytoolongwordDodi {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner ds = new Scanner(System.in);
        
        int n = ds.nextInt();
        
        for (int i = 0; i < n; i++) {
            String s = ds.next();
            
            int l = s.length();
            System.out.println("---------------");
            if (l > 10) {
                
                s = s.charAt(0) + "" + (s.length() - 2) + s.charAt(l - 1);
                System.out.println("---------------");
                System.out.println(s);
                System.out.println("---------------");
            }else{
                
                System.out.println(s);
                System.out.println("---------------");
            }
        }
      
    }
    
}
