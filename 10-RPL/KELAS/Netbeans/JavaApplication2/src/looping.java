


public class looping {

    
    public static void main(String[] args) {
        for(int a = 1; a <= 5; a++) {
            System.out.println(a + ". Ditzzx");
        }
        
        System.out.println();
        
        int a = 1;
        while(a <= 5) {
            System.out.println(a + ". Ditzzx");
            a++;
        }
        
        System.out.println();

        int tinggi = 5;

        for (int i = 1; i <= tinggi; i++) {
            for (int j = 1; j <= i; j++) {
                System.out.print("+");
            }
            System.out.println();
        }
    
        System.out.println();
        
//        int t = 5;

        for (int i = tinggi; i >= 1; i--) {
            for (int j = 1; j <= i; j++) {
                System.out.print("+");
            }
            System.out.println();
        }
        
        System.out.println();

//        int t = 5;
        for (int i = tinggi; i >= 1; i--) {

            for (int s = 0; s < tinggi - i; s++) {
                System.out.print(" ");
            }
            
            for (int j = 1; j <= i; j++) {
                System.out.print("+");
            }
            System.out.println();
        }
        
        System.out.println();
        
        for(int x = 1; x <= 1; a++) {
            for(int y = 0; y > 5; y--) {
                System.out.println(" ");
            }
            
            for(int z = 5; z >= x; z--){
                System.out.println();
            }
            System.out.println();
        }
        
        System.out.println();
        
        
    }
}
