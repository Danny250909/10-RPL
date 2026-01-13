
public class BelajarOperator {

    public static void main(String[] args) {
        // Operator Aritmatika

        int n = 17;
        int v = 11;

        int penjumlahan = n + v;    
        int pengurangan = n - v;
        int perkalian = n * v;
        int pembagian = n / v;
        int modulus = n % v;
        int decrement = --n;
//        int decrement = ++ n;

        System.out.println("Angka 1: " + n);
        System.out.println("Angka 2: " + v);
        
        System.out.println();
        
        System.out.println("Hasil Penjumlahan: " + penjumlahan);
        System.out.println("Hasil Pengurangan: " + pengurangan);
        System.out.println("Hasil Perkalian: " + perkalian);
        System.out.println("Hasil Pembagian: " + pembagian);
        System.out.println("Hasil Modulus: " + modulus);
        System.out.println("Hasil Decrement: " + decrement);
        System.out.println();
        
//        Operator Penugasan
    //   =    (Memberi Nilai)
    //   =+   (Penjumlahan Nilai)
    //   =-   (Pengurangan Nilai)
    //   *=   (Perkalian Nilai) 
    //   /=   (Pembagian Nilai)
    //   %=   (Pembagian Sisa)
    
    int c =+ 20;
    int a =- 20;
    int b = 20;
    
        System.out.println("Angka: " + b);
        System.out.println(c);
        System.out.println(a);
        System.out.println();

//          Operator Pembanding
    int s = 9;
    int d = 17;
    
    boolean hasil = s == d;
//    boolean hasil = s <= d;
        System.out.println("Angka 1: " + s);
        System.out.println("Angka 2: " + d);
        System.out.println(hasil);
        
//        Operator Logika
    boolean result1 = true && true;
    boolean result3 = true || true;
    boolean result2 = s > d && s == d;
    boolean result4 = s != d || s < d;
        System.out.println("Operator Logika 1: " + result1);
        System.out.println("Operator Logika 2: " + result2);
        System.out.println("Operator Logika 3: " + result3);
        System.out.println("Operator Logika 4: " + result4);
    }

}
