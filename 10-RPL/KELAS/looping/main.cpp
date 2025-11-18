#include <iostream>
using namespace std;

int main() {
    int baris, kolom;
    float nilaiAwal, increment;

    cout << "Masukkan jumlah baris: ";
    cin >> baris;
    cout << "Masukkan jumlah kolom: ";
    cin >> kolom;
    cout << "Masukkan nilai awal: ";
    cin >> nilaiAwal;
    cout << "Masukkan increment: ";
    cin >> increment;

    float nilai = nilaiAwal;
    for (int i = 1; i <= baris; i++) {
        cout << "Nilai " << i << ". ";
        for (int j = 1; j <= kolom; j++) {
            cout << nilai << " ";
            nilai += increment;
        }
    }

    int n;
    cout << "Masukkan jumlah baris: ";
    cin >> n;

    for (int i = 0; i < n; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            cout << "o";
        }
        for (int j = 0; j <= i; j++) {
            cout << "+";
        }

        cout << endl;
    }

    return 0;
}

