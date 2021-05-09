package com.example.laborator11.Person;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class PersonService{

    private final PersonRepository personRepository;

    @Autowired
    public PersonService(PersonRepository personRepository) {
        this.personRepository = personRepository;
    }

    public List<Person> showPersons(){
        return personRepository.findAll();
    }
    public Person insertPerson(Person person){
        return personRepository.save(person);
    }
}
