public class ParamsAndArgs {
    public static void main(String[] args){
        // --- Prénom et ages
        ExParamsAndArgs ex1 = new ExParamsAndArgs();
        ex1.run("Vincent", 35);
        ex1.run("Julie", 39);
        ex1.run("Véronique", 65);
        ex1.run("Francis", 68);

        // --- Mini-calculatrice
        MiniCalculette ex2 = new MiniCalculette();

        // Bonne pratique, on retourne le calcul sur les 2 variables et on execute depuis la méthode main
        int result = ex2.addition(2,8);
        // Best practice, préférer double à float en contexte pro
        double result2 = ex2.addition(2.0,8.0);
        // float result3 = ex2.addition(2f,8f);
        System.out.println("Résultat : " + result);
        System.out.println("Résultat double : " + result2);
        // System.out.println("Résultat float : " + result3);


        ex2.soustraction(2,8);
        ex2.division(2,0);
        ex2.multiplication(2,8);

        // Test majeur
        IsMajor ex3 = new IsMajor();
        String message = ex3.test(17);
        System.out.println(message);



    }
}

class ExParamsAndArgs {
    void run(String fname, int age){
        System.out.println(fname + " Corvers : " + age + " ans");
    }
}

class MiniCalculette {
    int addition(int a1, int a2){
        return a1 + a2;

    }
    double addition(double a1, double a2){
        return a1 + a2;

    }
    float addition(float a1, float a2){
        return a1 + a2;

    }
    void soustraction(int s1, int s2){
        int sub = s1 - s2;
        System.out.println(s1 + "-" + s2 + "=" + sub);
    }
    void division(int d1, int d2){
        if (d2 == 0){
            System.out.println("Erreur: division par 0 est impossible");
        } else {
            double div = (double) d1 / d2;
            System.out.println(d1 + "/" + d2 + "=" + div);
        }
    }
    void multiplication(int m1, int m2){
        int mult = m1 * m2;
        System.out.println(m1 + "*" + m2 + "=" + mult);
    }
}

class IsMajor {
    String test(int age){
        if (age >= 18){
            return "Tranquillou bilou il est majeur, laisse le se murger !";
        } else {
            return "Hep hep toi là bas jeune délinquant, tu es trop jeune pour te détruire la santé!";
        }
    }
}