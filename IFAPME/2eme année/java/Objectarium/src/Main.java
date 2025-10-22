import ex1_bank.Account;
import ex1_bank.Bank;
import ex2_school.School;
import ex2_school.Student;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        // ex1
//        {Account a1 = new Account("Vincent", 5000f);
//        Account a2 = new Account("Isabelle", 22000f);
//
//        Bank b1 = new Bank("Belfius");
//
//        b1.transfer(a1, a2, 1000f);
//        b1.transfer(a1, a2, 6000f);
//
//        System.out.println("Final balances:");
//        System.out.println(a1.getBalance());
//        System.out.println(a2.getBalance());}

        //ex2

        School s1 = new School("IFAPME");

        List<Float> gradesVincent = new ArrayList<>(Arrays.asList(17f, 16f, 19f, 20f));
        List<Float> gradesIsabelle = new ArrayList<>(Arrays.asList(13f, 18f, 19f, 16f));

        Student st1 = new Student("Vincent", gradesVincent);
        Student st2 = new Student("Isabelle", gradesIsabelle);

        st1.addGrade(20f);
        st2.addGrade(10f);

        // System.out.println("Grades of " + st1.getName() + ": " + st1.getGrades());
        // System.out.println("Grades of " + st2.getName() + ": " + st2.getGrades());

        // Utilisation de Override toString
        System.out.println(st1);
        System.out.println(st2);

//        st1.calculateAverage();
//        st2.calculateAverage();

        s1.addStudent(st1);
        s1.addStudent(st2);
        s1.displayAverages();

        System.out.println("The average grades of the school is " + s1.calculateSchoolAverage() + "/20");

    }
}