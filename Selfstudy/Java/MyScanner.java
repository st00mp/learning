import java.util.Scanner;

public class MyScanner {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();
        int b = sc.nextInt();
        int c = a + b;
        System.out.println("L'addition est de " + c);
        sc.close();
    }
}
