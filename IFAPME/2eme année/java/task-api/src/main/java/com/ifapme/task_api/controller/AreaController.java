package com.ifapme.task_api.controller;

import com.ifapme.task_api.model.AreaResult;
import com.ifapme.task_api.service.AreaService;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class AreaController {
    private final AreaService areaService;

    public AreaController(AreaService areaService){
        this.areaService = areaService;
    }

    @GetMapping("/area")
    public AreaResult getArea(@RequestParam double length, @RequestParam double width){
        double area = areaService.calculateSurface(length, width);
        return new AreaResult(length, width, area);
    }

}
