import ex1.Banque;
import ex1.Compte;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {

        Banque b1 = new Banque();
        Compte c1 = new Compte("BE321", 1000);
        Compte c2 = new Compte("BE343", 500);
        Compte c3 = new Compte("BE987", 2000);
        Compte c4 = new Compte();

        b1.ajouterCompte(c1);
        b1.ajouterCompte(c2);
        b1.ajouterCompte(c3);

        System.out.println(b1.afficherTous());

        System.out.println(b1.trouverCompte("BE987"));

        b1.transferer(c3, c2, 500);
        System.out.println(c2);

        System.out.println(c1.equals(c1)?"Meme compte": "Compte différent");
    }
}