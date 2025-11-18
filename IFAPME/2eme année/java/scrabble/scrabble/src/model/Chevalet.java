package model;

import java.util.ArrayList;
import java.util.List;

public class Chevalet {

    private List<Tuile> tuiles;

    public Chevalet(){
        this.tuiles = new ArrayList<>();
    }

    public List<Tuile> getTuiles() {
        return tuiles;
    }

    public void setTuiles(List<Tuile> tuiles) {
        this.tuiles = tuiles;
    }

    public void afficherTuiles() {
    System.out.println("\n─── Chevalet ─────────────────────────");

    for (Tuile tuile : tuiles) {
        System.out.print("[ " + tuile.getLettre() + " | " + tuile.getPoints() + " ] ");
    }

    System.out.println("\n──────────────────────────────────────\n");
    }
}
