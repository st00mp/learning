public class Etagere {
    private Livre[] livres;
    private int capacite;
    private int nbLivres;

    public Etagere(int capacite){
        this.capacite = capacite;
        this.livres = new Livre[capacite];
        this.nbLivres = 0;
    }

    private int compterLivres() {
        int count = 0;
        for (Livre livre : livres) {
            if (livre != null) count++;
        }
        return count;
    }

    public boolean estPleine() {
        return compterLivres() >= capacite;
    }

    public void ajouterLivre(Livre livre) throws Exception {
            if (estPleine()){
                throw new Exception("Impossible d'ajouter, étagère pleine");
            }
            livres[nbLivres] = livre;
            System.out.println("Livre ajouté à la position numéro " + (nbLivres));
            nbLivres++;
    }

    public void ajouterLivre(Livre livre, int pos) throws Exception {
        if (pos < 0 || pos >= capacite) throw new Exception("Position invalide");

        if (livres[pos] != null) throw new Exception("Place déjà occupée par un autre livre");

        if (estPleine()){
            throw new Exception("Impossible d'ajouter, étagère pleine");
        }
        livres[pos] = livre;
        nbLivres++;
        System.out.println("Livre ajouté à la position numéro " + pos);
    }

    public String lireTitre(int isbn) throws Exception{
        for (Livre livre : livres){
            if (livre != null && livre.getIsbn() == isbn){
                return livre.getTitre();
            }
        }
        throw new Exception("Aucun titre correspondant à " + isbn);
    }

    public void afficher(){
        System.out.println("Livres dans l'étagère : ");
        for (Livre livre : livres){
            if (livre != null){
                System.out.println("- " + livre.getTitre() + " (" + livre.getEdition() + ")");
            }
        }

    }
}
