package com.example.tp2_solutions;

public class DrawASquare {
    private int size;


    public DrawASquare(int size){
        this.size = size;
    }

    public void start(){
        for (int y = 1; y <= size; y++) {
            for (int x = 1; x <= size; x++) {
                if ( y == 1 || y == size || x == 1 || x == size ){
                    System.out.print("*  ");
                } else {
                    System.out.print("   ");
                }
            }
            System.out.println();
        }
    }
}

