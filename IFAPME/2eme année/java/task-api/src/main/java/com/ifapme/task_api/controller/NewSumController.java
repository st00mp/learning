package com.ifapme.task_api.controller;

import com.ifapme.task_api.model.NewSumResult;
import com.ifapme.task_api.service.NewSumService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class NewSumController {
    private final NewSumService service;

    public NewSumController(NewSumService service){
        this.service = service;
    }

    @GetMapping("/addition")
    public NewSumResult sum(@RequestParam int a, @RequestParam int b){
        int result = service.sum(a,b);
            return new NewSumResult(a, b, result);
    }
}

