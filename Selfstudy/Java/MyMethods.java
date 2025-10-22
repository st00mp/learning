public class MyMethods {
    public static void main(String[] args){
        Calculator ex1 = new Calculator();

        int intResult = ex1.addition(7, 3);
            System.out.println("Int result: " + intResult);
        float floatResult = ex1.addition(7f, 3f);
            System.out.println("Float result: " + floatResult);
        double doubleResult = ex1.addition(7d, 3d);
            System.out.println("Double result: " + doubleResult);

    }
}

class Calculator {
    int addition(int a, int b) {
        return a + b;
    }
    float addition(float a, float b) {
        return a + b;
    }
    double addition(double a, double b){
        return a + b;
    }
}