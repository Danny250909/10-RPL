print("\n=== Tuple ke string ===")

data_tuple = ('N', 'o', 'v', 'i', 'a', 't', 'i')
data_string = ''.join(data_tuple)

print("Tuple:", data_tuple)
print("String:", data_string)
print("\n")



print("=== Penjumlahan nilai dalam dictionary ===")

data_dict = {
    'Noviati': 7,
    'Novi': 4,
    'Vivi': 4
    }

total_nilai = sum(data_dict.values())

print("Dictionary:", data_dict)
print("Total nilai:", total_nilai)
print("\n===")



print("=== Perkalian nilai dari dictionary ===")

data_dict = {
    'Noviati': 7,
    'Novi': 4,
    'Vivi': 4
    }

total_nilai = 1
for nilai in data_dict.values():
    total_nilai *= nilai

print("Dictionary:", data_dict)
print("Total nilai:", total_nilai)
print("\n")



print("=== Hapus key dari dictionary ===")

data_dict = {
    'Noviati': 7,
    'Novi': 4,
    'Vivi': 4
    }

data_dict.pop('Noviati')

print("Dictionary:", data_dict)
print("\n")



print("=== Game tebak nama binatang ===")

def tebak_binatang():
    binatang_rahasia = "gajah"
    tebakan = ""

    print("Selamat datang di permainan tebak nama binatang!")
    print("Coba tebak nama binatang yang saya pikirkan.")

    while tebakan.lower() != binatang_rahasia:
        tebakan = input("Masukkan tebakan Anda: ")
        if tebakan.lower() == binatang_rahasia:
            print("Selamat! Tebakan Anda benar.")
        else:
            print("Tebakan salah. Coba lagi!")

    print("Terima kasih telah bermain!")

tebak_binatang()
print("\n")



