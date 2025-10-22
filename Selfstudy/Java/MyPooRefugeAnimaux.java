public class MyPooRefugeAnimaux {
    public static void main(String[] args) {
        Animal2 a1 = new Animal2(123L, 8, "Boubou", "Bouvier Bernois", "Brun feu", true);
        System.out.println(a1.ShowSpecs());
        Cat c1 = new Cat(1222L, 7, "Basile", "Siamois", "Blue point", true);
        System.out.println(c1.ShowSpecs());
    }
}

class Animal2 {
    long id;
    int age;
    String name;
    String race;
    String color;
    boolean adopted;

    Animal2(long id, int age, String name, String race, String color){
        //this.adopted = false;
        // autre manière d'écrire la surcharge pour avoir un paramètre par défaut mais plus longue dans ce cas ci.
        // on appelle le constructeur principal avec this(params (et avec la valeur de celui que l'ont veut overload))
         this(id, age, name, race, color, true);
    }

    Animal2(long id, int age, String name, String race, String color, boolean adopted) {
        this.id = id;
        this.age = age;
        this.name = name;
        this.race = race;
        this.color = color;
        this.adopted = adopted;
    }

    String ShowSpecs(){
        return "Le toutou qui à pour id " + id + " à " + age + " ans, s'appelle " + name + " est un " + race + " de couleur " + color + (adopted ? ". Il est adopté." : ". Il n'est pas encore adopté.");
    }
}
    //
    class Cat extends Animal2 {
        Cat(long id, int age, String name, String race, String color, boolean adopted){
            super(id, age, name, race, color, adopted);
        }
    }