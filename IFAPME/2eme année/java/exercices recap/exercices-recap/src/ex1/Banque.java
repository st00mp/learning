package ex1;

import java.util.ArrayList;
import java.util.List;

public class Banque {
    private List<Compte> comptes;

    public Banque() {
        this.comptes = new ArrayList<>();
    }

    public void ajouterCompte(Compte compte) {
        comptes.add(compte);
    }

    public List<Compte> afficherTous() {
        return comptes;
    }

    public Compte trouverCompte(String numero) {
        for (Compte compte : comptes) {
            if (compte.getNumero().equals(numero)) {
                return compte;
            }
        }
    return null;
    }

    public void transferer(Compte source, Compte cible, double montant) {
        if (source.getSolde() > montant) {
            source.debiter(montant);
            cible.crediter(montant);
            System.out.println("✅ Transfert de " + montant + " € de " + source.getNumero() + " vers " + cible.getNumero());
        } else {
            System.out.println("Transfert impossible, fonds insuffisants");
        }
    }
}
