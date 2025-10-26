package ressources;

import interfaces.Displayable;

public class Ressource implements Displayable {
    private String title;
    private String author;

    public Ressource(String title, String author){
        this.title = title;
        this.author = author;
    }

    public String getTitle(){
        return this.title;
    }

    public String getAuthor(){
        return this.author;
    }

    public String showInfos(){
        return this.title + " has been written by " + this.author;
    }

    public String showInfos(boolean details){
        if(!details){
            return "Details deactivated";
        } else {
            return showInfos();
        }
    }

}
