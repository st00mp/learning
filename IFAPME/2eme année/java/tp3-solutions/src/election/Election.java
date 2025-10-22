package election;

public class Election {
    private float a, b, c, d;

    public void initialise(float a, float b, float c, float d) {
        this.a = a;
        this.b = b;
        this.c = c;
        this.d = d;
    }

    public String resultatCandidat() {
        if (a > 50f) {
            return "ELU";
        } else if (a >= 12.5f) {
            return "BALLOTAGE";
        } else {
            return "BATTU";
        }
    }

    public void afficherTour2() {
        // 1) s’il y a un élu au 1er tour → pas de 2e tour
        if (a > 50f || b > 50f || c > 50f || d > 50f) {
            System.out.println("PAS DE DEUXIEME TOUR");
            return;
        }
        // 2) sinon, compter les candidats >= 12.5 (seuil inclus)
        int nbT2 = 0;
        if (a >= 12.5f) nbT2++;
        if (b >= 12.5f) nbT2++;
        if (c >= 12.5f) nbT2++;
        if (d >= 12.5f) nbT2++;


        if (nbT2 == 0) {
            System.out.println("PAS DE DEUXIEME TOUR");
        } else {
            System.out.println(nbT2 + " CANDIDATS AU 2EME TOUR");
        }
    }
}
