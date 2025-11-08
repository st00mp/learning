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

    // afficherTuiles(){}
}
