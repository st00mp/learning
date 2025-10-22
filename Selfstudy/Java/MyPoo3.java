public class MyPoo3 {
    public static void main(String[] args){
        User u1 = new User(12345L, "MotDePasse");
        u1.PrintInfo();
    }
}

class User {
    long id;
    String email;
    String password;
    boolean newsletter;

    User(long id, String email, String password, boolean newsletter){
        this.id = id;
        this.email = email;
        this.password = password;
        this.newsletter = newsletter;
    }

    User(long id, String password){
        this(id, "example@outlook.com", password, true);
    }

    void PrintInfo(){
        System.out.println(id + email + password + newsletter);
    }
}
