import java.util.*;

class tim
{
        //atribut
        private String namaTim;
        private String negaraAsal;
        private int tahunBerdiri;
        private int totalTrofi;
        private String daftarPemain;
    
    
        //konstruktor

        public tim(String namaTim, String negaraAsal, int tahunBerdiri, int totalTrofi, String daftarPemain){
            this.namaTim = namaTim;
            this.negaraAsal = negaraAsal;
            this.tahunBerdiri = tahunBerdiri;
            this.totalTrofi = totalTrofi;
            this.daftarPemain = daftarPemain;
        }

        public tim(){
        }

        //prosedur setter dan getter

        public void setnamaTim(String namaTim){
            this.namaTim = namaTim;
        }

        public String getnamaTim(){
            return namaTim;
        }

        public void setnegaraAsal(String negaraAsal){
            this.negaraAsal = negaraAsal;
        }

        public String getnegaraAsal(){
            return negaraAsal;
        }

        public void settahunBerdiri(int tahunBerdiri){
            this.tahunBerdiri = tahunBerdiri;
        }

        public int gettahunBerdiri(){
            return tahunBerdiri;
        }

        public void settotalTrofi(int totalTrofi){
            this.totalTrofi = totalTrofi;
        }

        public int gettotalTrofi(){
            return totalTrofi;
        }

        public void setdaftarPemain(String daftarPemain){
            this.daftarPemain = daftarPemain;
        }

        public String getdaftarPemain(){
            return daftarPemain;
        }

}

class Main {
    public static void main(String[] args){
        tim daftarTim1 = new tim();

        daftarTim1.setnamaTim("PERSIB");
        daftarTim1.setnegaraAsal("INDONESIA");
        daftarTim1.settahunBerdiri(1933);
        daftarTim1.settotalTrofi(9);
        daftarTim1.setdaftarPemain(" 1. Muhammad Natshir;\n 2. Nick Kuipers;\n 3. Ardi Idrus.\n");
    
        tim daftarTim2 = new tim("PSIS", "INDONESIA", 1932, 10, " 1. Wallace Costa;\n 2. Wahyu Prasetyo;\n 3. Pratama Arhan.\n");

        System.out.println("DAFTAR TIM SEPAKBOLA\n");

        System.out.println("Nama Tim      : " + daftarTim1.getnamaTim());
        System.out.println("Negara Asal   : " + daftarTim1.getnegaraAsal());
        System.out.println("Tahun Berdiri : " + daftarTim1.gettahunBerdiri());
        System.out.println("Jumlah Trofi  : " + daftarTim1.gettotalTrofi());
        System.out.println("Pemain        : \n" + daftarTim1.getdaftarPemain());

        System.out.println("Nama Tim      : " + daftarTim2.getnamaTim());
        System.out.println("Negara Asal   : " + daftarTim2.getnegaraAsal());
        System.out.println("Tahun Berdiri : " + daftarTim2.gettahunBerdiri());
        System.out.println("Jumlah Trofi  : " + daftarTim2.gettotalTrofi());
        System.out.println("Pemain        : \n" + daftarTim2.getdaftarPemain());


    }
}

