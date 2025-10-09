#include <iostream>
using namespace std;

string tentukanZodiak(int tanggal, int bulan) {
    if ((bulan == 1 && tanggal >= 20) || (bulan == 2 && tanggal <= 18)) {
        return "Aquarius";
    } else if ((bulan == 2 && tanggal >= 19) || (bulan == 3 && tanggal <= 20)) {
        return "Pisces";
    } else if ((bulan == 3 && tanggal >= 21) || (bulan == 4 && tanggal <= 19)) {
        return "Aries";
    } else if ((bulan == 4 && tanggal >= 20) || (bulan == 5 && tanggal <= 20)) {
        return "Taurus";
    } else if ((bulan == 5 && tanggal >= 21) || (bulan == 6 && tanggal <= 20)) {
        return "Gemini";
    } else if ((bulan == 6 && tanggal >= 21) || (bulan == 7 && tanggal <= 22)) {
        return "Cancer";
    } else if ((bulan == 7 && tanggal >= 23) || (bulan == 8 && tanggal <= 22)) {
        return "Leo";
    } else if ((bulan == 8 && tanggal >= 23) || (bulan == 9 && tanggal <= 22)) {
        return "Virgo";
    } else if ((bulan == 9 && tanggal >= 23) || (bulan == 10 && tanggal <= 22)) {
        return "Libra";
    } else if ((bulan == 10 && tanggal >= 23) || (bulan == 11 && tanggal <= 21)) {
        return "Scorpio";
    } else if ((bulan == 11 && tanggal >= 22) || (bulan == 12 && tanggal <= 21)) {
        return "Sagittarius";
    } else {
        return "Capricorn";
    }
}

int main() {
    int tanggal, bulan;
    cout << "Masukkan tanggal lahir (1-31): ";
    cin >> tanggal;
    cout << "Masukkan bulan lahir (1-12): ";
    cin >> bulan;

    if (tanggal < 1 || tanggal > 31 || bulan < 1 || bulan > 12) {
        cout << "Tanggal atau bulan tidak valid!" << endl;
        return 1;
    }

    string zodiak = tentukanZodiak(tanggal, bulan);
    cout << "Zodiak Anda adalah: " << zodiak << endl;

    return 0;
}