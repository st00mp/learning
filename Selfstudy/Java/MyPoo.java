public class MyPoo {
    int x = 5;
    public static void main(String[] args) {
        MyPoo myObj1 = new MyPoo();
        MyPoo myObj2 = new MyPoo();
            System.out.println(myObj1.x);
            System.out.println(myObj2.x);
        Student ex1 = new Student("Vincent", "Corvers", 35, 2);
        ex1.printInfo();
    }
}

class Student {
    String fname;
    String lname;
    int age;
    int grade;

    // Constructeur
    Student(String fname, String lname, int age, int grade) {
        this.fname = fname;
        this.lname = lname;
        this.age = age;
        this.grade = grade;
    }

    // Méthode qui utilise les attributs
    void printInfo() {
        System.out.println("L'élève s'appelle " + fname + " " + lname + ". Il à " + age + " et est en " + grade + " année.");
    }
}