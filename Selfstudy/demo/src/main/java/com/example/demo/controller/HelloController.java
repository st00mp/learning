package com.example.demo.controller;

import com.example.demo.model.Hello;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class HelloController {
    @GetMapping("/hello")
    public List<Hello> hello(){
        return List.of(
                new Hello(1, "Hello World"),
                new Hello(2, "article de presse"),
                new Hello(3, "arbre verdoyant")
        );
    }
}


