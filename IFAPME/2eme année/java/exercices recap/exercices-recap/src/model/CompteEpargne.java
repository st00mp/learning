package model;

public class CompteEpargne extends Compte {
    private double tauxInteret;

    public CompteEpargne(String numero, double solde, double tauxInteret){
        super(numero, solde);
        this.tauxInteret = tauxInteret;
    }

    @Override
    public double calculInteret(){
        return this.solde * this.tauxInteret;
    }

    @Override
    public String toString(){
        return "Compte epargne " + numero + " – Solde : " + solde + " € - Intérets : " + calculInteret();
    }

}
