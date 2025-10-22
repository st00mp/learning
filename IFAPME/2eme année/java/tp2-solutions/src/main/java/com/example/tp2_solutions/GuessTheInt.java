package com.example.tp2_solutions;

import java.util.Random;
import java.util.Scanner;

public class GuessTheInt {
    public void start() {
        Random random = new Random();
        int mysteryInt = random.nextInt(100) + 1;

        System.out.println("Devinez le nombre mystère entre 1 et 100");
        Scanner sc = new Scanner(System.in);

        int essais = 1;
        int proposition = 1;

        do {
            System.out.println("Essai #" + essais + ":");
            proposition = sc.nextInt();
            essais++;

            if (proposition < mysteryInt) {
                System.out.println("C'est plus !");
            } else if (proposition > mysteryInt) {
                System.out.println("C'est moins !");
            } else {
                System.out.println("Bravo ! C'était " + mysteryInt);
                break;
            }

        } while (essais <= 8);

        if (proposition != mysteryInt) {
            System.out.println("Perdu, le nombre mystère était " + mysteryInt);
        }
        sc.close();
    }
}

