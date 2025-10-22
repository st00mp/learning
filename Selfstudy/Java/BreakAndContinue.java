public class BreakAndContinue {
    public static void main(String[] args) {
        ExerciceBC ex = new ExerciceBC();
        ex.run();
        Exercice2 ex2 = new Exercice2();
        ex2.run();
    }
}

class ExerciceBC {
    void run() {
        for (int i = 1; i <= 10; i++) {
            if (i == 3) {
                // Skip une itération
                continue;
            }
            System.out.println(i);
        }
    }
}

class Exercice2 {
    void run() {
        for (int i = 10; i >= 0; i--) {
            if (i == 6) {
                System.out.println("Ca va péterrrrr");
                break;
            }
            System.out.println(i);
        }
    }
}
