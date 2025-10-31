//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {
        Compte[] comptes = new Compte[2];
        comptes[0] = new CompteCourant("BE1234", 1000f, 200.0f);
        comptes[1] = new CompteEpargne("BE4321", 21000f);

        System.out.println();
        System.out.println("Operations compte courant :");

        comptes[0].debiter(1000f);
        comptes[0].debiter(500f);
        comptes[0].crediter(10000f);
        comptes[0].crediter(comptes[0].calculInteret());
        comptes[0].afficherSolde();

        System.out.println();
        System.out.println("Operations compte epargne :");

        comptes[1].debiter(22000f);
        comptes[1].debiter(1000f);
        comptes[1].crediter(10000f);
        comptes[1].crediter(comptes[1].calculInteret());
        comptes[1].afficherSolde();


    }
}