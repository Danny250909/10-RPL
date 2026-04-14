
        
public class mainperkalian {
    
        public static void main(String[] args) {
               perkalian hitung = new perkalian();

        

        System.out.println("╔══════════════════════════════════════╗");

        System.out.println("║        METHOD OVERLOADING            ║");

        System.out.println("║              PERKALIAN               ║");

        System.out.println("╠══════════════════════════════════════╣");

        

        System.out.printf("║ 1. perkalian(int, int):   %-10d ║%n", hitung.perkalian(17, 11));

        System.out.printf("║ 2. perkalian(double, double): %-8.2f ║%n", hitung.perkalian(2.0, 0.9));

        System.out.printf("║ 3. perkalian(int, int, int): %-8d ║%n", hitung.perkalian(17, 11, 9));

        

        System.out.println("╚══════════════════════════════════════╝");

        

        // Demo tambahan dengan angka berbeda

        System.out.println("\n╔══════════════════════════════════════╗");

        System.out.println("║              DEMO TAMBAHAN            ║");

        System.out.println("╠══════════════════════════════════════╣");

        System.out.printf("║ 4. perkalian(20, 17):       %-10d ║%n", hitung.perkalian(20, 17));

        System.out.printf("║ 5. perkalian(1.1, 2.0):     %-8.2f ║%n", hitung.perkalian(1.1, 2.0));

        System.out.printf("║ 6. perkalian(9, 17, 11):      %-8d ║%n", hitung.perkalian(9, 17, 11));

        System.out.println("╚══════════════════════════════════════╝");

        }
    
}
