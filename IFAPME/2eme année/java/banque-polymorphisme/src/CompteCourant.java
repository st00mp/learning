public class CompteCourant extends Compte {
    float seuil;
    private final float tauxInteret = 0.01f;

    public CompteCourant(String numero, float solde, float seuil){
        super(numero, solde);
        this.seuil = seuil;
    }

    public float getSeuil() {
        return seuil;
    }

    public void debiter(float montant){
        if ((this.solde - montant) < seuil) {
            System.out.println("Débit refusé : solde en dessous du seuil interdit !");
            return;
        }
        this.solde -= montant;
        System.out.println("Débit effectué. Nouveau solde : " + this.solde);
    }

    public float calculInteret(){
        return this.tauxInteret * this.getSolde();
    }

}