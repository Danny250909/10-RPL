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

