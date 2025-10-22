public class MyPoo2 {
    int x = 3;
    public static void main(String[] args){
        MyPoo2 myObj1 = new MyPoo2();
        MyPoo2 myObj2 = new MyPoo2();
        // Affectation de la valeur de la variable x (sauf si ajout du "modifier" "final")
        myObj1.x = 33;
        // On peut donner une valeur différente à 2 objets différents
        myObj2.x = 40;
        System.out.println(myObj1.x);
        System.out.println(myObj2.x);

        Worker ex1 = new Worker(122333123L, "Vincent", "Homme");
        ex1.printInfo();
    }
}

class Worker {
    private long id;
    private String name;
    private String gender;

    Worker(Long id, String name, String gender) {
        this.id = id;
        this.name = name;
        this.gender = gender;
    }

    void printInfo(){
        System.out.println(id + " " + name + " " + gender);
    }
}