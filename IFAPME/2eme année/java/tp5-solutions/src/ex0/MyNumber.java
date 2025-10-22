package ex0;

public class MyNumber {

    private Long id;
    private int myInt;

    public MyNumber(Long id, int myInt) {
        this.id = id;
        this.myInt = myInt;
    }

    // Getters
    public Long getId(){
        return  id;
    }

    public int getMyInt(){
        return myInt;
    }

    @Override
    public String toString(){
        return myInt + " (" + id + ")";
    }
    // 🔹 "toString()" est une méthode héritée de la classe Object.
    // 🔹 Par défaut, elle renvoie une adresse mémoire (inutile pour un humain).
    // 🔹 Avec "@Override", tu la redéfinis pour afficher une version lisible.
    // 🔹 Cela permet d’afficher un objet directement (System.out.println(this)).
    // 🔹 Important : lors d’une concaténation ou d’un println, Java appelle toString() automatiquement.

    public String compareWith(MyNumber other) {
        // 🔹 Méthode d’instance : ici, "this" désigne l’objet courant.
        // 🔹 Elle prend un autre objet MyNumber en paramètre : "other".
        // 🔹 C’est une interaction entre deux objets vivants (n1 ↔ n2),
        //    un concept essentiel de la POO.
        if (this.myInt > other.myInt) {
            return this + " est plus grand que " + other;
        } else if (this.myInt < other.myInt) {
            return this + " est plus petit que " + other;
        } else {
            return this + ") est égal à " + other;
        }
    // 🔹 Ici, tu compares les valeurs "myInt" de deux objets.
    // 🔹 "this + ..." et "other" appellent automatiquement toString().
    // 🔹 Tu retournes une String lisible : communication entre objets + humain.
    // 🔹 C’est un bon exemple de méthode "métier" : ton objet sait se comparer.
    }

}