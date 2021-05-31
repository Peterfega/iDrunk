package com.example.idrunk2;

public class Alcohol {
    double grados;
    String nombre;
    int cantidad, volumen;
    //Image foto;


    public Alcohol(double g, String nom, int cant, int vol){
        this.grados = g;
        this.nombre = nom;
        this.cantidad = cant;
        this.volumen = vol;
    }
    public double getGrados() {return grados;}

    public void setGrados(double grados) {
        this.grados = grados;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public int getCantidad() { return cantidad; }

    public void setCantidad(int cantidad) {this.cantidad = cantidad;}

    public int getVolumen() {return volumen;}

    public void setVolumen(int volumen) {this.volumen = volumen;}

    /*public Image getFoto() {
        return foto;
    }

    public void setFoto(Image foto) {
        this.foto = foto;
    }*/
}
