package com.ifapme.task_api.controller;

import com.ifapme.task_api.model.UserRequest;
import com.ifapme.task_api.model.UserResponse;
import com.ifapme.task_api.service.UserService;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UserController {

    private final UserService userService;

    public UserController(UserService userService){
        this.userService = userService;
    }

    @PostMapping("/users")
        public UserResponse createUser(@RequestBody UserRequest request) {
            return userService.createUser(request);
    }


}
