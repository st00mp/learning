import interfaces.Notifier;

public class EmailNotifier implements Notifier {

    @Override
    public void sendNotification(String message){
        System.out.println("Email sent: " + message);
    }
}
