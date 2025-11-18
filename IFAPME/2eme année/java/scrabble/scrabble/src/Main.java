import model.Partie;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {

        Partie start = new Partie();
        start.distribuerTuilesInitiales();
        start.afficherChevalet();

// Raisonnement :
// Le joueur demande à placer le mot, mais le model.Plateau exécute le placement.
// Chaine d'interactions : model.Joueur saisit mot -> model.Partie vérifie -> model.Plateau place -> model.Partie compte le score
// model.Plateau = matrice (lignes x colonnes) et contient soit un espace vide (' ') soit une lettre (A)
// Score ne doit être calculé que si le mot est bien placé sur le plateau
// model.Sac pour générer les tuiles conformément à la distribution du Scrabble

// Utiliser Main comme UI :
// -> affiche les messages à l’écran (System.out.println),
// -> lit les entrées de l’utilisateur (Scanner),
// -> appelle les méthodes de la logique métier (Partie).

    }
}
