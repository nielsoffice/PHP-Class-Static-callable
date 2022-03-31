<?php 

 Class TestClass1 {
    
    public $prop; // property 

    const DO_TEST = 'SOMETHING'; // constant means unchangeable 

    // constructor
    public function __construct() // If __construct($object)
    {
         // do something !   $this->prop = $object;
    }
    
    public function do_run() {
        print "Run";
    }

 }

 // Instantiate Class
 $newClass = new TestClass1; // or TestClass1( $if_something_need_in_constructor );

 Class StaticTestClass {
    
    static public $prop;

    const DO_TEST = 'SOMETHING'; // constant means unchangeable 

    // Static class have no constructor !
    
    static public function do_run() {
        print "Run";
    }

 }
  
 // Static Class Method
 StaticTestClass::do_run();

 Class TestClass {
    
    public function do_run() {
        print "Run";
    }

    static public function run() {
        print "Run";
    }

 }

 // Call the method directly from class
 ((new TestClass())->do_run());

 // Call the method directly static approach 
 ((new TestClass())::run());

// PHP Callable Function / Anonymous 
// Implementing a call back function

// 1.	Anonymous functions
// 2.	Standard PHP functions
// 3.	Static Classes
// 4.	Non-static Class
// 5.	Object/Class Methods

// Usage: callable function through Anonymous functions
Function my_cb_function() {
  Print 'This is callable function';
}
Call_user_func('my_cb_function');

// Usage: callable function through Static Class
Class StaticClass {

  Static function my_cb_method() {
    Print 'This is callable function';
 }

}
Call_user_func(array('StaticClass', 'my_cb_method'));
Call_user_func(['StaticClass', 'my_cb_method']);
Call_user_func(['StaticClass::my_cb_method']);


// Usage: callable function through Object Class
Class ObjectClass1 {
  Static function my_cb_method() {
    Print 'This is callable function';
 }
}

$obj = new ObjectClass();
Call_user_func(array($obj, 'my_cb_method'));

 // Usage: callable function through within the Object Class
 Class ObjectClass {

 Public $property = 'Hello World';

 Public function MyMethod() {

   call_user_func(array($this, 'my_cb_metho'));

 }

 Public function my_cb_method() {

   print $this->property;
 
 }

}

// Execute
$obj = new ObjectClass();
Call_user_func( array($obj, 'MyMethod') );




