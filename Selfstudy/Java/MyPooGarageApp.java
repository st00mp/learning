public class MyPooGarageApp {
    public static void main(String[] arg){
        // Présentation du garage numéro 1
        Garage g1 = new Garage(123456789, "King of mechanics", "28 Campagne des Courroies", "+32023456262");
        System.out.println(g1.showGarageDetails());

        // Présentation du véhicule muméro 1
        Vehicle v1 = new Vehicle( "Toyota", "Yaris", 2014, "blanc");
        System.out.println(v1.showVehicleDetails());

        Vehicle v2 = new Vehicle( "Mini", "Cooper", 2014, "rouge");
        System.out.println(v2.showVehicleDetails());

        // Nouvelle objet sur base d'une classe héritée de Vehicle
        Moto m1 = new Moto( "Honda", "Cross", 1986, "rouge");
        System.out.println(m1.showVehicleDetails());
        System.out.println(m1.accelerate());
    }
}

class Garage {
    long id;
    String name;
    String address;
    String phone;
    String email;

    // Method overloading to set email on "info@garage.com" by default
    Garage(long id, String name, String address, String phone){
        this(id, name, address, phone, "info@garage.com");
    }

    // Setting up garage constructor
    Garage (long id, String name, String address, String phone, String email) {
        this.id = id;
        this.name = name;
        this.address = address;
        this.phone = phone;
        this.email = email;
    }

    // Method to show details of the vehicle in a sentence
    String showGarageDetails(){
        return "\n\n--- PRESENTATION DU GARAGE ---\n" + name + " est le nom \n" + id + " est l'id \n" + address + " est l'adresse \n" + phone + " est le numéro de tel \n" + email + " est le mail";
    }
}

class Vehicle {
    static long nextId = 1;
    long id;
    String brand;
    String model;
    int year;
    String color;

    // Getter
    String getBrand(){
        return brand;
    }

    public String getModel(){
        return model;
    }



    // Setter
    public void setBrand(String newBrand){
        this.brand = newBrand;
    }

    public void setModel(String newModel){
        this.model = newModel;
    }

    Vehicle(String brand, String model, int year, String color){
        this.id = nextId++;
        this.brand = brand;
        this.model = model;
        this.year = year;
        this.color = color;
    }

    String showVehicleDetails(){
        id += 1;
        return "\n\n--- VEHICULE ---\nID: " + id +
                "\nMarque: " + brand +
                "\nModèle: " + model +
                "\nAnnée: " + year +
                "\nCouleur: " + color;    }

}

class Moto extends Vehicle {
    String type;

    Moto(String brand, String model, int year, String color){
        super(brand, model, year, color);
    }

    String accelerate(){
        return "la " + brand + " " + model + " accèlere : VRAAAAAAOUMMMMMMMMMMMMMMMMMMMM";
    }

}
