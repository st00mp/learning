package model;

import java.util.ArrayList;

public class Tuile {

    private char lettre;

    private int points;

    public Tuile(char lettre, int points){
        this.lettre = lettre;
        this.points = points;
    }

    public char getLettre() {
        return lettre;
    }

    public int getPoints() {
        return points;
    }

    public ArrayList<Tuile> genererLettres(){

    }
}
