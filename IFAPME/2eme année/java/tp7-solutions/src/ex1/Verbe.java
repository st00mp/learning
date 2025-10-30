package ex1;

import java.util.Scanner;

public class Verbe {
    private StringBuffer leVerbe;

    public Verbe() {}

    public void askingVerb() {
        Scanner sc1 = new Scanner(System.in);
        String lastTwoLetters;
        StringBuffer askedVerb = new StringBuffer();

        do {

            System.out.println("\nPlease enter a verbe, finishing by 'ER':");
            askedVerb = new StringBuffer(sc1.next());
            lastTwoLetters = askedVerb.substring((askedVerb.length()) - 2);

        } while (!lastTwoLetters.equals("ER") && !askedVerb.equals("EXIT"));
        if (!askedVerb.equals("EXIT")){
            this.leVerbe = askedVerb;
            System.out.println("Thank you, your verb has been saved");
        } else {
            System.out.println("Closing the script ...");
        }
    }

    public StringBuffer getLeVerbe(){
        return leVerbe;
    }


}