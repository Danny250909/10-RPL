n = "Noviati"

print("n = ", n)
print("Nama saya adalah ", n)
print("index pertama adalah ", n[0])



print(" index kedua adalah ", n[1:2])
print(" index ketiga adalah ", n[:3])
print(" index keempat adalah ", n[4:])



print(" nama dalam huruf besar adalah uppercase", n.upper())
print(" nama dalam huruf kecil adalah lowercase", n.lower())
print(" ganti nama Noviati dengan Novi adalah replace", n.replace("Noviati", "Novi"))



no = 161010

def caesar_encrypt(text, shift):
    result = ""

    for char in text:
        if char.isalpha():
            shifted = chr((ord(char) - 65 + shift) % 26 + 65) if char.isupper() else chr((ord(char) - 97 + shift) % 26 + 97)
            result += shifted
        else:
            result += char

    return result

print("Terenkripsi dengan Caesar Cipher: ", caesar_encrypt(n, no % 26))
