package service;

import model.Joueur;
import model.Plateau;
import model.Sac;
import model.Tuile;

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

    public void distribuerTuilesInitiales(){
        List<Tuile> tuilesPiochees = sac.piocher();
        joueur.getChevalet().setTuiles(tuilesPiochees);
    }


}
