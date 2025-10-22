package com.example.tp2_solutions;

public class ThreeMinutes {
    public void start() {
        for (int sec = 0; sec <= 180; sec++) {
            if (sec < 60) {
                System.out.println("00 minutes et " + sec + " secondes");
            } else if (sec < 120) {
                System.out.println("01 minutes et " + (sec - 60) + " secondes");
            } else if (sec < 180) {
                System.out.println("02 minutes et " + (sec - 120) + " secondes");
            } else {
                System.out.println("03 minutes et 0 secondes");
            }
        }
    }
}
