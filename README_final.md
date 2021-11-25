`#php` `#oop` `#master-in-software-engineering`

# Assembler School: OOP Basics with PHP <!-- omit in toc -->

In this project you will learn the basics of OOP using mobile devices as a reference. In the _"Project files"_ section you will find a description of the content to be displayed in each file.

## Table of contents

- [Table of contents](#table-of-contents)
- [Concepts](#theory)

### Concepts

1. What is object-oriented programming in general terms ?

Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. OOP focuses on the objects that developers want to manipulate rather than the logic required to manipulate them.

2. What is a class?

Classes are user-defined data types that act as the blueprint for individual objects, attributes and methods. Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

3. What is an object ?

Objects are instances of a class created with specifically defined data. Objects can correspond to real-world objects or an abstract entity. When class is defined initially, the description is the only object that is defined.

4. What is an instance?

An instance is an object that has been created from an existing class. Creating an object from an existing class is called instantiating the object.

5. What is a property?

Property is defined by using one of the keywords public, protected, or private, optionally followed by a type declaration, followed by a normal variable declaration.

6. What is a method?

Methods are functions that are defined inside a class that describe the behaviors of an object. Each method contained in class definitions starts with a reference to an instance object.

7. What is the difference between a function and a method?

In Object Oriented Programming in PHP, methods are functions inside classes. Their declaration and behavior are almost similar to normal functions, except for their special declaration and use inside classes.

8. What is a constructor?

A constructor allows you to initialize an object's properties upon creation of the object. If you create a \_\_construct() function, PHP will automatically call this function when you create an object from a class.

9. What is the difference between a class, an object and an instance?

A class is a blueprint which is used to create objects. An object is an instance of a class - it's a concrete 'thing' that you made using a specific class. So, 'object' and 'instance' are the same thing, but the word 'instance' indicates the relationship of an object to its class.

10. What do we understand about the concept of encapsulation?

This principle states that all important information is contained inside an object and only select information is exposed. The implementation and state of each object are privately held inside a defined class. Other objects do not have access to this class or the authority to make changes. They are only able to call a list of public functions or methods. This characteristic of data hiding provides greater program security and avoids unintended data corruption.

11. What do we understand about the concept of abstraction?

Objects only reveal internal mechanisms that are relevant for the use of other objects, hiding any unnecessary implementation code. The derived class can have its functionality extended. This concept can help developers more easily make additional changes or additions over time.

12. What do we understand about the concept of inheritance?

Classes can reuse code from other classes. Relationships and subclasses between objects can be assigned, enabling developers to reuse common logic while still maintaining a unique hierarchy. This property of OOP forces a more thorough data analysis, reduces development time and ensures a higher level of accuracy.

13. What do we understand about the concept of polymorphism?

Objects are designed to share behaviors and they can take on more than one form. The program will determine which meaning or usage is necessary for each execution of that object from a parent class, reducing the need to duplicate code. A child class is then created, which extends the functionality of the parent class. Polymorphism allows different types of objects to pass through the same interface.

14. What do we understand about the concept of Overload?

Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types. All overloading methods must be defined as public. Function overloading contains same function name and that function preforms different task according to number of arguments.

15. What do we understand about the concept of Override?

In function overriding, both parent and child classes should have same function name with and number of arguments. It is used to replace parent method in child class. The purpose of overriding is to change the behavior of parent class method. The two methods with the same name and same parameter is called overriding.

16. What differences exist between the concept of Overload and Override?

- In overloading, there is a relationship between methods available in the same class whereas in overriding, there a is relationship between a superclass method and subclass method.
- Overloading does not block inheritance from the superclass whereas overriding blocks inheritance from the superclass.
- In overloading, separate methods share the same name whereas in overriding, subclass method replaces the superclass. Overloading must have different method signatures whereas overriding must have same signature.
- Overriding means, giving a different definition of an existing function with same parameters, and overloading means adding a different definition of an existing function with different parameters.

17. What is a static class?

A static class in PHP is a type of class which is instantiated only once in a program. It must contain a static member (variable) or a static member function (method) or both. The variables and methods are accessed without the creation of an object, using the scope resolution operator(::).

18. Look for 3 advantages over object-oriented programming compared to other programming paradigms

- Reusability. Code can be reused through inheritance, meaning a team does not have to write the same code multiple times.
- High abstraction level: focused on the functionalities not in the code
- Rich encapsulation: makes secure and easy to maintain code

19. Look for disadvantages of this paradigm.

- Steep learning curve: may take time to get used to it
- Slower program: OOP code may be more complicated to write and take longer to compile.
- OOP overemphasizes the data component of software development and does not focus enough on computation or algorithms.
