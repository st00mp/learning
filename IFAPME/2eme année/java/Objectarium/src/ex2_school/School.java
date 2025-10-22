package ex2_school;

import java.util.ArrayList;
import java.util.List;

public class School {

    private String name;
    private List<Student> students;
    private List<Float> averages;

    public School(String name) {
        this.name = name;
        this.students = new ArrayList<>();
        this.averages = new ArrayList<>();
    }

    public void addStudent(Student student) {
        this.students.add(student);
    }

    public void displayAverages() {
        if (!students.isEmpty()) {
            for (Student student : students) {
                System.out.println(student.getName() + ": " + student.calculateAverage() + "/20");
            }
        } else {
            System.out.println("No students were registered, please use 'addStudent()' first");
        }
    }

    public float calculateSchoolAverage() {
        if (students.isEmpty()) {
            System.out.println("No students were registered.");
            return 0f;
        }

        float sum = 0f;
        for (Student student : students) {
            sum += student.calculateAverage();
        }

        return sum / students.size();
    }

}
