package followers;

public class AdultFollower extends Follower {
    private String subscription;

    public AdultFollower (String name, int age){
        super(name, age);
    }

    public String getSubscription(){
        return this.subscription;
    }

    public void setSubscription(String subscription){
        this.subscription = subscription;
    }

    @Override
    public String showInfos(){
        return super.showInfos() + ", subscription: " + getSubscription();
    }



}
