print("\n=== Nilai maksimum dari daftar ===")

data_list = [34, 67, 23, 89, 12, 90, 45]
nilai_maksimum = max(data_list)

print("Nilai maksimum dalam daftar adalah:", nilai_maksimum)



print("\n=== Nilai minimum dari daftar ===")

nilai_minimum = min(data_list)

print("Nilai minimum dalam daftar adalah:", nilai_minimum)



print("\n=== Filter kata <= 7 ===")

kata_list = ["python", "java", "c++", "javascript", "go", "ruby", "swift"]
kata_terfilter = [kata for kata in kata_list if len(kata) <= 7]

print("Kata-kata dengan panjang <= 7 karakter:", kata_terfilter)



print("\n=== Menyisipkan anggota baru  ===")

anggota_baru = "Vivi"
kata_list.append(anggota_baru)

print("Daftar kata setelah menambahkan anggota baru:", kata_list)



print("\n=== Caesar Cipher Decrypt ===")

def caesar_decrypt(text, shift):
    result = ""

    for char in text:
        if char.isalpha():
            shifted = chr((ord(char) - 65 - shift) % 26 + 65) if char.isupper() else chr((ord(char) - 97 - shift) % 26 + 97)
            result += shifted
        else:
            result += char

    return result

encrypted_text = "Wklv lv d whvw phvvdjh"
shift_value = 3
decrypted_text = caesar_decrypt(encrypted_text, shift_value)

print("Terenkripsi dengan Caesar Cipher: ", encrypted_text)
print("Terdekripsi dengan Caesar Cipher: ", decrypted_text)



