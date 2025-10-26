import interfaces.Notifier;

public class SmsNotifier implements Notifier {

    @Override
    public void sendNotification(String message){
        System.out.println("Sms sent: " + message);
    }
}
