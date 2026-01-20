
import java.util.Scanner;

public class input_output {

    
    public static void main(String[] args) {
        Scanner inputUser = new Scanner(System.in);
        
        System.out.println("===============================================");
        System.out.println("|              SELAMAT DATANG                 |");
        System.out.println("===============================================");
//        System.out.println("| SILAHKAN MASUKKAN NAMA ANDA UNTUK MEMULAI   |");
//        System.out.println("===============================================");
        
        System.out.println("Masukkan nama Anda: ");    
        String nama = inputUser.nextLine();
        
        System.out.println("Masukkan nomor absen anda: ");
        int absen = inputUser.nextInt();
        
        System.out.println("Berapa uang saku anda: Rp ");
        double uang = inputUser.nextDouble();
        
        Scanner masukkan = new Scanner(System.in);
        System.out.println("Karakter yang anda sukai: ");
        String simbol = masukkan.nextLine();
        
        System.out.println("\n=============================================");
        System.out.println("|            HALLO, " + nama + "!                  |");
        System.out.println("|            Nomor absen anda:   " + absen + "|");
        System.out.println("|             Uang saku anda:     " + uang + "|");
        System.out.println("|        Karakter yang anda sukai: " + simbol + "|");
        System.out.println("|              SELAMAT DATANG                 |");
        System.out.println("===============================================");
        
        
    }
    
}
