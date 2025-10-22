// public class MyForEach {
// public static void main(String[] args) {
// Exemple1.afficherVoitures();
// }

// class Exemple1 {
// static void afficherVoitures() {

// String[] cars = { "Volvo", "Toyota", "Tesla", "BYD" };
// for (String car : cars) {
// System.out.println("La voiture est : " + car);
// }
// }
// }
// }

// public class MyForEach {
//     public static void main(String[] args) {
//         // Création d'un objet de type Exemple1
//         Exemple1 exemple = new Exemple1();
//         exemple.afficherVoitures();
//     }
// }

// class Exemple1 {
//     void afficherVoitures() {
//         String[] cars = { "Volvo", "VW", "BMW", "Audi", "Mercedes" };
//         for (String car : cars) {
//             System.out.println("La voiture est : " + car);
//         }
//     }
// }

public class ImportantMyForEach {
    public static void main(String[] args) {
        Exemple ex = new Exemple();
        ex.run();
    }
}

class Exemple {
    void run() {
        String[] cars = { "A", "B", "C", "D", "E" };
        for (String car : cars) {
            System.out.println("Voiture est " + car);
        }
    }
}