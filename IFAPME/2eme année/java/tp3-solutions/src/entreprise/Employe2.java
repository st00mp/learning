package entreprise;

public class Employe2 {
    private String nom;
    private boolean acompte;
    private int nbHeures;
    private float salaireHoraire;

    public Employe2(String nom, float salaireHoraire){
        this.nom = nom;
        this.salaireHoraire = salaireHoraire;
        // acompte et nbHeures sur false et 0 par défaut
    }

    public String demandeAcompte(){
        if (!acompte){
            acompte = true;
            return "Affiche OK " + nom + ", on vous verse 500€ par mois";
        } else {
            return "Affiche Désolé " + nom + ", vous avez déjà recu votre acompte";
        }
    }

    public String travailler(int nbHeuresPrestees){
        nbHeures += nbHeuresPrestees;
        return this.nom + ", vous avez travaillé " + this.nbHeures + " heures ce mois ci";
    }

    public float salaire(){
        if (!acompte){
            return this.nbHeures * this.salaireHoraire;
        } else {
            return (this.nbHeures * this.salaireHoraire) - 500f;
        }
    }
}
