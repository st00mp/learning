public class MySwitch {
    public static void main(String[] args) {
        int jour = 2;

        switch (jour) {
            case 1 -> System.out.println("Lundi");

            case 2 -> System.out.println("Mardi");

            case 3 -> System.out.println("Mercredi");

            case 4 -> System.out.println("Jeudi");

            case 5 -> System.out.println("Jeudi");

            case 6, 7 -> System.out.println("Vendredi");

        }
    }
}
