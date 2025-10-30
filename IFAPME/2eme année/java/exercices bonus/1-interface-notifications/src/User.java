import interfaces.Notifier;

public class User {
    private String name;
    private Notifier notifier;

    public User (String name, Notifier notifier){
        this.name = name;
        this.notifier = notifier;
    }

    public void notify(String message){
        System.out.println("To " + name + ":");
        notifier.sendNotification(message);
    }

}
