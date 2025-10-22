// Import the ArrayList class
import java.util.ArrayList;
import java.util.List;
import java.util.HashSet;
import java.util.HashMap;
import java.util.Iterator;

public class MyDataStructure {
    public static void main(String[] args){

        // ArrayList
        ArrayList<String> cars = new ArrayList<String>();
        cars.add("Volvo");
        cars.add("BMW");
        cars.add("Audi");
        cars.add("Toyota");
        //System.out.println(cars);
        // Utilisation de iterator avec ArrayList
        Iterator<String> it = cars.iterator();
        while (it.hasNext()) {
            System.out.println(it.next());
        }

        // ArrayListv2
        List<String> films = new ArrayList<String>();
        films.add("300");
        films.add("Matrix");
        System.out.println("Le premier film est : " + films.get(0));
        films.set(0, "La ligne verte");
        films.set(1, "Matrix 2");
        films.add("Rambo");
        films.remove(2);
        System.out.println("Le nombre de films est de : " + films.size());
        Iterator<String> i = films.iterator();
        while (i.hasNext()) {
            System.out.println(i.next());
        }


        // HashSet (Garde les valeurs uniques)
        HashSet<String> colors = new HashSet<String>();
        colors.add("blue");
        colors.add("red");
        colors.add("blue");
        colors.add("yellow");
        // System.out.println(colors);
        // Utilisation de for each à la place de iterator pour parcourir les éléments de la liste
        for (String color : colors){
            System.out.println(color);
        }

        // HashMap
        HashMap<String, String> capitals = new HashMap<String, String>();
        capitals.put("France", "Paris");
        capitals.put("Belgique", "Bruxelles");
        capitals.put("Suède", "StockHolm");
        System.out.println(capitals);

    }
}

class TestClass{
    int[] myNums = {10, 20, 30, 40, 50};
    String[] myColors = {"bleu", "rouge", "vert"};
    double[] myPrices = {1.99, 2.99, 3.99, 4.99};

}
