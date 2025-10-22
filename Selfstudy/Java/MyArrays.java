public class MyArrays {
    public static void main(String[] args) {
        ExBC1 ex1 = new ExBC1();
        ex1.run();
        LoopThroughArray lta = new LoopThroughArray();
        lta.run();
        LTA2 lta2 = new LTA2();
        lta2.run2();
        RealLifeExamples test = new RealLifeExamples();
        test.run();
    }
}

class ExBC1 {
    void run() {
        String[] fruits = {"Apple", "Pear", "Strawberry", "Blackberry"};
        fruits[0] = "Cherry";
        for (String fruit : fruits) {
            System.out.println(fruit);
        }
        int[] num = {1, 2, 3, 4, 5, 6};
        System.out.println(num.length);
    }
}

class LoopThroughArray {
        void run() {
            int[] num = {2, 4, 6, 8, 10, 12};
            for (int i = 0; i < num.length; i++){
                System.out.println(num[i]);
        }
    }
}

class LTA2 {
    void run2() {
        String[] colors = {"red", "blue", "yellow", "brown", "cyan"};
        for (String color : colors) {
            System.out.println(color);
        }
    }
}

class RealLifeExamples {
    void run() {
        int[] ages = {14, 16, 25, 34, 36, 42, 55, 86, 61, 71, 91};
        double avg = 0;
        int sum = 0;
        int min = ages[0];
        // Get the length of the array
        int len = ages.length;
        // Loop through the elements of the array to sum up all
        if (ages != null && ages.length > 0) {
            for (int age : ages) {
                sum += age;
                if (min > age) {
                    min = age;
                }
            }
        }
        // Calculating the average
        avg = (double) sum / len;

        // Finding min value in array
        System.out.println("the average age is : " + avg);
        System.out.println("the smallest int is : " + min);
        System.out.printf("As float (2 decimals) : %.2f%n", avg);
        System.out.printf("As float (7 decimals) : %.7f%n", avg);

    }
}

