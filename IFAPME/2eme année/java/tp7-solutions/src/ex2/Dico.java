package ex2;

import java.util.ArrayList;
import java.util.List;

public class Dico {
    private String[] tabFr;
    private String[] tabAngl;

    public Dico(String[] tabFr, String[] tabAngl) {
        this.tabFr = tabFr;
        this.tabAngl = tabAngl;
    }

    public Dico() {}

    public String tradFr(String englishWord) {
        for (byte i = 0; i < tabAngl.length; i++) {
            if (tabAngl[i].equals(englishWord)) {
                return tabFr[i];
            }
        }
        return "Mot absent du dico";
    }

    public String tradAngl(String frenchWord) {
        for (byte i = 0; i < tabFr.length; i++) {
            if (tabFr[i].equals(frenchWord)) {
                return tabAngl[i];
            }
        }
        return "Mot absent du dico";
    }

    List<String> frWords = new ArrayList<>(List.of("maison", "arbre", "repas", "chien"));
    List<String> enWords = new ArrayList<>(List.of("house", "tree", "meal", "dog"));

    public void addWord(String frWord, String enWord) {
        frWords.add(frWord);
        enWords.add(enWord);
    }

    public void showList(){
        System.out.println(frWords);
        System.out.println(enWords);
    }
}
