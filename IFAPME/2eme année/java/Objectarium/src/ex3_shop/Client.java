package ex3_shop;

import java.util.ArrayList;

public class Client {
    private String name;
    private Cart cart;
    private Product product;

    public Client (String name){
        this.name = name;
        this.cart = new Cart(new ArrayList<>()); // <-- création d’un panier vide
    }

    public void addToCart(Product product){
        cart.addProduct(product);
    }

    public void checkOut() {
        System.out.println(cart);
        System.out.println("=====================\n");
    }

    public String getName() {
        return this.name;
    }

    public void removeFromCart(String name){
        cart.removeProduct(name);
    }

    @Override
    public String toString(){
        return "Client: " + this.name + "\n"
                + cart;
    }
}
