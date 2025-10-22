import java.util.ArrayList;
import java.util.List;
import java.util.stream.IntStream;

public class MyIntStream {
    public static void main(String[] args) {
        // Création d'une liste via Collections
        List<Integer> nums = new ArrayList<>(List.of(0,1,2,3,4,5,6));

        nums.add(666);
        nums.set(0, 1);
        nums.remove(4);

        System.out.println("Nombre de chiffres dans la liste : " + nums.size());
        System.out.println("Contenu : " + nums);

        // ✅ Conversion en IntStream (objet -> primitifs int)
        IntStream numsIntStream = nums.stream()
                .mapToInt(Integer::intValue);

        // ✅ Utilisation directe des méthodes IntStream
        int sum = numsIntStream.sum();
        System.out.println("La somme des éléments est de " + sum);

        // Ajout du résultat dans la liste (ok car ArrayList est modifiable)
        nums.add(sum);
        System.out.println("Mise à jour du contenu : " + nums);

        // ⚠️ Ici tu avais une erreur :
        // - average() retourne un OptionalDouble, pas un Stream
        // - donc pas de .collect() derrière
        double average = nums.stream()
                .mapToInt(Integer::intValue) // conversion Integer -> int
                .average()                   // retourne OptionalDouble
                .orElse(0);                  // valeur par défaut si vide

        System.out.println("La moyenne est de " + average);
    }
}