 package com.example.idrunk2;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.annotation.TargetApi;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Color;
import android.net.Uri;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.material.snackbar.Snackbar;

import java.text.DecimalFormat;

 public class MainMenu extends AppCompatActivity {

    Double c_dif, tasa_alc, peso;
    int i;
    EditText dato_peso;
    TextView resultado;
    RadioButton rbtn_hombre, rbtn_mujer;
    Button btn_web, btn_help;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.principal);
        dato_peso = findViewById(R.id.label_peso);
        resultado = findViewById(R.id.resultado_test);

        rbtn_hombre = findViewById(R.id.btn_hombre);
        rbtn_mujer = findViewById(R.id.btn_mujer);

        btn_help = findViewById(R.id.btn_help);
        btn_web = findViewById(R.id.btn_web);
    }

    public void acceder_listas(View view){
        Intent listas = new Intent(MainMenu.this, ListaActivity.class);
        startActivity(listas);
        finish();
    }


    /*public double cal_T(){
        double grados = getIntent().getDoubleExtra("totalT", 10.00);
        T = (grados/100)*60*0.8;
        return T;
    }*/

    private static String getDosDecimales(Double value){
        DecimalFormat df = new DecimalFormat("0.00");
        return df.format(value);
    }

    public void onRadioButtonClicked(View view) {
        boolean checked = ((RadioButton) view).isChecked();
        switch (view.getId()){
            case R.id.btn_hombre:
                if(checked){
                    c_dif = 0.7;
                }
                break;

            case R.id.btn_mujer:
                if(checked){
                    c_dif = 0.6;
                }
                break;

            default:
                //Do nothing
                break;
        };
    }

    public void calculo_alcholemia(View view){
        try {
            peso = Double.parseDouble(String.valueOf(dato_peso.getText()));

            Double K = peso * c_dif;
            tasa_alc = getIntent().getDoubleExtra("totalT", 10.00) / K;

            System.out.println(getIntent().getDoubleExtra("totalT", 10.00));

            //TASA DE ALCOHOL NORMAL
            if (tasa_alc < 0.15) {
                resultado.setText(getDosDecimales(tasa_alc) + " Seguro");
                resultado.setTextColor(Color.GREEN);
            //TASA DE ALCOHOL RIESGOSA
            } else if (tasa_alc >= 0.15 && tasa_alc <= 0.5) {
                resultado.setText(getDosDecimales(tasa_alc) + " Arriesgado");
                resultado.setTextColor(0xFFFFB900);

                //ABRIR WHATSAPP
                Intent whatsapp_arriesgado = new Intent(Intent.ACTION_SEND);
                whatsapp_arriesgado.setType("text/plain");
                whatsapp_arriesgado.setPackage("com.whatsapp");
                whatsapp_arriesgado.putExtra(Intent.EXTRA_TEXT, "Mi tasa de alcoholemia un poco alta ("+tasa_alc+"g/l),por favor ponte en contacto conmigo");
                try {
                    startActivity(whatsapp_arriesgado);
                } catch (android.content.ActivityNotFoundException ex) {
                    ex.printStackTrace();
                    Snackbar.make(view, "El dispositivo no tiene instalado WhatsApp", Snackbar.LENGTH_LONG).show();
                }
            //TASA DE ALCOHOL ALTA
            } else if (tasa_alc > 0.5){
                resultado.setText(getDosDecimales(tasa_alc) + " Peligroso");
                resultado.setTextColor(Color.RED);

                //ABRIR WHATSAPP
                Intent whatsapp_peligroso = new Intent(Intent.ACTION_SEND);
                whatsapp_peligroso.setType("text/plain");
                whatsapp_peligroso.setPackage("com.whatsapp");
                whatsapp_peligroso.putExtra(Intent.EXTRA_TEXT, "Mi tasa de alcoholemia es alta ("+tasa_alc+"g/l), por favor contacta conmigo o alguien cercano.");
                try {
                    startActivity(whatsapp_peligroso);
                } catch (android.content.ActivityNotFoundException ex) {
                    ex.printStackTrace();
                    Snackbar.make(view, "El dispositivo no tiene instalado WhatsApp", Snackbar.LENGTH_LONG).show();
                }
            }
        }catch (Exception e){
            Toast.makeText(getApplicationContext(), "Revise que todos los datos se han rellenado", Toast.LENGTH_SHORT).show();
        }

    }

     public void show_help(View view) {
         LayoutInflater inflater = (LayoutInflater) getSystemService(Context.LAYOUT_INFLATER_SERVICE);
         View myScrollView = inflater.inflate(R.layout.scroll_text, null, false);
         TextView tv = (TextView) myScrollView
                 .findViewById(R.id.textViewWithScroll);
         tv.setText("");
         tv.append("Las variables son las siguinetes:\n");
         tv.append("Peso: tu peso en kilogramos.\n");
         tv.append("Sexo: selecciona tu sexo biológico.\n\n");
         tv.append("La fórmula de calculo es la siguiente:\n");
         tv.append("Datos bebida/(Peso*Coeficiente de difusión)\n");
         tv.append("Toda nuestra metodología puede ser consultada en la web, puede acceder mediante en botón del menú.");

         new AlertDialog.Builder(MainMenu.this).setView(myScrollView)
                 .setTitle("Scroll View")
                 .setPositiveButton("OK", new DialogInterface.OnClickListener() {
                     @TargetApi(11)
                     public void onClick(DialogInterface dialog, int id) {
                         dialog.cancel();
                     }

                 }).show();

     }

     public void show_web(View view){
         Uri link = Uri.parse("https://www.android.com/intl/es_es/");
         Intent web = new Intent(Intent.ACTION_VIEW, link);
         startActivity(web);
     }
 }