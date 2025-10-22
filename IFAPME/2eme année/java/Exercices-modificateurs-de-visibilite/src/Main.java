import ecole.GestionEcole;
import entreprise.hr.GestionEmploye;

//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {
//        GestionEmploye gEmp1 = new GestionEmploye();
//        gEmp1.getName();
//        gEmp1.getMatricule();
//        gEmp1.getSalaire();

        GestionEcole gEco1 = new GestionEcole();
        gEco1.afficherNom();
        gEco1.afficherNote();

    }
}