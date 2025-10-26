import java.util.ArrayList;
import java.util.List;

public class NotificationService {
    private final List<User> users = new ArrayList<>();

    public void addUser(User user){
        users.add(user);
    }

    public void notifyAll(String message){
        for (User user : users){
            user.notify(message);
        }
    }
}
