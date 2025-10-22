package com.example.tp2_solutions;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class Tp2SolutionsApplication {

	public static void main(String[] args) {
        SpringApplication.run(Tp2SolutionsApplication.class, args);

//        GuessTheInt newGame = new GuessTheInt();
//        newGame.start();

//        ThreeMinutes ex3 = new ThreeMinutes();
//        ex3.start();

        DrawASquare ex2 = new DrawASquare(9);
        ex2.start();
	}
}
