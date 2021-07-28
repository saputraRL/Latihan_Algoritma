/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package kmp5;

import java.util.Scanner;

public class Kmp5 {

    static void properti(String p, int m, int x[]){
    
    int j = 0, i = 1;
    x[0] = 0;
    while (i < m){
        if (p.charAt(j) == p.charAt(i)){
            j++;
            x[i] = j;
            i++;
        }else {
            if(j == 0){
            x[i] = j;
            i++;
            }else {
            j = x[j-1];
            }
        }
    }
}

    static void kmpsearch(String t, String p) {
        int n = t.length();
        int m = p.length();

        int x[] = new int[m];
        properti(p, m, x);

        int i = 0, j = 0;
        while(i < n) {
            if(p.charAt(j)== t.charAt(i)) {
            i++;
            j++;
            }if(j==m) {
                System.out.println("String ditemukan pada index : " + (i-m));
                j = x[j-1];
            }else if (i < n && p.charAt(j) != t.charAt(i)){
                if(j == 0) {
                    i++;
                }else {
                    j = x [j-1];
            }
        }
    }
}

    public static void main(String[] args) {
        Scanner ds = new Scanner(System.in);
        System.out.print("Masukkan Teks : ");
        String text = ds.nextLine();
        System.out.print("Masukkan Kata yang Dicari : ");
        String pattern = ds.nextLine();

        kmpsearch(text, pattern);
    }

    

}
