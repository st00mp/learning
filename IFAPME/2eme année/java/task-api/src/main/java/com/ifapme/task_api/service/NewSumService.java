package com.ifapme.task_api.service;

import org.springframework.stereotype.Service;

@Service
public class NewSumService {
    public int sum(int a, int b){
        return a + b;
    }
}
