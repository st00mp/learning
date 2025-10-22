public class MyWhile {
    public static void main(String[] args) {
        Example1.run();
        CountDown.run();
        Countdown2.run();
        DoWhile.run();
    }

    static class Example1 {
        static void run() {

            int i = 1;
            while (i <= 20) {
                System.out.println("Itération n° : " + i);
                i++;
            }
        }
    }

    static class CountDown {
        static void run() {
            int i = 100;
            while (i >= 0) {
                String unite = (i == 1) ? "seconde" : "secondes";
                System.out.println("La bombe va exploser dans " + i + " " + unite);
                i--;
            }
            System.out.println("BOOM");
        }
    }

    static class Countdown2 {
        static void run() {
            int j = 100;
            while (j >= 0) {
                String singulier = (j == 1 ? "seconde" : "secondes");
                System.out.println("Ca va péter dans " + j + " " + singulier);
                j--;
            }
        }
    }

    static class DoWhile {
        static void run() {
            int x = 666;
            do {
                System.out.println(x);
                x--;
            } while (x >= 0);
        }
    }
}