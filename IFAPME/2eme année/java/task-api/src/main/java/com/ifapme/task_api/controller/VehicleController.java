package com.ifapme.task_api.controller;

import com.ifapme.task_api.model.Vehicle;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class VehicleController {

    @GetMapping("/vroom")
    public Vehicle vehicle(){
        return new Vehicle(23, "Opel", "Blue", 3223);

    }

}
