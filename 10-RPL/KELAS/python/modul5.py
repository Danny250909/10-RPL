print("=== Progam Deteksi Jenis Segitiga ===")

x = int(input("Masukkan sisi pertama segitiga: "))
y = int(input("Masukkan sisi kedua segitiga: "))    
z = int(input("Masukkan sisi ketiga segitiga: "))

if x == y and y == z:
    print("Segitiga sama sisi")
elif x == y or y == z or x == z:
    print("Segitiga sama kaki")
else:
    print("Segitiga sembarang")