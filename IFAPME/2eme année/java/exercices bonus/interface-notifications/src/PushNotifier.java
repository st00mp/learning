import interfaces.Notifier;

public class PushNotifier implements Notifier {

    @Override
    public void sendNotification(String message){
        System.out.println("Push notification sent: " + message);
    }
}
