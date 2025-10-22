import java.util.List;
import java.util.ArrayList;

public class MyStream {
    public static void main(String[] args){
        List<String> colors = new ArrayList<>(List.of("green", "pourpal", "white"));
        colors.add("blue");
        colors.stream()
                //.forEach(c -> System.out.println(c));
                // Abbréviation
                .forEach(System.out::println);

        // List<Integer> nums = new ArrayList<>(List.of(2, 4, 6, 8, 10));
        // Autre manière d'init stream(), ici on le stock dans une variable pour le garder sous la main pour plus tard
        // Stream<Integer> stream = nums.stream();
        // stream.forEach(System.out::println);

        List<Integer> nums2 = new ArrayList<>(List.of(1,2,3,4,5,6,7,8,8,9,10,10));
        nums2.stream()
                .filter(n -> n > 3)
                .map(n -> n * 3)
                .distinct()
                .sorted()
                .forEach(System.out::println);

        // List<String> films = new ArrayList<>(List.of("Matrix", "Oppenheimer", "Interstellar", "Oui-Oui et la voiture rouge", "Rambo le retour", "La montre qui faisait tok-tik"));
        //     films.stream()
        //             .filter(f -> f > 3)
        //             .forEach(System.out::println);


    }
}


