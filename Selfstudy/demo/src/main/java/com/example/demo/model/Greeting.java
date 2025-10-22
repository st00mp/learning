package com.example.demo.model;

// record : pratique pour les objets de données immuables sans logique métier
public record Greeting(long id, String name, boolean status){}

//public class Greeting {
//        private long id;
//        private String name;
//        private boolean status;
//
//        // Constructeur
//        public Greeting(long id, String name, boolean status){
//            this.id = id;
//            this.name = name;
//            this.status = status;
//        }
//
//        // Getters
//        public long getId(){ return id; }
//        public String getName(){ return name; }
//        public boolean getStatus(){ return status; }
//}
