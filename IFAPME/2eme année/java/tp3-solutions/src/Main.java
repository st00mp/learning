import election.Election;
import entreprise.Employe;
import entreprise.Employe2;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {
//        Election ex1 = new Election();
//        ex1.initialise(51f, 20f, 10f, 19f);
//        System.out.println(ex1.resultatCandidat());
//        ex1.afficherTour2();

//        Employe ex2 = new Employe("Vincent", 500f);
//        ex2.demandeAcompte();
//        ex2.travaille(33);
//        ex2.salaire();
//        ex2.demandeAcompte();
//        ex2.travaille(33);
//        ex2.salaire();

        Employe2 e2 = new Employe2("Isabelle", 95);

        e2.travailler(35);
        e2.travailler(32);

        System.out.println("Salaire : " + e2.salaire() + "€");
        e2.demandeAcompte();
        System.out.println("Salaire : " + e2.salaire() + "€");
        e2.demandeAcompte();
        System.out.println("Salaire : " + e2.salaire() + "€");

        System.out.println(e2.travailler(35));

        System.out.println(e2.demandeAcompte());





    }
}