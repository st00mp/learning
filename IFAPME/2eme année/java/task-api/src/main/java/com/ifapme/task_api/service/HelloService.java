package com.ifapme.task_api.service;

import org.springframework.stereotype.Service;

@Service
public class HelloService {
    public String sayHello(String name){
        return "Hello " + name + " , bienvenue dans ce programme !";
    }
}
