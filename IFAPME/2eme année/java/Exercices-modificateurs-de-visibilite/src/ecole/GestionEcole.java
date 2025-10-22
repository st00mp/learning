package ecole;

public class GestionEcole {

    Etudiant etu1 = new Etudiant("Vincent", 18);
    public void afficherNom(){
        System.out.println(etu1.getName());
    }
    public void afficherNote() {
        System.out.println(etu1.getNote());
    }
}
