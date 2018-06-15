<?php 

    class User {
        
    }

    $user = new User();

 ?>


 <?php 
     class User {
         public $name;
         public $age;
         
         public function Describe() {
             return $this->name . " is " . $this->age . " years old";
         }
     }


     $user = new User();
     $user->name = "John Doe";
     $user->age = 42;
     echo $user->Describe();

 ?>


<!-- Constructors and destructors -->

<?php 

    class Animal {
        public $name = "No-name animal";
        
        public function __construct()
        {
            echo "I'm alive!";        
        }
    }

    $animal = new Animal(); 


 ?>

 <?php
 class Animal {
         public $name = "No-name animal";
         
         public function __construct($name)
         {
             $this->name = $name;
         }
     }

     $animal = new Animal("Bob the Dog");
     echo $animal->name;
 ?>


 <!-- Destructors -->
 <?php
     class Animal {
         public $name = "No-name animal";
         
         public function __construct($name)
         {
             echo "I'm alive!";    
             $this->name = $name;
         }
         
         public function __destruct()
         {
             echo "I'm dead now :(";
         }
     }

     $animal = new Animal("Bob");
     echo "Name of the animal: " . $animal->name;
 ?>



<!-- Visibility -->
* Private => members can only be accessed from inside the class itself. 

* Protected => members can only be accessed from inside the class it self and its child classes. 

* Public => members can be accessed from anywhere - outside the class, inside the class it self and from child classes.


<!-- Herencia -->
<?php 
    class Animal {
        public $name;
        
        public function Greet()
        {
            return "Hello, I'm some sort of animal and my name is " . $this->name;
        }
    }

    class Dog extends Animal
    {
        
    }

    $dog = new Dog();
    echo $dog->Greet();


    class Dog extends Animal
    {
        public function Greet()
        {
            return "Hello, I'm a dog and my name is " . $this->name;
        }
    }

    $animal = new Animal();
    echo $animal->Greet();
    $animal = new Dog();
    $animal->name = "Bob";
    echo $animal->Greet();

?>


<?php 

    class Dog extends Animal {
        private $ladrido;
        private $color;
        private $raza;

        const $tipo = 'mamifero';

        public function __construct($name, $lastName, $age, $color, $raza) {
            parent::__construct($name, $lastName, $age);
            $this->color = $color;
            $this->raza = $raza;;
        }

        public function getLadrido($ladrido = '') {
            return 'Me llamo' . $this->name . ' ' . $ladrido;
        }

        public function getInfo() {
            return parent::getInfo()
        }
    }

 ?>

<!-- Abstract classes  -->
<?php 

    abstract class Animal
    {
        public $name;
        public $age;
        
        public function Describe()
        {
            return $this->name . ", " . $this->age . " years old";    
        }
        
        abstract public function Greet();
    }

    class Dog extends Animal
    {
        public function Greet()
        {
            return "Woof!";    
        }
        
        public function Describe()
        {
            return parent::Describe() . ", and I'm a dog!";    
        }
    }


    $animal = new Dog();
    $animal->name = "Bob";
    $animal->age = 7;
    echo $animal->Describe();
    echo $animal->Greet();


?>

<!-- Stataic clasess -->

<?php
    
    class User
    {
        public $name;
        public $age;
        public static $minimumPasswordLength = 6;
        
        public function Describe()
        {
            return $this->name . " is " . $this->age . " years old";
        }
        
        public static function ValidatePassword($password)
        {
            if(strlen($password) >= self::$minimumPasswordLength)
                return true;
            else
                return false;
        }
    }

    $password = "test";
    if(User::ValidatePassword($password))
        echo "Password is valid!";
    else
        echo "Password is NOT valid!";

?>

<!-- Class constants -->

<?php 
    
    class User
    {
        const DefaultUsername = "John Doe";
        const MinimumPasswordLength = 6;
    }

    echo "The default username is " . User::DefaultUsername;
    echo "The minimum password length is " . User::MinimumPasswordLength;
    
?>

<!-- The "final" keyword -->

<!-- However, in some cases you may want to prevent a class from being inherited from or a function to be overridden.  -->

<?php

    final class Animal {
        public $name;
    }

    class Animal {
        final public function Greet()
        {
            return "The final word!";    
        }
    }

?>


<!-- Pretty example -->

<?php 
    
    class Animal {
        private $name;
        private $lastName;
        private $age;

        public function __construct ($name = '', $lastName, $age) {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->age = $age;
        }
        
        public function getInfo() {
            return $name;
        }

        public static function getMatch($name) {
            return '**' . $name . '**';
        }

        public static $valueLatitude = '43.2141';
        public static $valueLongitude = '-14.2344';

    }

    class Dog extends Animal {
        private $ladrido;
        private $color;
        private $raza;

        const $tipo = 'mamifero';

        public function __construct($name, $lastName, $age, $color, $raza) {
            parent::__construct($name, $lastName, $age);
            $this->color = $color;
            $this->raza = $raza;
        }

        public function getLadrido($ladrido = '') {
            return 'Me llamo' . $this->name . ' ' . $ladrido;
        }

        public function getInfo() {
            return parent::getInfo()
        }
    }
    
    $rokoPet = new Dog('Roko', 'Gonzalo', 5);
    $rokoPet.getInfo();
    $rokoPet.getLadrido('guau guau');


    $data = Animal::getMatch($roko->name);
    $dataLongitude = Animal::valueLongitude;
    $dataLatitude = Animal::valueLatitude;

    // Use const
    $typeDog = Animal::tipo;

?>

