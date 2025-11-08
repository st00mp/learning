package model;

public class CompteCourant extends Compte {
    private double decouvertAutorise;

    public CompteCourant (String numero, double solde, double decouvertAutorise) {
        super(numero, solde);
        this.decouvertAutorise = decouvertAutorise;
    }

    @Override
    public double calculInteret() {
        return solde * 0.001; // taux très faible pour les comptes courants
    }

    @Override
    public void debiter(double montant) {
        if ((this.solde + decouvertAutorise) >= montant) {
            solde -= montant;
            System.out.println("Débit de " + montant + " € réussi (avec découvert).");
        }
        System.out.println("Débit refusé : dépassement du découvert autorisé ! ");
    }

    @Override
    public String toString(){
        return "Compte courant " + numero + " – Solde : " + solde + " € (Découvert : " + decouvertAutorise + " €)";
    }


}
