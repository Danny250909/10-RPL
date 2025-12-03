class Faktorial:
    def hitung(self, n):
        if n == 0 or n == 1:
            return 1
        else:
            return n * self.hitung(n - 1)
        
print("=== Hitung Faktorial dengan Kelas ===")

angka = int(input("Masukkan angka: "))
faktorial = Faktorial()
hasil = faktorial.hitung(angka)

print(f"Faktorial dari {angka} adalah {hasil}")
print("\n")



class TextCounter:
    def hitung_upper_lower(self, teks):
        upper_count = sum(1 for c in teks if c.isupper())
        lower_count = sum(1 for c in teks if c.islower())
        return upper_count, lower_count
    
print("=== Hitung Huruf Besar dan Kecil dengan Kelas ===")

teks_input = input("Masukkan teks: ")
text_counter = TextCounter()
upper, lower = text_counter.hitung_upper_lower(teks_input)

print(f"Jumlah huruf besar: {upper}")
print(f"Jumlah huruf kecil: {lower}")
print("\n")



class PascalTriangle:
    def generate(self, n):
        triangle = []
        for i in range(n):
            row = [1] * (i + 1)
            for j in range(1, i):
                row[j] = triangle[i - 1][j - 1] + triangle[i - 1][j]
            triangle.append(row)
        return triangle
    
print("=== Segitiga Pascal dengan Kelas ===")

n = int(input("Masukkan jumlah baris segitiga Pascal: "))
pascal = PascalTriangle()
segitiga = pascal.generate(n)

for row in segitiga:
    print(' '.join(map(str, row)).center(n * 2))
print("\n")



class ListSquarer:
    def kuadrat_list(self, angka_list):
        return [x ** 2 for x in angka_list]
    
print("=== Kuadrat dari List Angka dengan Kelas ===")

angka_list_input = input("Masukkan angka-angka yang dipisahkan dengan spasi: ")
angka_list = list(map(int, angka_list_input.split()))
list_squarer = ListSquarer()
kuadrat_hasil = list_squarer.kuadrat_list(angka_list)

print("List kuadrat:", kuadrat_hasil)
print("\n")



