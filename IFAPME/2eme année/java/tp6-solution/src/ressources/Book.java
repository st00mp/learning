package ressources;

public class Book extends Ressource{
    private String genre;

    public Book(String title, String author){
        super(title, author);
    }

    public String getGenre(){
        return this.genre;
    }

    public void setGenre(String genre){
        this.genre = genre;
    }

    @Override
    public String showInfos(){
        return super.showInfos() + ", genre :" + this.getGenre() ;
    }

}
