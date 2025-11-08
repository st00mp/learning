package model;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class Sac {

    private final List<Tuile> tuiles = new ArrayList<>();

    public Sac (){
        genererTuiles();
    }

    public void genererTuiles(){
        ajouterTuiles('A', 1, 9);
        ajouterTuiles('B', 3, 2);
        ajouterTuiles('C', 3, 2);
        ajouterTuiles('D', 2, 3);
        ajouterTuiles('E', 1, 15);
        ajouterTuiles('F', 4, 2);
        ajouterTuiles('G', 2, 2);
        ajouterTuiles('H', 4, 2);
        ajouterTuiles('I', 1, 8);
        ajouterTuiles('J', 8, 1);
        ajouterTuiles('K', 10, 1);
        ajouterTuiles('L', 1, 5);
        ajouterTuiles('M', 2, 3);
        ajouterTuiles('N', 1, 6);
        ajouterTuiles('O', 1, 6);
        ajouterTuiles('P', 3, 2);
        ajouterTuiles('Q', 8, 1);
        ajouterTuiles('R', 1, 6);
        ajouterTuiles('S', 1, 6);
        ajouterTuiles('T', 1, 6);
        ajouterTuiles('U', 1, 6);
        ajouterTuiles('V', 4, 2);
        ajouterTuiles('W', 10, 1);
        ajouterTuiles('X', 10, 1);
        ajouterTuiles('Y', 10, 1);
        ajouterTuiles('Z', 10, 1);
    }

    public void ajouterTuiles(char lettre, int points, int quantite){
        for (int i = 0; i < quantite; i++){
            tuiles.add(new Tuile(lettre, points));
        }
    }

    public List<Tuile> piocher(){
        List<Tuile> pioche = new ArrayList<>();
        Random random = new Random();

        for (int i = 0; i < 7; i++){
            int index = random.nextInt(tuiles.size());
            Tuile tuile = tuiles.remove(index); // Supprime un élément de la liste et renvoie sa valeur en même temps
            pioche.add(tuile);
        }
        return pioche;
    }

}
