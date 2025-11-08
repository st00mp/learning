package model;

public class Compte {
    protected String numero;
    protected double solde;

    public Compte(String numero, double solde){
        this.numero = numero;
        this.solde = solde;
    }

    public Compte(){
        this.numero = "BE123456";
        this.solde = 0.0f;
    }

    public String getNumero(){
        return numero;
    }
    public double getSolde(){
        return solde;
    }
    public void setNumero(String numero){
        this.numero = numero;
    }
    public void setSolde(double solde){
        this.solde = solde;
    }

    public void crediter(double montant){
        this.solde += montant;
    }

    public void debiter(double montant) {
        if (this.solde >= montant) {
            this.solde -= montant;
            System.out.println("Débit de " + montant + " € réussi.");
        } else {
            System.out.println("Solde insuffisant pour débiter " + montant + " €.");
        }
    }

    public double calculInteret() {
        return 0.0;
    }


    @Override
    public String toString(){
        return "Compte " + numero + " – Solde : " + solde + " €";
    }

    @Override
    public boolean equals(Object object){
        if (this == object) return true;
        if (!(object instanceof Compte)) return false;
        Compte autre = (Compte) object; // casting
            return this.numero.equals(autre.numero);
        }

    @Override
    public int hashCode() {
        return numero.hashCode();
    }
}
