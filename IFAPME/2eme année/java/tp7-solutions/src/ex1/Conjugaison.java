package ex1;

public class Conjugaison {
    static String[] subjet = {"je", "tu", "il", "nous", "vous", "ils"};
    static String[] terminaison = {"e", "es", "e", "ons", "ez", "ent"};

    private Verbe verbe;

    public Conjugaison(Verbe verbe) {
        this.verbe = verbe;
    }

    public void showPresent() {
        StringBuffer radical = new StringBuffer(verbe.getLeVerbe().substring(0, verbe.getLeVerbe().length() - 2));

        for (byte i = 0; i < subjet.length; i++) {
            System.out.println(
                    subjet[i] + " " + radical + terminaison[i]
            );
        }
    }
}