package com.ifapme.task_api.service;

import com.ifapme.task_api.model.UserRequest;
import com.ifapme.task_api.model.UserResponse;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.ArrayList;

@Service
public class UserService {
    private final List<UserResponse> users = new ArrayList<>();
    private long nextId = 1;

    public UserResponse createUser(UserRequest request){
        UserResponse user = new UserResponse(nextId++, request.username(), request.email());
        users.add(user);
        return user;
    }
}
