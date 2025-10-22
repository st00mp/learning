package com.example.demo.controller;

import com.example.demo.model.Greeting;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;
import java.util.List;


@RestController
public class GreetingController {

    @GetMapping("/greetings")
    public List<Greeting> greetings(){
        return List.of(
                new Greeting(1L, "Vincent", true),
                new Greeting(2L, "Isabelle", false),
                new Greeting(3L, "Boubou", true)
        );
    }
}

