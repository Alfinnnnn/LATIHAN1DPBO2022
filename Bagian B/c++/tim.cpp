#include <bits/stdc++.h>

using namespace std;

class tim
{
    private:
        //atribut
        string namaTim;
        string negaraAsal;
        int tahunBerdiri;
        int totalTrofi;
        string daftarPemain;
    
    public:
        //konstruktor
        tim(){}

        tim(string namaTim, string negaraAsal, int tahunBerdiri, int totalTrofi, string daftarPemain){
            this->namaTim = namaTim;
            this->negaraAsal = negaraAsal;
            this->tahunBerdiri = tahunBerdiri;
            this->totalTrofi = totalTrofi;
            this->daftarPemain = daftarPemain;
        }

        //prosedur setter dan getter

        void setnamaTim(string namaTim){
            this->namaTim = namaTim;
        }

        string getnamaTim(){
            return this->namaTim;
        }

        void setnegaraAsal(string negaraAsal){
            this->negaraAsal = negaraAsal;
        }

        string getnegaraAsal(){
            return this->negaraAsal;
        }

        void settahunBerdiri(int tahunBerdiri){
            this->tahunBerdiri = tahunBerdiri;
        }

        int gettahunBerdiri(){
            return this->tahunBerdiri;
        }

        void settotalTrofi(int totalTrofi){
            this->totalTrofi = totalTrofi;
        }

        int gettotalTrofi(){
            return this->totalTrofi;
        }

        void setdaftarPemain(string daftarPemain){
            this->daftarPemain = daftarPemain;
        }

        string getdaftarPemain(){
            return this->daftarPemain;
        }

        //destructor
        ~tim(){

        }

};

int main(){

    tim daftarTim1;

    daftarTim1.setnamaTim("PERSIB");
    daftarTim1.setnegaraAsal("INDONESIA");
    daftarTim1.settahunBerdiri(1933);
    daftarTim1.settotalTrofi(9);
    daftarTim1.setdaftarPemain(" 1. Muhammad Natshir;\n 2. Nick Kuipers;\n 3. Ardi Idrus.\n");

    tim daftarTim2("PSIS", "INDONESIA", 1932, 10, " 1. Wallace Costa;\n 2. Wahyu Prasetyo;\n 3. Pratama Arhan.\n");

    cout<<"DAFTAR TIM SEPAKBOLA"<<endl;
    
    cout<<endl;

    cout<<"Nama Tim      : "<<daftarTim1.getnamaTim()<<endl;
    cout<<"Negara Asal   : "<<daftarTim1.getnegaraAsal()<<endl;
    cout<<"Tahun Berdiri : "<<daftarTim1.gettahunBerdiri()<<endl;
    cout<<"Jumlah Trofi  : "<<daftarTim1.gettotalTrofi()<<endl;
    cout<<"Pemain        : \n"<<daftarTim1.getdaftarPemain()<<endl;

    cout<<endl;

    cout<<"Nama Tim      : "<<daftarTim2.getnamaTim()<<endl;
    cout<<"Negara Asal   : "<<daftarTim2.getnegaraAsal()<<endl;
    cout<<"Tahun Berdiri : "<<daftarTim2.gettahunBerdiri()<<endl;
    cout<<"Jumlah Trofi  : "<<daftarTim2.gettotalTrofi()<<endl;
    cout<<"Pemain        : \n"<<daftarTim2.getdaftarPemain()<<endl;


};

