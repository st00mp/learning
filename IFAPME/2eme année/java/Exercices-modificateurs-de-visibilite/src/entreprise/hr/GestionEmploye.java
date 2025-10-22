package entreprise.hr;

import entreprise.Employe;

public class GestionEmploye {

    Employe emp1 = new Employe();

    public void getName() {
        // ✅ 'name' est public
        // donc on peut y accéder directement depuis une autre classe, même d’un autre package.
        System.out.println(emp1.name);
    }

    public void getSalaire() {
        // ⚠️ 'salary' est 'protected' → accessible UNIQUEMENT :
        // - dans les classes du MÊME package (package1)
        // - ou dans une classe ENFANT (qui extends Employe)
        // 👉 Ici, GestionEmploye n’est ni dans le même package, ni une sous-classe → accès interdit.
        // System.out.println(emp1.salary);
    }

    public void getMatricule() {
        // ⚠️ 'matricule' est 'default' (aussi appelé 'package-private') :
        // - accessible uniquement dans le MÊME package (package1)
        // 👉 Ici, GestionEmploye est dans package2 → accès interdit.
        // System.out.println(emp1.matricule);
    }
}
