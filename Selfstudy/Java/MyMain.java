// Ceci est mon premier commentaire
/*
 * Ceci est mon 2eme commentaire
 */
public class MyMain {
    public static void main(String[] args) {
        String prenom = "Vincent";
        String nom = "Corvers ";
        String nom_prenom = nom + prenom;
        System.out.println("Je m'appelle " + nom_prenom);

        final int AGE = 35; // final empêche la réaffectation (un peu comme const), écrit en CAPS
        System.out.println("J'ai " + AGE + " ans.");

        double poids = 133.33333333;
        System.out.println("Je pèse lourd dans le game cad  " + poids + " kg");

        float poids_f = 133.3f;
        System.out.println(poids + poids_f);

        char groupe_sanguin = 'A';
        System.out.println(groupe_sanguin);

        boolean est_smart = true;
        System.out.println(est_smart);

        int x = 1, y = 2, z = 3;
        System.out.println(x + y + z);

        int a, b, c;
        a = b = c = 50;
        System.out.println(a + b + c);

    }

}
