import java.util.Scanner;

public class percabangan {

    
    public static void main(String[] args) {
//        int nilai;
        Scanner Inputuser = new Scanner (System.in);
        System.out.print("Inputkan nilai anda: ");
        int nilai = Inputuser.nextInt();
        System.out.println("Nilai anda: " + nilai);
        
        
        if (nilai >= 65) {
            System.out.println("Anda lulus");
        } else {System.out.println("Anda tidak lulus");
        }
        
        
        System.out.print("Masukkan nilai: ");
        int nilai1 = Inputuser.nextInt();

        if (nilai >= 90 && nilai <= 100) {
            System.out.println("Grade: A");
        } else if (nilai >= 80 && nilai <= 89) {
            System.out.println("Grade: B");
        } else if (nilai >= 70 && nilai <= 79) {
            System.out.println("Grade: C");
        } else if (nilai >= 60 && nilai <= 69) {
            System.out.println("Grade: D");
        } else if (nilai >= 0 && nilai <= 59) {
            System.out.println("Grade: E");
        } else {
            System.out.println("Nilai tidak valid!");
        }

        
        
        
//        input.close();
         }
    
}
