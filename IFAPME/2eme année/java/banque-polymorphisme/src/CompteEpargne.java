public class CompteEpargne extends Compte {
    private final float tauxInteret = 0.025f;

    public CompteEpargne(String numero, float solde){
        super(numero, solde);
    }

    public void debiter(float montant){
        if ((this.solde - montant) < 0) {
            System.out.println("Débit refusé : solde négatif interdit !");
            return;
        }
        this.solde -= montant;
        System.out.println("Débit effectué. Nouveau solde : " + solde);
    }

    public float calculInteret(){
        return this.tauxInteret * this.getSolde();
    }
}
