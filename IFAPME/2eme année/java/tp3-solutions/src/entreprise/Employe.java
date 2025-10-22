package entreprise;

public class Employe {
    private String nom;
    private boolean acompte;
    private int nbHeures;
    private float salaireHoraire;

    // Constructeur
    public Employe(String nom, float salaireHoraire) {
        this.nom = nom;
        this.salaireHoraire = salaireHoraire;
        // Pas besoin d'initialiser acompte ou nbHeures :
        // boolean → false par défaut, int → 0 par défaut
    }

    // Méthode pour demander un acompte
    public void demandeAcompte() {
        String message = "";
        if (!this.acompte) {
            message = "OK " + this.nom + ", on vous verse 500€ d'acompte.";
            this.acompte = true; // on marque qu'il a reçu son acompte
        } else {
            message = "Désolé " + this.nom + ", acompte déjà versé.";
        }
        System.out.println(message);
    }

    // Méthode pour enregistrer les heures prestées
    public void travaille(int nbHeuresPrestees) {
        this.nbHeures += nbHeuresPrestees;
        System.out.println(this.nom + " a travaillé " + this.nbHeures + " heures.");
    }

    // Calcul du salaire à la fin du mois
    public float salaire() {
        if (!this.acompte) {
            return this.salaireHoraire * this.nbHeures;
        } else {
            return this.salaireHoraire * this.nbHeures - 500;
        }
    }
}