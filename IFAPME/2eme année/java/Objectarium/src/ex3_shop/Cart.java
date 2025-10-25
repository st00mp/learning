package ex3_shop;

import java.util.List;

public class Cart {
    private final List<Product> products;

    public Cart(List<Product> products) {
        this.products = products;
    }

    public void addProduct(Product product) {
        products.add(product);
    }

    public void removeProduct(String name) {
        for (int i = 0; i < products.size(); i++) {
            Product product = products.get(i);
            if (product.getName().equals(name)) { // On doit utiliser équals pour comparer un champ d'un objet avec un string
                products.remove(product);
                System.out.println(name + " was removed");
                return; // <-- ici, on QUITTE la méthode (comme un break mais pour sortir de toute la méthode direct)
            }
        }
        System.out.println("Product named " + name + " was not found");
    }

    public float calculateTotal() {
        float sum = 0;
        for (Product product : products) {
            sum += product.getPrice();
        }
        return sum;
    }

    public List<Product> getProducts() {
        return this.products;
    }

    @Override
    public String toString() {
        String result = "\n=== Order summary ===\n";

        for (Product product : products) {
            result += product + "\n";  // <--- utilise Product.toString() !
        }

        result += "Total: " + calculateTotal() + "€";
        return result;
    }
}
