import ex1.Conjugaison;
import ex1.Verbe;
import ex2.Dico;

public class Main {
    public static void main(String[] args) {

        // Ex 1
//        Verbe v1 = new Verbe();
//        v1.askingVerb();
//        System.out.println(v1.getLeVerbe());
//
//        Conjugaison c1 = new Conjugaison(v1);
//        c1.showPresent();


        // Ex 2
        String[] tabFr = {"maison", "arbre", "repas", "chien"};
        String[] tabAngl = {"house", "tree", "meal", "dog"};

        Dico testEx2 = new Dico(tabFr, tabAngl);
        Dico test2Ex2 = new Dico(tabFr, tabAngl);
        System.out.println(testEx2.tradFr("house"));
        System.out.println(testEx2.tradAngl("chien"));
        test2Ex2.addWord("banane", "banana");
        test2Ex2.showList();



    }
}