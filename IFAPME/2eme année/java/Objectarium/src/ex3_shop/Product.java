package ex3_shop;

public class Product {
    private final String name;
    private final float price;

    public Product (String name, float price){
        this.name = name;
        this.price = price;
    }

    public String getName(){
        return this.name;
    }

    public float getPrice(){
        return this.price;
    }

    @Override
    public String toString() {
        return name + ": " + price + "€";
    }
}
