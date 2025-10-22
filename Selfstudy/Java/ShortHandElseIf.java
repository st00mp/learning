public class ShortHandElseIf {
    public static void main(String[] args) {
        Example1.run();
        Example2.run();
        Example3.run();
        Example4.run();
        Example5.run();
        Example6.run();
        Example6Bis.run();
        Example7.run();
    }

    class Example1 {

        static void run() {
            int age = 17;
            if (age >= 18) {
                System.out.println("Majeur");
            } else {
                System.out.println("Mineur");
            }
        }
    }

    class Example2 {
        static void run() {
            String signal = "GO";
            System.out.println(signal.equals("GO") ? "Partez !" : "STOP!");
        }
    }

    class Example3 {
        static void run() {
            int pileOuFace = (int) (Math.random() * 2);
            System.out.println(pileOuFace == 0 ? "Pile" : "Face");
        }
    }

    class Example4 {
        static void run() {
            int rand = (int) (Math.random() * 2);
            System.out.println(rand == 0 ? "Pile" : "Face");
        }
    }

    class Example5 {
        static void run() {
            int note = 19;
            System.out.println(note >= 18 ? "WAW BG" : "Full naz");
        }
    }

    class Example6 {
        static void run() {
            int jour = 1;
            String nomJour = switch (jour) {
                case 1 -> "Lundi";
                case 2 -> "Mardi";
                case 3 -> "Mercredi";
                case 4 -> "Jeudi";
                case 5 -> "Vendredi";
                case 6, 7 -> "Weekend";
                default -> "Jour introuvable";
            };
            System.out.println(nomJour);
        }
    }

    class Example6Bis {
        static void run() {
            int day = 6;
            String nomJour;

            switch (day) {
                case 1:
                    nomJour = "Lundi";
                    break;
                case 2:
                    nomJour = "Mardi";
                    break;
                case 3:
                    nomJour = "Mercredi";
                case 4:
                    nomJour = "Jeudi";
                case 5:
                    nomJour = "Vendredi";
                default:
                    nomJour = "Weekend";

            }
            System.out.println("Le jour est : " + nomJour);
        }
    }

    class Example7 {
        static void run() {
            String code = "ABCDE";
            System.out.println(code.equals("ABCDEF") ? "Déverouillage" : "Accès refusé");
        }
    }

}
