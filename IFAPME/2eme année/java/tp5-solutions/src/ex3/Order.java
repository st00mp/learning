package ex3;

public class Order {
    // Ecrire une classe qui permet via son constructeur d'initialiser le nom et le montant
    // de la facture d'un client e t d'afficher immédiatement "Montant moyen des commandes = .€".

    private final String name;
    private float amount;

    public Order(String name, float amount){
        this.name = name;
        this.amount = amount;
        System.out.println("Montant moyen des commandes : " + this.amount);
    }
}
