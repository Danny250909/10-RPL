print("=== Filter bilangan ganjil dan genap versi input user ===")

angka_awal = int(input("Masukkan angka awal: "))
angka_akhir = int(input("Masukkan angka akhir: "))

print(f"Bilangan genap antara {angka_awal} dan {angka_akhir} adalah:")
for num in range(angka_awal, angka_akhir + 1):
    if num % 2 == 0:
        print(num, end=' ')
        print("\n")
        print(f"Bilangan ganjil antara {angka_awal} dan {angka_akhir} adalah:")
for num in range(angka_awal, angka_akhir + 1):
    if num % 2 != 0:
        print(num, end=' ')
print("\n")



print("=== Tabel perkalian dari input ===")

n = int(input("Masukkan angka untuk tabel perkalian: "))

print(f"Tabel perkalian untuk {n}:")
for i in range(1, 11):
    print(f"{n} x {i} = {n * i}")
print("\n")



print("=== Deret Fibonacci  ===")

jumlah_deret = int(input("Masukkan jumlah deret Fibonacci yang diinginkan: "))

a, b = 0, 1

print("Deret Fibonacci:")
for _ in range(jumlah_deret):
    print(a, end=' ')
    a, b = b, a + b
print("\n")



print("=== Perkalian 1 - 100 ===")

for i in range(1, 11):
    for j in range(1, 11):
        print(f"{i * j:4}", end=' ')
    print()
print("\n")



