
POO 

abstraccion
polimorfismo


class Pet {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    saludar() {
        return `hola me llamo ${ this.name } y tengo ${ this.age } años de edad`;
    }

    static naming() {
        return this.name + 'A';
    }
}

class Dog extends Pet {
    constructor(name, age, color) {
        super(name, age);

        this.name = name;
        this.age = age;
        this.color = color;
    }
    saludar() {

        return `${ super.saludar() } y mi pelo es ${ this.color }`
    }
    info() {
        return 'dasd'
    }

    info3() {
        return 'dasd'
    }
}

class Cat extends Pet {
    constructor(name, age, pelaje) {
        super(name, age);

        this.name = name;
        this.age = age;
        this.pelaje = pelaje;
    }
    saludar() {

        return `${ super.saludar() } y mi miauuuuu es ${ this.pelaje }`
    }
}


var perrito = new Pet('carlitos', 2);
perrito.saludar();


var perrito2 = new Pet('carlitos2', 22);
perrito2.saludar();


var perrito3 = new Dog('carlitos3', 25, 'verde');
perrito3.saludar();






contructor 
methods

this
super


