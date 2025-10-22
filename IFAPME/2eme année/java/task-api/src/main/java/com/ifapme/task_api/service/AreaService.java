package com.ifapme.task_api.service;

import org.springframework.stereotype.Service;

@Service
public class AreaService {
    public double calculateSurface(double length, double width){
        return length * width;
    }
}
