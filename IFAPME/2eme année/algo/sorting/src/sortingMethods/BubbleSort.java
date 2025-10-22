package sortingMethods;

public class BubbleSort {
    int[] n = {8, 3, 2, 1, 7, 6, 5, 4};

    public int[] run() {
        int temp; // variable temporaire pour l'échange
        boolean changement = true;

            for (int i = 0; i < n.length - 1; i++) { // nombre de passages
             changement = false;
                for (int j = 0; j < n.length - 1 - i; j++) { // compare les éléments restants
                    if (n[j] > n[j + 1]) { // si dans le mauvais ordre
                        // échange
                        temp = n[j];
                        n[j] = n[j + 1];
                        n[j + 1] = temp;
                        changement = true;

                    }
                }
                if(!changement){
                    System.out.println("Aucun changement à l’itération " + i + " → tri terminé plus tôt !");
                }
        }
            return n;
    }
}


