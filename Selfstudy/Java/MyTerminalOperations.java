import java.util.Scanner;
import java.util.List;
import java.util.ArrayList;

/**
 * The {@code MyTerminalOperations} class demonstrates
 * how to combine {@link Scanner}, {@link List},
 * and {@link java.util.stream.Stream Streams} in Java.
 * <p>
 * The program reads 4 integers from the console,
 * stores them in an {@code ArrayList}, and then
 * prints them using a Stream.
 */

public class MyTerminalOperations {
    public static void main(String[] args){
        /**
         * Entry point of the program
         * <p>
         * Steps :
         * <ol>
         *     <li>Read 4 integers from the console using {@link Scanner}.</li>
         *     <li>Store these integers in an {@link ArrayList}. </li>
         *     <li>Print the values using {@code ArrayList}</li>
         * </ol>
         *
         * @param args command-line arguments (not used here)
         */

        // Create a scanner to read the user input
        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();
        int b = sc.nextInt();
        int c = sc.nextInt();
        int d = sc.nextInt();

        // Initializing an ArrayList with the values
        List<Integer> nums = new ArrayList<>(List.of(a, b, c, d ));

        // Print the values using a Stream
        nums.stream()
                // This is a terminal operation
                .forEach(System.out::println);

        sc.close();
    }
}
