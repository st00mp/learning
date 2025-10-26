package followers;

public class ChildFollower extends Follower {
    private String category;

    public ChildFollower(String name, int age){
        super(name, age);
    }
    public String getCategory(){
        return this.category;
    }

    public void setCategory(String category){
        this.category = category;
    }

    @Override
    public String showInfos(){
        return super.showInfos() + ", category: " + getCategory();
    }

}
