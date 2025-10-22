import java.util.List;
import java.util.ArrayList;
import java.util.stream.Collectors;

public class MyCollect {
    public static void main(String[] args){
        List<String> names = new ArrayList<>(List.of("Henry", "Jacques", "Isabelle", "Ignace"));
        List<String> filtered = names.stream()
                .filter( n -> n.startsWith("I"))
                .map(s -> s.toUpperCase())
                // Manière plus concise d'écrire la meme chose
                //.map( String::toUpperCase)
                .collect(Collectors.toList());
        System.out.println(filtered);
    }
}
