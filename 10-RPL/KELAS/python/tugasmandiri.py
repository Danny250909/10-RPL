print("=== Game Gunting Batu Kertas ===")

def hasil_pemain(pemain1, pemain2):
    if pemain1 == pemain2:
        return "Seri!"
    elif (pemain1 == "Gunting" and pemain2 == "Kertas") or \
         (pemain1 == "Batu" and pemain2 == "Gunting") or \
         (pemain1 == "Kertas" and pemain2 == "Batu"):
        return "Pemain 1 menang!"
    else:
        return "Pemain 2 menang!"

pemain1 = input("Pemain 1, pilih Gunting, Batu, atau Kertas: ")
pemain2 = input("Pemain 2, pilih Gunting, Batu, atau Kertas: ")

print(hasil_pemain(pemain1, pemain2))
print("\n")



print("=== Hitung jumlah huruf dan angka ===")

teks = input("Masukkan teks: ")

jumlah_huruf = sum(c.isalpha() for c in teks)
jumlah_angka = sum(c.isdigit() for c in teks)

print(f"Jumlah huruf: {jumlah_huruf}")
print(f"Jumlah angka: {jumlah_angka}")
print("\n")



print("=== Segitiga angka  ===")

n = int(input("Masukkan jumlah baris segitiga: "))

for i in range(1, n + 1):
    for j in range(1, i + 1):
        print(j, end=' ')
    print()
print("\n")



print("=== Filter list yang habis dibagi 17 ===")

angka_list = [34, 51, 68, 85, 102, 119, 136, 153, 170, 187]

hasil_filter = [angka for angka in angka_list if angka % 17 == 0]

print("Angka yang habis dibagi 17:", hasil_filter)
print("\n")