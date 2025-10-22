public class MyExceptions {
    public static void main(String[] args){
        Fruits f1 = new Fruits("Melons", 4.99);
        System.out.println(f1.sell());
        Fruits f2 = new Fruits("Fraises", 5.99);
        System.out.println(f2.sell());

        // Utilisation des getters et setters
        Fruits f3 = new Fruits("Oranges", 2.10);
        System.out.println(f3.sell());
        f3.setName("Mandarines");
        System.out.println(f3.getName());
        System.out.println(f3.sell());

        // Utilisation de la classe Exotic
        Exotic e1 = new Exotic("Bananes", 3.49);
        System.out.println(e1.sell());
        System.out.println(Exotic.exoticSong());
        try {
            e1.setPrice(-1);
        } catch (IllegalArgumentException ex1) {
            System.out.println("Erreur : " + ex1.getMessage());
        }

        // Utilisation du try catch
        try {
            Exotic e2 = new Exotic("Papaye", -2.00);
            System.out.println(e2.sell());
            System.out.println(Exotic.exoticSong());
        } catch (IllegalArgumentException ex) {
            System.out.println("Erreur : " + ex.getMessage());
        } finally {
            System.out.println("Bloc finally executé, on continue l'exécution du code proprement");
        }
    }
}

class Fruits{
    private static long nextId = 1;
    private long id;
    private String name;
    private double price;

    // Getters & setters
    public String getName(){
        return name;
    }
    public void setName(String newName){
        this.name = newName;
    }
    public void setPrice(double newPrice){
        if (newPrice < 0){
            throw new IllegalArgumentException("Le nouveau prix doit être supérieur à 0");
        }
        this.price = newPrice;
    }



    Fruits(String name, double price){
        this.id = nextId++;
        this.name = name;
        if (price < 0) {
            throw new IllegalArgumentException("Le prix doit être supérieur à 0€ !");
        }
        this.price = price;
    }

    public String sell(){
        return "Ils sont bons et frais mes fruits ! Les " + name + " sont au prix imabatable de " + price + " €! Id = " + id;
    }
}

class Exotic extends Fruits {
    Exotic(String name, double price) {
        super(name, price);
    }
    public static String exoticSong(){
        return "C'est la chanson des fruits exotiqueeeuuuuuuhhhhh";
    }
}
