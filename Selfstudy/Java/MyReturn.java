public class MyReturn {
    public static void main(String[] args){
        CasIfElse ex1 = new CasIfElse();
        String message = ex1.testAge(11);
        System.out.println(message);
    }
}

class CasIfElse {
    String testAge(int age){
        if (age < 18) {
            return "Cet individu est mineur";
        } else if (age >= 18 && age < 25) {
            return "Cet individu est un jeune adulte";
        } else {
            return "Vieux chnok";
        }
    }
}
