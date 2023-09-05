# OOP PHP Phone Inventory

1. Create a Class for Mobile Phones (20%): Design a class that represents a mobile phone. The class should have attributes like name, brand, price, and stock quantity.

   - In `Phone.php` there are Phone class that have name, brand, price, and stock attribute. along with the getter setter method

2. Main Operations (40%): Create a main class that handles the inventory of mobile phones. This class should have methods for adding, deleting, and updating phone data.

   - In `Inventaris.php` there are Inventaris class that have add, delete, and update list phone that in inventory

3. Apply Basic OOP Concepts (30%): Use basic OOP concepts like Abstraction, Encapsulation, and Inheritance in your design.

   - Abstraction : in `Phone` class, use abstract class.
   - Encapsulation : in all classes, contains variable or method that encapsulate.
   - Inheritance : `Brand` Class is inherit from `Phone` class that have basic atributes and method of Phone. but can have different brand

4. Implement Polymorphism (10%): Apply the concept of Polymorphism in your classes.
   - In Inventaris class, adding phone declared as `Phone` object, so all brancds that inherit from `Phone` can be added.
