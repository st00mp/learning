public class NestedLoop {
    public static void main(String[] args) {
        Example1.run();
    }

    class Example1 {
        static void run() {
            for (int i = 1; i <= 10; i++) {
                for (int j = 1; j <= 10; j++) {
                    System.out.println(i + "*" + j + "=" + (i * j));
                }
            }
        }
    }
}
