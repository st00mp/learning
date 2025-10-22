public class POO {
    public static void main(String[] args) {
        CompteBancaire c1 = new CompteBancaire();
        c1.titulaire = "John";
        c1.déposer(500);
        c1.afficherSolde();
        CompteBancaire.afficherConditionsGenerales();

        CompteBancaire c2 = new CompteBancaire();
        c2.titulaire = "Alice";
        c2.déposer(1000);
        c2.afficherSolde();
        CompteBancaire.afficherConditionsGenerales();

    }
}

class CompteBancaire {
    String titulaire;
    double solde;

    // Méthode d'instance, non-statique
    void déposer(double montant) {
        solde += montant;
    }

    // Méthode d'instance, non-statique
    void afficherSolde() {
        System.out.println("Bonjour, " + titulaire + " , le solde de votre compte s'élève à : " + solde + " euros");
    }

    // Méthode utilitaire, statique
    static void afficherConditionsGenerales() {
        System.out.println("Banque : Votre dépôt est garantit jusqu'à 100.000 euros");
    }
}
