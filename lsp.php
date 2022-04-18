<?php

class A {
    public function sayHello(): bool
    {
        return true;
    }
}
class B extends A {

}

$A1 = new A();
$A2 = new A();
$A3 = new A();

$B1 = new B();
$B2 = new B();
$B3 = new B();
