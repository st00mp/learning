//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {

        User u1 = new User("Vincent", new SmsNotifier());
        u1.notify("Hello from sms");

        User u2 = new User("Isabelle", new EmailNotifier());
        u2.notify("Hello from email");
    }
}