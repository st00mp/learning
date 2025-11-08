import model.Compte;
import model.CompteCourant;
import model.CompteEpargne;
import service.Banque;

public class Main {
    public static void main(String[] args) {

        // 🏦 Création de la banque
        Banque banque = new Banque();

        // 👤 Création de différents comptes (polymorphisme)
        CompteCourant cc1 = new CompteCourant("BE1001", 500, 200);  // solde 500, découvert 200
        CompteEpargne ce1 = new CompteEpargne("BE2002", 1000, 0.02); // 2% d’intérêt

        // ➕ Ajout des comptes à la banque
        banque.ajouterCompte(cc1);
        banque.ajouterCompte(ce1);

        // 📋 Affichage initial
        System.out.println("=== Comptes initiaux ===");
        banque.afficherTous();

        // 💸 Débits et crédits
        System.out.println("\n=== Tests de débit/crédit ===");
        cc1.debiter(600);  // autorisé grâce au découvert
        cc1.debiter(200);  // dépasse le découvert
        ce1.debiter(200);  // débit normal (pas de découvert)

        cc1.crediter(150);
        ce1.crediter(100);

        // 🔁 Transfert entre comptes
        System.out.println("\n=== Transfert ===");
        banque.transferer(ce1, cc1, 250); // transfert depuis épargne vers courant

        // 📊 Calcul des intérêts
        System.out.println("\n=== Calcul des intérêts ===");
        System.out.println("Intérêts compte courant : " + cc1.calculInteret() + " €");
        System.out.println("Intérêts compte épargne  : " + ce1.calculInteret() + " €");

        // 🧾 Affichage final
        System.out.println("\n=== Comptes après opérations ===");
        banque.afficherTous();

        }
}
