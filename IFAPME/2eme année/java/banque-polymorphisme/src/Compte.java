public class Compte {

    String numero;
    float solde;

    public Compte(String numero, float solde){
        this.numero = numero;
        this.solde = solde;
    }

    public String getNumero() {
        return numero;
    }

    public float getSolde() {
        return solde;
    }

    public void afficherSolde(){
        System.out.println("Solde du compte :" + solde);
    }

    public void crediter(float montant){
        this.solde += montant;
    }

    public void debiter(float montant) {
        if (montant <= solde) {
            this.solde -= montant;
        }
    }

    public float calculInteret() {
        return 0; // valeur par défaut
    }


}
