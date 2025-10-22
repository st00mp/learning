package com.ifapme.task_api;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.http.converter.json.GsonBuilderUtils;

import javax.crypto.spec.PSource;
import java.util.Random;
import java.util.Scanner;

import static java.lang.Math.max;
import static java.lang.Math.random;

@SpringBootApplication
public class TaskApiApplication {

	public static void main(String[] args) {
		SpringApplication.run(TaskApiApplication.class, args);
//        SurfaceTriangle ex1 = new SurfaceTriangle();
//        ex1.run();

//        SecondsToMinutes ex2 = new SecondsToMinutes();
//        ex2.run();

//        EvenOrOdd ex3 = new EvenOrOdd();
//        ex3.run();

//        AverageExam ex4 = new AverageExam();
//        ex4.run();

//        Circle ex5 = new Circle();
//        ex5.run();

//        BiggestInt ex6 = new BiggestInt();
//        ex6.run();

//        WhatTimeIsIt ex8 = new WhatTimeIsIt();
//        ex8.run();

//        WhoIsPresident ex9 = new WhoIsPresident();
//        ex9.run();

//        WhichCat ex10 = new WhichCat();
//        ex10.run();

//        Bulletin b = new Bulletin();
//
//        System.out.println("Moyenne /20 = " + b.moyenneSur20(12, 14, 16));
//        System.out.println("Pondération /10 = " + b.ponderation10(12, 14, 16));
//        System.out.println("Pondération /30 = " + b.ponderation30(12, 14, 16));

//        Calcul c1 = new Calcul(10, 15);
//        int somme= c1.somme();
//        int produit = c1.produit();
//        c1.affiche(somme);
//        c1.affiche(produit);

//        TableDeMutliplication t1 = new TableDeMutliplication(7);
//        t1.afficherTableDeMultiplication();

//        CEstCarre c1 = new CEstCarre(90);
//        c1.contruireCarre();

// System.out.println(Math.random());


// Créer un objet de classe pour ce qui est ci dessous
//        Random t1 = new Random();
//        int result = t1.nextInt(1, 10);
//        System.out.println(result);



    }

}

//class SurfaceTriangle {
//
//    public void run(){
//
//    Scanner sc1 = new Scanner(System.in);
//
//    System.out.println("Entrez la hauteur en cm : ");
//    double height = sc1.nextDouble();
//
//    System.out.println("Entrez la largeur en cm : ");
//    double width = sc1.nextDouble();
//
//    double surface = (height * width) / 2;
//    System.out.println("La surface de ce triangle est " + surface + " cm2");
//
//      sc1.close();
//    }
//
//}


//class SecondsToMinutes {
//    public void run(){
//        Scanner sc2 = new Scanner(System.in);
//
//        System.out.println("Entrez un nombre de secondes : ");
//        long sec = sc2.nextLong();
//        long minutes = sec / 60;
//        long secondes = sec % 60;
//        System.out.println("L'équivalent de " + sec + " secondes en minutes est de " + minutes + " minutes et " + secondes + " secondes");
//
//        sc2.close();
//    }
//}

//class EvenOrOdd {
//    public void run(){
//        Scanner sc3 = new Scanner(System.in);
//
//        System.out.println("Entrez un entier positif :");
//        int a = sc3.nextInt();
//
//        if (a%2 == 0){
//            System.out.println("L'entier positif est pair");
//        } else {
//            System.out.println("L'entier positif est impair");
//        }
//        sc3.close();
//    }
//}

//class AverageExam {
//    public void run(){
//        Scanner sc4 = new Scanner(System.in);
//
//        System.out.println("Entrez les points de la première interro (sur 20) : ");
//        float note1 = sc4.nextFloat();
//
//        System.out.println("Entrez les points de la deuxieme interro (sur 20): ");
//        float note2 = sc4.nextFloat();
//
//        System.out.println("Entrez les points de la troisième interro (sur 20): ");
//        float note3 = sc4.nextFloat();
//
//        float average = (note1 + note2 + note3) / 3;
//        System.out.println("La moyenne des points des 3 interros est de " + average + "/20");
//    }
//}

//class Circle {
//    public void run(){
//
//    Scanner sc5 = new Scanner(System.in);
//
//    System.out.println("Entrez la longueur du rayon en cm : ");
//    int radius = sc5.nextInt();
//
//    double surface = Math.pow(radius, 2) * Math.PI;
//    double circonference = 2 * radius * Math.PI;
//
//    System.out.println("Le cercle à une surfcace de " + surface + " cm2 et une circonference de " + circonference + " cm2");
//
//    }

//class BiggestInt {
//    public void run() {
//
//        Scanner sc6 = new Scanner(System.in);
//
//
//        System.out.println("Entrez le premier numéro :");
//        int a = sc6.nextInt();
//
//        System.out.println("Entrez le second numéro : ");
//        int b = sc6.nextInt();
//
//        int max = Math.max(a,b);
//
//        if (a == b) {
//            System.out.println("Les deux entiers sont égaux");
//        } else {
//            System.out.println(max + " est le plus grand des 2 entiers");
//        }
//
//    }
//}

//class WhatTimeIsIt {
//    public void run(){
//        Scanner sc8 = new Scanner(System.in);
//        System.out.println("Entrez une heure dans le meme format que cet exemple : '12h10'");
//        String inputTime = sc8.nextLine();
//
//        String hoursString = inputTime.substring(0, 2);
//        String minutesString = inputTime.substring(3,5);
//
//        int hoursInt = Integer.parseInt(hoursString);
//        int minutesInt = Integer.parseInt(minutesString);
//
//        if (minutesInt == 59) {
//            hoursInt++;
//            minutesInt = 00;
//
//            if (hoursInt == 24) {
//                hoursInt = 00;
//                minutesInt = 00;
//            }
//        } else {
//            minutesInt++;
//        }
//
//        String result = String.format("%02dh%02d", hoursInt, minutesInt);
//        System.out.println("Dans une minute il sera " + result);
//
//
//    }
//}

//class WhoIsPresident {
//    public void run(){
//        Scanner sc9 = new Scanner(System.in);
//
//        System.out.println("Entrez le score de numéro 1");
//        float score1 = sc9.nextFloat();
//
//        System.out.println("Entrez le score de numéro 2");
//        float score2 = sc9.nextFloat();
//
//        System.out.println("Entrez le score de numéro 3");
//        float score3 = sc9.nextFloat();
//
//        System.out.println("Entrez le score de numéro 4");
//        float score4 = sc9.nextFloat();
//
//        if (score1 > 50) {
//            System.out.println("Le candidat 1 est élu");
//        } else if (score1 >= 12) {
//            System.out.println("Le candidat 1 se retrouve en ballotage");
//        } else {
//            System.out.println("Le candidat 1 est battu");
//        }
//    }
//}

//class WhichCat {
//    public void run() {
//        Scanner sc10 = new Scanner(System.in);
//
//        System.out.println("Quel âge à le participant ?");
//        byte age = sc10.nextByte();
//
//        System.out.println("Quel est le sexe du participant ? (1 = homme, 2 = femme)");
//        byte gender = sc10.nextByte();
//
//        if (gender == 1) {
//            if (age <= 15) {
//                System.out.println("Jeune homme");
//            } else {
//                System.out.println("Vétéran");
//            }
//      } else if (gender == 2) {
//        } else {
//            if (age <= 15) {
//                System.out.println("Espoir dame");
//            } else if (age <= 24) {
//                System.out.println("Jeune dame");
//            } else {
//                System.out.println("Ainée");
//            }
//        }
//
//    }
//}

//class Bulletin {
//
//    // calcule la moyenne sur 20
//    public float moyenneSur20(float note1, float note2, float note3) {
//        return (note1 + note2 + note3) / 3;
//    }
//
//    // ramène la moyenne sur 10
//    public float ponderation10(int note1, int note2, int note3) {
//        float moyenne20 = moyenneSur20(note1, note2, note3);
//        return (moyenne20 / 20) * 10;
//    }
//
//    // ramène la moyenne sur 30
//    public float ponderation30(int note1, int note2, int note3) {
//        float moyenne20 = moyenneSur20(note1, note2, note3);
//        return (moyenne20 / 20) * 30;
//    }
//}

//class Calcul {
//    int a, b;
//    public Calcul(int a, int b){
//        this.a = a;
//        this.b = b;
//    }
//    public int somme(){
//        return this.a + this.b;
//    }
//
//    public int produit(){
//        return this.a * this.b;
//    }
//
//    public void affiche(int param){
//        System.out.println("Le résultat est " + param);
//    }
//
//}

//class TableDeMutliplication {
//    int a;
//
//    TableDeMutliplication(int a) {
//        this.a = a;
//    }
//
//    public void afficherTableDeMultiplication() {
//        for (int i = 1; i <= 10; i++) {
//            int produit = i * a;
//            System.out.println(i + " * " + a + " = " + produit);
//        }
//    }
//}

class CEstCarre{
    int n;
    CEstCarre (int n) {
        this.n = n;
    }
    public void contruireCarre(){
        for (int i = 1; i <= n; i++) {       // lignes
            for (int j = 1; j <= n; j++) {   // colonnes
                // Afficher * uniquement sur les bords
                if (i == 1 || i == n || j == 1 || j == n) {
                    System.out.print("*");
                } else {
                    System.out.print(" ");
                }
            }
            System.out.println(); // retour ligne après chaque ligne
        }
    }
}


class FindRandInt {
    int a;

    public FindRandInt(int a){
        this.a = a;
    }

    public void start(){

        Scanner sc20 = new Scanner(System.in);
        System.out.println("Entrez un numéro entre 0 et 100");
        int a = sc20.nextInt();

        Random random = new Random();
        int rand = random.nextInt(20 - 12 + 1) + 12; // entre 12 et 20 inclus

        System.out.println(rand);

        System.out.println("Votre nombre : " + a);
        System.out.println("Nombre aléatoire : " + rand);

        sc20.close();

    }
}

