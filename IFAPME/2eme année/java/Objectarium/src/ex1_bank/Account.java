package ex1_bank;

public class Account {
    private String holder;
    private float balance;

    public Account(String holder, float balance) {
        this.holder = holder;
        this.balance = balance;
    }

    public String getHolder() {
        return holder;
    }

    public float getBalance() {
        return balance;
    }

    public void deposit(float amount) {
            this.balance += amount;
    }

    public boolean withdraw(float amount) {
        if (amount <= this.balance) {
            this.balance -= amount;
            return true;
        }
        return false;
    }
}
