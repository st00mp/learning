package ex2;

public class Student {
    private final String nom;
    private Float pourcentage;

    public Student(String nom, Float pourcentage){
        this.nom = nom;
        this.pourcentage = pourcentage;
    }

    public Student(String nom){
        this.nom = nom;
    }

    public String getNom(){
        return nom;
    }

    public Float getPourcentage(){
        return pourcentage;
    }

    public boolean isPourcentageEncode(){
        if (this.pourcentage != null){
            return true;
        } else {
            return false;
        }
    }

    public boolean setPourcentage(Float pourcentage){
        if (isPourcentageEncode()){
            return false;
        }
        if (pourcentage < 0.0f || pourcentage > 100.0f){
            return false;
        }
        this.pourcentage = pourcentage;
        return true;
    }
}
