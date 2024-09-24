<?php
declare(strict_types=1);

require_once('I.php');
require_once('C.php');
require_once('A.php');
require_once('B.php');


class Demo {
    public function typeIReturnA(): I {
        echo "typeIReturnA<br>";
        return new A();
    }

    public function typeIReturnB(): I {
        echo "typeIReturnB<br>";
        return new B();
    }

    public function typeIReturnC(): I {
        echo "typeIReturnC<br>";
        return new C();
    }

    public function typeIReturnI(): I {
        echo "typeIReturnI<br>";
        return new I();
    }

    public function typeIReturnNull(): I {
        echo "typeIReturnNull<br>";
        return null;
    }
    //
     public function typeAReturnA(): A {
        echo "typeAReturnA<br>";
        return new A();
    }

    public function typeAReturnB(): A {
        echo "typeReturnB<br>";
        return new B();
    }

    public function typeAReturnC(): A {
        echo "typeAReturnC<br>";
        return new C();
    }

    public function typeAReturnI(): A {
        echo "typeAReturnI<br>";
        return new I();
    }

    public function typeAReturnNull(): A {
        echo "typeAReturnNull<br>";
        return null;
    }
    //
    public function typeBReturnA(): B {
        echo "typeBReturnA<br>";
        return new A();
    }

    public function typeBReturnB(): B {
        echo "typeBReturnB<br>";
        return new B();
    }

    public function typeBReturnC(): B {
        echo "typeBReturnC<br>";
        return new C();
    }

    public function typeBReturnI(): B {
        echo "typeBReturnI<br>";
        return new I();
    }

    public function typeBReturnNull(): B {
        echo "typeBReturnNull<br>";
        return null;
    }
    //
    public function typeCReturnA(): C {
        echo "typeCReturnA<br>";
        return new A();
    }

    public function typeCReturnB(): C {
        echo "typeCReturnB<br>";
        return new B();
    }

    public function typeCReturnC(): C {
        echo "typeCReturnC<br>";
        return new C();
    }

    public function typeCReturnI(): C {
        echo "typeCReturnI<br>";
        return new I();
    }

    public function typeCReturnNull(): C {
        echo "typeCReturnNull<br>";
        return null;
    }
    //
    public function typeNullReturnA(): null {
        echo "typeNullReturnA<br>";
        return new A();
    }

    public function typeNullReturnB(): null {
        echo "typeNullReturnB<br>";
        return new B();
    }

    public function typeNullReturnC(): null {
        echo "typeNullReturnC<br>";
        return new C();
    }

    public function typeNullReturnI(): null {
        echo "typeNullReturnI<br>";
        return new I();
    }

    public function typeNullReturnNull(): null {
        echo "typeNullReturnNull<br>";
        return null;
    }
}
$demo = new Demo();

$demo -> typeAReturnA();
$demo -> typeAReturnB();
$demo -> typeAReturnC();
$demo -> typeAReturnI();
$demo -> typeAReturnNull();

$demo -> typeBReturnA();
$demo -> typeBReturnB();
$demo -> typeBReturnC();
$demo -> typeBReturnI();
$demo -> typeBReturnNull();

$demo -> typeCReturnA();
$demo -> typeCReturnB();
$demo -> typeCReturnC();
$demo -> typeCReturnI();
$demo -> typeCReturnNull();

$demo -> typeIReturnA();
$demo -> typeIReturnB();
$demo -> typeIReturnC();
$demo -> typeIReturnI();
$demo -> typeIReturnNull();

$demo -> typeNullReturnA();
$demo -> typeNullReturnB();
$demo -> typeNullReturnC();
$demo -> typeNullReturnI();
$demo -> typeNullReturnNull();
