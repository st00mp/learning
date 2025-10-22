package ex1_bank;

public class Bank {
    private String name;

    // constructor
    public Bank(String name){
        this.name = name;
    }

    // getter
    public String getName(){
        return name;
    }

    public void transfer(Account source, Account destination, float amount){
        if (source.withdraw(amount)) {
            destination.deposit(amount);
            System.out.println("Transfer of " + amount + "€ from " + source.getHolder() + " to " + destination.getHolder() + " completed.");
        } else {
            System.out.println("Transfer failed: insufficient funds in " + source.getHolder() + " 's account.");
        }

    }
}
