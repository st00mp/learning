package ex1;

// En Java, une classe doit presque toujours représenter :
//
//🔹 Une entité du monde réel ou logique,
//🔹 pas une opération.
//
//Une opération (comme comparer) devient une méthode de cette entité.
//Donc : AgeComparison devrait plutôt être une méthode (ex : compareAgeWith(...)) dans une classe comme Personne.

public class Person {
    private int age;
    private String name;

    public Person(int age, String name) {
        this.age = age;
        this.name = name;
    }

    public int getAge(){
        return age;
    }

    public String getName(){
        return name;
    }

    public String compareWith(Person other) {
        if (this.age > other.age) {
            return this.name + " est plus agé que " + other.name;
        } else if (this.age < other.age) {
            return this.name + " est plus jeune que " + other.name;
        } else {
            return this.name + " à le même âge que " + other.name;
        }
    }

    @Override
    public String toString(){
        return name + " (age = " + age + " ans";
    }
}
