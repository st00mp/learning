public class Main {
    public static void main(String[] args) {

        // Création des livres
        Livre l1 = new Livre(123, "Titre1", "Dupuis");
        Livre l2 = new Livre(131, "Titre2", "Dubru");
        Livre l3 = new Livre(1221, "Titre3", "Duflu");

        // Création d'une étagère de 3 places
        Etagere e1 = new Etagere(3);

        System.out.println("===== 🧱 TEST AJOUT SIMPLE =====");
        try {
            e1.ajouterLivre(l1);
            e1.ajouterLivre(l2);
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 📚 TEST AJOUT À POSITION SPÉCIFIQUE =====");
        try {
            e1.ajouterLivre(l3, 0); // OK
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 🚫 TEST AJOUT À POSITION OCCUPÉE =====");
        try {
            e1.ajouterLivre(l3.clone(), 0); // devrait échouer (déjà occupé)
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 🚫 TEST AJOUT HORS LIMITES =====");
        try {
            e1.ajouterLivre(l1.clone(), 5); // devrait échouer (position invalide)
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 🚫 TEST AJOUT DANS ÉTAGÈRE PLEINE =====");
        try {
            e1.ajouterLivre(l1.clone()); // devrait échouer (étagère pleine)
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 🔍 TEST LECTURE TITRE EXISTANT =====");
        try {
            String titre = e1.lireTitre(123);
            System.out.println("✅ Livre trouvé : " + titre);
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 🔍 TEST LECTURE TITRE INEXISTANT =====");
        try {
            String titre = e1.lireTitre(999); // n’existe pas
            System.out.println("✅ Livre trouvé : " + titre);
        } catch (Exception e) {
            System.out.println("⚠️ " + e.getMessage());
        }

        System.out.println("\n===== 🪞 AFFICHAGE FINAL =====");
        e1.afficher();
    }
}