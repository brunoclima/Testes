"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
class Student {
    constructor(firstName, middleInitial, lastName) {
        this.firstName = firstName;
        this.middleInitial = middleInitial;
        this.lastName = lastName;
        this.fullName = firstName + " " + middleInitial + " " + lastName;
    }
}
function greeter(person) {
    return "Hello, " + person.firstName + " " + person.lastName;
}
exports.greeter = greeter;
let user = new Student("Bruno", "M.", "Ferreira");
document.body.innerHTML = greeter(user);
