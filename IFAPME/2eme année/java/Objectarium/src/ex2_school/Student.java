package ex2_school;

import java.util.List;

public class Student {
    private String name;
    private List<Float> grades;


    public Student(String name, List<Float> grades) {
        this.name = name;
        this.grades = grades;
    }

    public void addGrade(float grade){
        this.grades.add(grade);
    }

    public float calculateAverage(){
        float sum = 0;

        if (!this.grades.isEmpty()){
            for (float grade : grades) {
                sum += grade;
            }
            return sum/(grades.size());
        } else {
            return 0f;
        }
    }

    public String getName(){
        return name;
    }

    public List<Float> getGrades(){
        return grades;
    }

    @Override
    public String toString(){
        return this.name + " grades: " + this.getGrades() + ", average; " + this.calculateAverage() + "/20";
    }
}
