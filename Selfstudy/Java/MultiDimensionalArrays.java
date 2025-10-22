public class MultiDimensionalArrays {
    public static void main(String[] args) {
        ExampleMDA mda = new ExampleMDA();
        mda.run();
    }
}

class ExampleMDA {
    void run() {
        // Accessing value in array
        int[][] multiArray = {{1,2,3}, {4,5,6}};
        System.out.println(multiArray[1][2]);
        // Change value in array
        multiArray[0][0] = 999;
        System.out.println(multiArray[0][0]);
        // Loop through multidimensional array
        for (int i = 0; i < multiArray.length; i++) {
            for (int j = 0; j < multiArray[i].length; j++) {
                System.out.println(multiArray[i][j]);
            }
        }
        // Alternative with for-each loops
        // On loop sur 2 array donc on init int[]
        for (int[] row : multiArray) {
            // Dans chacun de ces tableaux on va récup les valeurs
            for (int value : row) {
                System.out.println(value);
            }
        }
    }
}
