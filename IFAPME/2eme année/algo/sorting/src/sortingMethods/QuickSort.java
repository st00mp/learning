package sortingMethods;

import java.util.ArrayList;
import java.util.List;

public class QuickSort {
    int pivot;
    List<Integer> numbers = new ArrayList<>();
    List<Integer> left = new ArrayList<>();
    List<Integer> right = new ArrayList<>();


    public QuickSort(int pivot, List<Integer> numbers, List<Integer> left, List<Integer> right){
        this.pivot = pivot;
        this.numbers = numbers;
        this.left = left;
        this.right = right;
    }

    public List<Integer> run(){
        pivot = (int) numbers.get(numbers.size()/2);

        if (numbers.size() > 1){
            for (int n : numbers){
                if (n < pivot) {
                    left.add(n);
                } else if (n > pivot) {
                    right.add(n);
                }
            }
            return ;

    }
}
