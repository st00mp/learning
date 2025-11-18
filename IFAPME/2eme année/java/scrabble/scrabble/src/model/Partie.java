package model;

import java.util.List;

public class Partie {

    private final Joueur joueur;
    private final Plateau plateau;
    private final Sac sac;

    public Partie(){
        this.joueur = new Joueur();
        this.plateau = new Plateau();
        this.sac = new Sac();
        distribuerTuilesInitiales();
    }

    public Joueur getJoueur(){
        return joueur;
    }

    public Plateau getPlateau() {
        return plateau;
    }

    public Sac getSac() {
        return sac;
    }

    public void distribuerTuilesInitiales(){
        List<Tuile> tuilesPiochees = sac.piocher();
        joueur.getChevalet().setTuiles(tuilesPiochees);
    }

    public void afficherChevalet(){
        joueur.getChevalet().afficherTuiles();
    }

}
