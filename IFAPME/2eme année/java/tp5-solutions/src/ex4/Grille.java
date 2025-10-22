package ex4;


import java.util.Arrays;

public class Grille {

    int[] nGagnants = {1,2,5,6,8,9};
    int[] nJoues = new int[6];
    byte compteur = 0;

    public Grille(int[] nJoues){
        this.nJoues = nJoues;
    }

    public int[] getNGagnants(){
        return this.nGagnants;
    }

    public boolean numGagnants() {
        compteur = 0; // réinit avant chaque test
        for (int i = 0; i < nGagnants.length; i++){
            for (int j = 0; j < nJoues.length; j++){
                if (nGagnants[i] == nJoues[j]){
                    compteur++;
                }
            }
        }

        if (compteur >= 3) {
            System.out.println(" GAGNÉ avec " + compteur + " bons numéros !");
            return true;
        } else {
            System.out.println(" PERDU (" + compteur + " bons numéros)");
            return false;
        }
    }

    public void afficheNum(){
        System.out.println("Liste des numéros gagnants : " + Arrays.toString(nGagnants));
        System.out.println("Liste des numéros joués : " + Arrays.toString(nJoues));
    }

}




