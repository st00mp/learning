package ecole;

public class Etudiant {
     String name;
     double note;

    public Etudiant(String name, double note){
        this.name = name;
        this.note = note;
    }
    public String getName(){
        return name;
    }

    public double getNote(){
        return note;
    }
}
