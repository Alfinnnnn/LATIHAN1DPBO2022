class tim():
    
    __NamaTim = ''
    __negaraAsal = ''
    __tahunBerdiri = 0
    __totalTrofi = 0
    __daftarPemain=''

    def __init__(self, NamaTim='', negaraAsal='', tahunBerdiri=0, totaltrofi=0, daftarPemain=''):
        self.__NamaTim = NamaTim
        self.__negaraAsal = negaraAsal
        self.__tahunBerdiri = tahunBerdiri
        self.__totalTrofi = totaltrofi
        self.__daftarPemain = daftarPemain

    def setNamaTim(self, NamaTim):
        self.__NamaTim = NamaTim
    
    def getNamaTim(self):
        return self.__NamaTim
    
    def setnegaraAsal(self, negaraAsal):
        self.__negaraAsal = negaraAsal
    
    def getnegaraAsal(self):
        return self.__negaraAsal

    def settahunBerdiri(self, tahunBerdiri):
        self.__tahunBerdiri = tahunBerdiri
    
    def gettahunBerdiri(self):
        return self.__tahunBerdiri
    
    def settotalTrofi(self, totalTrofi):
        self.__totalTrofi = totalTrofi
    
    def gettotalTrofi(self):
        return self.__totalTrofi

    def setdaftarPemain(self, daftarPemain):
        self.__daftarPemain = daftarPemain
    
    def getdaftarPemain(self):
        return self.__daftarPemain


daftarTim1 = tim()
daftarTim1.setNamaTim("PERSIB")
daftarTim1.setnegaraAsal("INDONESIA")
daftarTim1.settahunBerdiri(1933)
daftarTim1.settotalTrofi(9)
daftarTim1.setdaftarPemain(" 1. Muhammad Natshir;\n 2. Nick Kuipers;\n 3. Ardi Idrus.\n")

daftarTim2 = tim("PSIS", "INDONESIA", 1932, 10, " 1. Wallace Costa;\n 2. Wahyu Prasetyo;\n 3. Pratama Arhan.\n")

print("DAFTAR TIM SEPAKBOLA\n")

print("Nama Tim      : " + str(daftarTim1.getNamaTim()))
print("Negara Asal   : " + str(daftarTim1.getnegaraAsal()))
print("Tahun Berdiri : " + str(daftarTim1.gettahunBerdiri()))
print("Jumlah Trofi  : " + str(daftarTim1.gettotalTrofi()))
print("Pemain: \n" + str(daftarTim1.getdaftarPemain()))

print("Nama Tim      : " + str(daftarTim2.getNamaTim()))
print("Negara Asal   : " + str(daftarTim2.getnegaraAsal()))
print("Tahun Berdiri : " + str(daftarTim2.gettahunBerdiri()))
print("Jumlah Trofi  : " + str(daftarTim2.gettotalTrofi()))
print("Pemain        : \n" + str(daftarTim2.getdaftarPemain()))