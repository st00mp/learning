import interfaces.Notifier;

public class PushNotifier implements Notifier {

    @Override // “Attention, cette méthode existe déjà dans un parent ou une interface, je veux la redéfinir (pas en créer une nouvelle).”
    public void sendNotification(String message){
        System.out.println("Push notification sent: " + message);
    }
}
