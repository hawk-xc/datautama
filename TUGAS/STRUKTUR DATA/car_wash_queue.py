# belajar quque
# belajar membuat system antrean car wash
import time

class queue:
    def __init__(self):
        self.antrean = []

    def enqueue(self, data):
        self.antrean.append(data)
        print (data, "sudah ditambahkan ke antrean!")
    
    def dequeue(self):
        if self.antrean == []:
            return ("antrean kosong")
        else:
            try:
                # menggunakan exception untuk mengatasi error Index out of range
                # return self.antrean[0], "dikeluarkan dari antrean!", self.antrean.pop(0)
                return self.antrean.pop(0), "dikeluarkan"
            except IndexError:
                return "index kosong!"
    
    def size(self):
        return (len(self.antrean))

    def showdata(self):
        if self.antrean == []:
            print ("antrean kosong!")
        return (self.antrean)

    def isempty(self):
        if self.antrean == []:
            return "data kosong"
        else:
            return "data terisi"

if __name__ == "__main__":
    q = queue()
    while True:
        print ("\n\n==================== CAR WASH QUEUE SYSTEM ===================="), time.sleep(0.8)
        print ("========================== Kelompok 5 ========================="), time.sleep(0.8)
        print ("1 = tambahkan data plat nomor pada antrean\n2 = keluarkan data plat nomor pada antrean\n3 = cek jumlah data pada antrean\n4 = tampilkan data pada antrean\n5 = cek apakah data kosong\n6 = keluar aplikasi")
        try:
            masukan = int(input('masukkan inputan -> '))
            if masukan == 1:
                value = input('masukan inputan = ')
                q.enqueue(value)
            elif masukan == 2:
                print (q.dequeue())
            elif masukan == 3:
                print (q.size())
            elif masukan == 4:
                print (q.showdata())
            elif masukan == 5:
                print (q.isempty())
            else: break
            time.sleep(0.8)
        except ValueError:
            print ("masukan inputan sesuai daftar [1-6]\n\n"), time.sleep(2)

        except KeyboardInterrupt:
            exitprog = input('\napakah anda ingin keluar? [y/n] ')
            if exitprog == "y":
                break
        