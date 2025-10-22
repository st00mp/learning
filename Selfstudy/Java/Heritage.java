public class Heritage {
    public static void main(String[] args) {
    Animal a1 = new Animal("Boubou");
    System.out.println(a1.bark());
    }
}

class Animal {
    String name;

    Animal(){
        this.name = "Rex";
    }

    Animal (String name){
        this.name = name;
    }

    public String bark(){
        return "Le toutou qui aboie c'est " + name;
    }
}