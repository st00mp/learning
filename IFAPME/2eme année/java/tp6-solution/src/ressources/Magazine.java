package ressources;

public class Magazine extends Ressource{
    String periodicity;

    public Magazine(String title, String author){
        super(title, author);
    }

    public String getPeriodicity(){
        return this.periodicity;
    }

    public void setPeriodicity(String periodicity){
        this.periodicity = periodicity;
    }

    @Override
    public String showInfos(){
        return super.showInfos() + ", periodicity: " + getPeriodicity();
    }

}
