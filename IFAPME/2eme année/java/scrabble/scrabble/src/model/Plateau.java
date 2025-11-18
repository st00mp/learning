package model;

public class Plateau {

    private char[][] grille;

    public Plateau(){
        this.grille = new char[15][15];
    }

    public void initialiserPlateau(){
        for (int i = 0; i < 15; i++){
            for (int j = 0; j < 15; j++){
                grille[i][j] = '●';
            }
        }
    }

    // @TODO: Afficher numéros de colonnes et lignes
    public void afficherPlateau(){
        System.out.println("\n─── Plateau ───────────────────────────────");
        for (int i = 0; i < 15; i++){
            for (int j = 0; j < 15; j++){
                System.out.print(grille[i][j] + "  ");
            }
            System.out.println();
        }
        System.out.println("───────────────────────────────────────────\n");
    }


}
