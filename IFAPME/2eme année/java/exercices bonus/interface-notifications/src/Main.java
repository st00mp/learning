//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
public class Main {
    public static void main(String[] args) {
        User vincent = new User("Vincent", new EmailNotifier());
        User isabelle = new User("Isabelle", new PushNotifier());
        User tom = new User("Tom", new SmsNotifier());

        NotificationService notificationService = new NotificationService();
        notificationService.addUser(vincent);
        notificationService.addUser(isabelle);
        notificationService.addUser(tom);

        notificationService.notifyAll("Alerteeeeee généraleeee");
    }
}