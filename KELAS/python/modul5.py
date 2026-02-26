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



print("\n==== Progam Deteksi Tahun Kabisat ====")

tahun = int(input("Masukkan tahun: "))

if (tahun % 4 == 0 and tahun % 100 != 0) or (tahun % 400 == 0):
    print(tahun, "adalah tahun kabisat")
else:
    print(tahun, "bukan tahun kabisat")



print("\n=== Program Deteksi Zodiak Yunani ===")

tanggal = int(input("Masukkan tanggal lahir (1-31): "))
bulan = input("Masukkan bulan lahir (dalam huruf): ").lower()

if (bulan == "maret" and tanggal >= 21) or (bulan == "april" and tanggal <= 19):
    zodiak = "Aries"
elif (bulan == "april" and tanggal >= 20) or (bulan == "mei" and tanggal <= 20):
    zodiak = "Taurus"
elif (bulan == "mei" and tanggal >= 21) or (bulan == "juni" and tanggal <= 20):
    zodiak = "Gemini"
elif (bulan == "juni" and tanggal >= 21) or (bulan == "juli" and tanggal <= 22):
    zodiak = "Cancer"
elif (bulan == "juli" and tanggal >= 23) or (bulan == "agustus" and tanggal <= 22):
    zodiak = "Leo"
elif (bulan == "agustus" and tanggal >= 23) or (bulan == "september" and tanggal <= 22):
    zodiak = "Virgo"
elif (bulan == "september" and tanggal >= 23) or (bulan == "oktober" and tanggal <= 22):
    zodiak = "Libra"
elif (bulan == "oktober" and tanggal >= 23) or (bulan == "november" and tanggal <= 21):
    zodiak = "Scorpio"
elif (bulan == "november" and tanggal >= 22) or (bulan == "desember" and tanggal <= 21):
    zodiak = "Sagitarius"
elif (bulan == "desember" and tanggal >= 22) or (bulan == "januari" and tanggal <= 19):
    zodiak = "Capricorn"
elif (bulan == "januari" and tanggal >= 20) or (bulan == "februari" and tanggal <= 18):
    zodiak = "Aquarius"
elif (bulan == "februari" and tanggal >= 19) or (bulan == "maret" and tanggal <= 20):
    zodiak = "Pisces"
else:
    zodiak = "Tidak valid"

print("Zodiak Anda adalah:", zodiak)



print("\n===Deteksi Zodiak Cina===")

tahun = int(input("Masukkan tahun lahir Anda: "))

zodiak_cina = [
    "Monyet", "Ayam", "Anjing", "Babi", 
    "Tikus", "Kerbau", "Macan", "Kelinci",
    "Naga", "Ular", "Kuda", "Kambing"
]

index = (tahun - 4) % 12

print("Zodiak Cina Anda adalah:", zodiak_cina[index])