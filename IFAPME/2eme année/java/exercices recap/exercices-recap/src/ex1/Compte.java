package ex1;

public class Compte {
    private String numero;
    private float solde;

    public Compte(String numero, float solde){
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
    public float getSolde(){
        return solde;
    }
    public void setNumero(String numero){
        this.numero = numero;
    }
    public void setSolde(float solde){
        this.solde = solde;
    }



}
