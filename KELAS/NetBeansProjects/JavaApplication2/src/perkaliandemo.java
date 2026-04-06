/**
 * ========================================================
 * PROGRAM DEMO METHOD OVERLOADING - PERKALIAN
 * ========================================================
 * Program ini mendemonstrasikan konsep METHOD OVERLOADING
 * dengan 3 method "perkalian" yang memiliki parameter berbeda:
 * 1. perkalian(int a, int b)     → 2 parameter integer
 * 2. perkalian(double a, double b) → 2 parameter double
 * 3. perkalian(int a, int b, int c) → 3 parameter integer
 * 
 * Dibuat untuk: Pembelajaran Java - NetBeans
 * ========================================================
 */

import java.util.Scanner;

public class perkaliandemo {

    /**
     * Method 1: PERKALIAN 2 ANGKA INTEGER
     * @param a - angka pertama (integer)
     * @param b - angka kedua (integer)
     * @return hasil perkalian a * b
     */
    public static int perkalian(int a, int b) {
        System.out.println("🔢 Menggunakan method perkalian(int, int)");
        return a * b;
    }
    
    /**
     * Method 2: PERKALIAN 2 ANGKA DOUBLE
     * @param a - angka pertama (double)
     * @param b - angka kedua (double)
     * @return hasil perkalian a * b
     */
    public static double perkalian(double a, double b) {
        System.out.println("🔢 Menggunakan method perkalian(double, double)");
        return a * b;
    }
    
    /**
     * Method 3: PERKALIAN 3 ANGKA INTEGER
     * @param a - angka pertama (integer)
     * @param b - angka kedua (integer)
     * @param c - angka ketiga (integer)
     * @return hasil perkalian a * b * c
     */
    public static int perkalian(int a, int b, int c) {
        System.out.println("🔢 Menggunakan method perkalian(int, int, int)");
        return a * b * c;
    }
    
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        // HEADER PROGRAM
        System.out.println("=".repeat(60));
        System.out.println("🧮 DEMO METHOD OVERLOADING - PROGRAM PERKALIAN");
        System.out.println("=".repeat(60));
        System.out.println("Method overloading = method sama nama, parameter berbeda");
        System.out.println("=".repeat(60) + "\n");
        
        // TEST CASE 1: perkalian(int, int)
        System.out.println("📊 TEST CASE 1: perkalian(int a, int b)");
        System.out.print("Masukkan angka pertama (int): ");
        int num1 = input.nextInt();
        System.out.print("Masukkan angka kedua (int): ");
        int num2 = input.nextInt();
        
        int hasil1 = perkalian(num1, num2);
        System.out.printf("✅ Hasil perkalian(%d, %d) = %d%n%n", num1, num2, hasil1);
        
        // TEST CASE 2: perkalian(double, double)
        System.out.println("📊 TEST CASE 2: perkalian(double a, double b)");
        System.out.print("Masukkan angka pertama (double): ");
        double num3 = input.nextDouble();
        System.out.print("Masukkan angka kedua (double): ");
        double num4 = input.nextDouble();
        
        double hasil2 = perkalian(num3, num4);
        System.out.printf("✅ Hasil perkalian(%.2f, %.2f) = %.2f%n%n", num3, num4, hasil2);
        
        // TEST CASE 3: perkalian(int, int, int)
        System.out.println("📊 TEST CASE 3: perkalian(int a, int b, int c)");
        System.out.print("Masukkan 3 angka integer (pisahkan spasi): ");
        int num5 = input.nextInt();
        int num6 = input.nextInt();
        int num7 = input.nextInt();
        
        int hasil3 = perkalian(num5, num6, num7);
        System.out.printf("✅ Hasil perkalian(%d, %d, %d) = %d%n%n", num5, num6, num7, hasil3);
        
        // FOOTER
        System.out.println("=".repeat(60));
        System.out.println("🎉 SELAMAT! METHOD OVERLOADING BERHASIL DIJALANKAN");
        System.out.println("💡 Konsep: Java otomatis pilih method sesuai parameter");
        System.out.println("=".repeat(60));
        
        input.close();
    }
    
}
