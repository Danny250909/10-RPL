class angka:
    jumlah = 17

a = angka()
print(a.jumlah)

b = angka()
print(b.jumlah)

class Person:
    def __init__(self, name, age):
        self.name = name
        self.age = age

    def greet(self):
        print(f"Hello, my name is {self.name} and I am {self.age} years old.")

def greet(name, age):
    print("Hello, welcome to the Python class!")
    print("This is a simple greeting function.")
    print('Name: ' + name)
    print('Age: ' + str(age))

person1 = Person("Novi", 16)
person2 = Person("Ditzzx.", 16)

person1.greet()
person2.greet()

print(person1.name)
print(person2.name)