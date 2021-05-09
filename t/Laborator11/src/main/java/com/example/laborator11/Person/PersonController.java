package com.example.laborator11.Person;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping(path = "test/persons")
public class PersonController {

    private final PersonService personService;

    @Autowired
    public PersonController(PersonService newPersonService){
        this.personService = newPersonService;
    }
    @GetMapping
    public List<Person> getAllPersons(){
        return personService.showPersons();
    }
    @PostMapping
    public
}
