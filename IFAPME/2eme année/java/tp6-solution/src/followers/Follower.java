package followers;

import interfaces.Displayable;

public class Follower implements Displayable {
    private String name;
    private int age;

    public Follower(String name, int age){
        this.name = name;
        this.age = age;
    }

    public String getName(){
        return this.name;
    }

    public int getAge(){
        return age;
    }

    public void setName(String name){
        this.name = name;
    }

    public void setAge(int age){
            this.age = age;
    }

    public String showInfos(){
        return "Name: " + getName() + ", age: " + getAge();
    }
}
