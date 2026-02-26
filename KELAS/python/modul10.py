def faktorial(n):
    """Menghitung faktorial dari n secara rekursif."""
    if n == 0 or n == 1:
        return 1
    else:
        return n * faktorial(n - 1)
print("=== Hitung Faktorial ===")

angka = int(input("Masukkan angka: "))
hasil = faktorial(angka)

print(f"Faktorial dari {angka} adalah {hasil}")
print("\n")



def hitung_upper_lower(teks):
    """Menghitung jumlah huruf besar dan kecil dalam teks."""
    upper_count = sum(1 for c in teks if c.isupper())
    lower_count = sum(1 for c in teks if c.islower())
    return upper_count, lower_count

print("=== Hitung Huruf Besar dan Kecil ===")

teks_input = input("Masukkan teks: ")
upper, lower = hitung_upper_lower(teks_input)

print(f"Jumlah huruf besar: {upper}")
print(f"Jumlah huruf kecil: {lower}")
print("\n")



def pascal_triangle(n):
    """Mencetak segitiga Pascal hingga n baris."""
    triangle = []
    for i in range(n):
        row = [1] * (i + 1)
        for j in range(1, i):
            row[j] = triangle[i - 1][j - 1] + triangle[i - 1][j]
        triangle.append(row)
    return triangle

print("=== Segitiga Pascal ===")

n = int(input("Masukkan jumlah baris segitiga Pascal: "))
pascal = pascal_triangle(n)

for row in pascal:
    print(' '.join(map(str, row)).center(n * 2))
print("\n")



def kuadrat_list(angka_list):
    """Mengembalikan list baru dengan kuadrat dari setiap angka dalam list."""
    return [x ** 2 for x in angka_list]

print("=== Kuadrat dari List Angka ===")

angka_list = [1, 2, 3, 4, 5]
kuadrat_list = kuadrat_list(angka_list)

print("List angka:", angka_list)
print("List kuadrat:", kuadrat_list)
print("\n")