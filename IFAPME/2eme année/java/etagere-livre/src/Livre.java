public class Livre {

    private int isbn;
    private String titre;
    private String edition;

    public Livre(int isbn, String titre, String edition){
        this.isbn = isbn;
        this.titre = titre;
        this.edition = edition;
    }

    public int getIsbn() {
        return isbn;
    }

    public String getTitre() {
        return titre;
    }

    public String getEdition() {
        return edition;
    }

    @Override
    public Livre clone(){
        return new Livre(this.isbn, this.titre, this.edition);
    }
}
