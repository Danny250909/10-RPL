import java.util.Scanner;

public class zodiak {
    
    
    public static void main(String[] args) {
       Scanner scanner = new Scanner(System.in);

        int tanggal = 0;
        int bulan = 0;
        boolean inputValid = false;

        while (!inputValid) {
            try {
                System.out.println("Masukkan tanggal lahir Anda (1-31): ");
                tanggal = scanner.nextInt();

                System.out.println("Masukkan bulan lahir Anda (1-12): ");
                bulan = scanner.nextInt();

                if (tanggal < 1 || tanggal > 31 || bulan < 1 || bulan > 12) {
                    System.out.println("Input tidak valid! Silakan masukkan tanggal dan bulan yang benar.");
                } else if ((bulan == 2 && tanggal > 28) || (bulan == 4 && tanggal > 30) || (bulan == 6 && tanggal > 30) || (bulan == 9 && tanggal > 30) || (bulan == 11 && tanggal > 30)) {
                    System.out.println("Input tidak valid! Silakan masukkan tanggal dan bulan yang benar.");
                } else {
                    inputValid = true;
                }
            } catch (Exception e) {
                System.out.println("Input tidak valid! Silakan masukkan angka.");
                scanner.next(); // membersihkan input
            }
        }

        String zodiak = "";

        if ((bulan == 1 && tanggal >= 20) || (bulan == 2 && tanggal <= 18)) {
            zodiak = "Aquarius";
        } else if ((bulan == 2 && tanggal >= 19) || (bulan == 3 && tanggal <= 20)) {
            zodiak = "Pisces";
        } else if ((bulan == 3 && tanggal >= 21) || (bulan == 4 && tanggal <= 19)) {
            zodiak = "Aries";
        } else if ((bulan == 4 && tanggal >= 20) || (bulan == 5 && tanggal <= 20)) {
            zodiak = "Taurus";
        } else if ((bulan == 5 && tanggal >= 21) || (bulan == 6 && tanggal <= 20)) {
            zodiak = "Gemini";
        } else if ((bulan == 6 && tanggal >= 21) || (bulan == 7 && tanggal <= 22)) {
            zodiak = "Cancer";
        } else if ((bulan == 7 && tanggal >= 23) || (bulan == 8 && tanggal <= 22)) {
            zodiak = "Leo";
        } else if ((bulan == 8 && tanggal >= 23) || (bulan == 9 && tanggal <= 22)) {
            zodiak = "Virgo";
        } else if ((bulan == 9 && tanggal >= 23) || (bulan == 10 && tanggal <= 22)) {
            zodiak = "Libra";
        } else if ((bulan == 10 && tanggal >= 23) || (bulan == 11 && tanggal <= 21)) {
            zodiak = "Scorpio";
        } else if ((bulan == 11 && tanggal >= 22) || (bulan == 12 && tanggal <= 21)) {
            zodiak = "Sagittarius";
        } else if ((bulan == 12 && tanggal >= 22) || (bulan == 1 && tanggal <= 19)) {
            zodiak = "Capricorn";
        }

        System.out.println("Zodiak Anda adalah: " + zodiak);
    }
    
}
