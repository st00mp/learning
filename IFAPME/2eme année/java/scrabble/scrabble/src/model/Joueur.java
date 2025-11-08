package model;

public class Joueur {

    private Chevalet chevalet;
    private int score;

    public Joueur(){
        this.chevalet = new Chevalet();
        this.score = 0;
    }

    public Chevalet getChevalet() {
        return chevalet;
    }

    public int getScore() {
        return score;
    }

    // ajouterPoints(){}
}
