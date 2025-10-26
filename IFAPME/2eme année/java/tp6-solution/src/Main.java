import followers.AdultFollower;
import followers.ChildFollower;
import ressources.Book;
import ressources.Magazine;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {
        Book b1 = new Book("Les fourmis", "Werber");
        Magazine m1 = new Magazine("Picsou", "Walt Disney");

        b1.setGenre("Roman");
        m1.setPeriodicity("monthly");

        System.out.println(b1.showInfos(false));
        System.out.println(b1.showInfos(true));
        System.out.println(m1.showInfos());

        ChildFollower cf1 = new ChildFollower("Vincent", 8);
        AdultFollower af1 = new AdultFollower("Isabelle", 28);

        cf1.setCategory("Comics");
        af1.setSubscription("Yearly");

        System.out.println(cf1.showInfos());
        System.out.println(af1.showInfos());
        

    }
}