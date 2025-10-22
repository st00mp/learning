public class MyRecursion {
    public static void main(String[] args){

        // Somme d'entiers jusqu'à 0
        int result = SumUpTo.runSumUpTo(9);
        System.out.println("La somme des chiffres est de : " + result);

        // Somme d'entiers dans une fourchette
        int result2 = SumRange.runSumRange(15, 20);
            System.out.println(result2);
        String detail2 = SumRange.runSumRangeDetail(15, 20);
            System.out.println(detail2 + " = " + result2);

        // Compte à rebours
        String result3 = CountDown.runCountDown(10);
        System.out.println(result3);

        // Factorielle
        int result4 = Factorial.runFactorial(10);
            System.out.println("Résultat de la factorielle : " + result4);
    }
}

    class SumUpTo {
        static int runSumUpTo(int a){
            if (a > 0) {
                return a + runSumUpTo(a - 1);
            } else {
                return 0;
            }
        }
    }

    class SumRange {
        static int runSumRange(int start, int end) {
            if (end < start) return 0;
            return end + runSumRange(start, end - 1);
        }

        static String runSumRangeDetail(int start, int end) {
            if (end < start) return "";
            else if (end == start) return String.valueOf(end);
            return end + " + " + runSumRangeDetail(start, end - 1);
        }
    }

    class CountDown {
        static String runCountDown(int n){
            if (n <= 0) return "0";
            return n + ", " + runCountDown(n - 1);
        }
    }

    class Factorial {
        static int runFactorial(int n){
            if (n < 0) throw new IllegalArgumentException("Factorielle non définie pour n < 0");
            else if (n <= 1) return 1;
            return n * runFactorial(n -1);
        }
    }