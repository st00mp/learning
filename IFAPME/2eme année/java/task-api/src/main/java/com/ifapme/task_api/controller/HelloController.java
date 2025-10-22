package com.ifapme.task_api.controller;

import com.ifapme.task_api.model.WelcomeMessage;
import com.ifapme.task_api.service.HelloService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class HelloController {

    private final HelloService helloService;

    public HelloController(HelloService helloService){
        this.helloService = helloService;
    }

    @GetMapping("/sayHello")
    public WelcomeMessage getMessage(@RequestParam String name){
        return new WelcomeMessage(helloService.sayHello(name));
    }
}
