package com.example.idrunk2;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.NumberPicker;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import java.util.ArrayList;

public class ListaActivity extends AppCompatActivity {

    private ListView listview;
    private ArrayList<Alcohol> alcohol;
    private ArrayList<String> names;
    private EditText new_elem, new_grados;
    private ArrayAdapter<String> adapter;
    private int i;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.lista);

        new_elem = findViewById(R.id.nuevo_elem);
        new_grados = findViewById(R.id.nuevo_elem_grados);

        listview = (ListView) findViewById(R.id.listview);

        alcohol = new ArrayList<Alcohol>();
        alcohol.add(new Alcohol(37.5, "Combinado de Barceló",0, 60));
        alcohol.add((new Alcohol(47, "Combinado de Beefeater",0, 60)));
        alcohol.add((new Alcohol(35, "Chupito de Jagger",0, 30)));
        alcohol.add((new Alcohol(12, "Copa de Vino",0, 100)));
        alcohol.add((new Alcohol(4, "Botellín de Cerveza",0, 250)));

        names = new ArrayList<String>();
        for(i=0; i<alcohol.size(); i++){
            names.add(alcohol.get(i).getNombre()+" ("+alcohol.get(i).getGrados()+"°)");
        }

        adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_multiple_choice, names);

        listview.setAdapter(adapter);

        listview.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int position, long id) {
                Toast.makeText(ListaActivity.this, "Has pulsado: "+ alcohol.get(position).getNombre(), Toast.LENGTH_LONG).show();
                if(listview.isItemChecked(position)){
                    elector_cantidad(position);
                }
            }
        });
    }

    //OBTENER DATOS PARA EL VALUE "T"
    public double obtenerDatos(){
        double total = 0;
        for(int j=0; j<alcohol.size(); j++){
           if(listview.isItemChecked(j)){
                if(alcohol.get(j).getCantidad()==0){
                    alcohol.get(j).setCantidad(1);
                }

                total += ((alcohol.get(j).getGrados()/100)*alcohol.get(j).getVolumen()*0.8)*alcohol.get(j).getCantidad();
           }
        }
        return total;
    }


    //AGREGAR NUEVO ALCOHOL
    public void agregar(View view){
        String new_name = new_elem.getText().toString();
        double new_grades = Double.parseDouble(String.valueOf(new_grados.getText()));
        Alcohol a = new Alcohol(new_grades, new_name,0, 0);
        alcohol.add(a);
        volumen_setter(alcohol.size()-1);
        names.add(a.getNombre()+" ("+a.getGrados()+"º)");
        adapter.notifyDataSetChanged();
        new_elem.setText("");
        new_grados.setText("0");
    }

    //VOLVER AL MENÚ PRINCIPAL
    public void terminar(View view){
        Intent start_principal = new Intent(ListaActivity.this, MainMenu.class);
        start_principal.putExtra("totalT", obtenerDatos());
        startActivity(start_principal);
    }

    //ELEGIR VOLUMEN
    public void volumen_setter(int pos) {
        final String[] volumenes = {"Combinado (60ml)", "Chupito (30ml)", "Vaso de vino (100ml)", "Botellin (200ml)", "Otros"};

        AlertDialog.Builder builder = new AlertDialog.Builder(ListaActivity.this);
        builder.setTitle("Elija el volumen consumido:");
        builder.setItems(volumenes, new DialogInterface.OnClickListener() {
            @RequiresApi(api = Build.VERSION_CODES.Q)
            public void onClick(DialogInterface dialog, int item) {
                if (volumenes[item].equals("Combinado (60ml)"))
                    alcohol.get(pos).setVolumen(60);
                else if (volumenes[item].equals("Chupito (30ml)"))
                    alcohol.get(pos).setVolumen(30);
                else if (volumenes[item].equals("Vaso de vino (100ml)"))
                    alcohol.get(pos).setVolumen(100);
                else if (volumenes[item].equals("Botellín (200ml)"))
                    alcohol.get(pos).setVolumen(200);
                else if (volumenes[item].equals("Otros"))
                    elector_otros(pos);
            }
        }).show();
        adapter.notifyDataSetChanged();
    }

    //ELEGIR VOLUMEN (OPCIÓN "OTROS")
    @RequiresApi(api = Build.VERSION_CODES.Q)
    private void elector_otros(int pos){
        NumberPicker vol_picker = new NumberPicker(this);
        vol_picker.setSelectionDividerHeight(10);
        vol_picker.setMaxValue(500);
        vol_picker.setMinValue(30);
        NumberPicker.OnValueChangeListener valchanger = new NumberPicker.OnValueChangeListener() {
            @Override
            public void onValueChange(NumberPicker picker, int oldVal, int newVal) {
                alcohol.get(pos).setVolumen(newVal);
            }
        };
        vol_picker.setOnValueChangedListener(valchanger);
        AlertDialog.Builder builder = new AlertDialog.Builder(this).setView(vol_picker);
        builder.setTitle("¿Cuanto volumen consumió?");
        builder.setPositiveButton("Ok", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {

            }
        });
        builder.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {

            }
        });
        builder.show();
    }

    //ELEGIR CANTIDAD
    private void elector_cantidad(int pos){
        NumberPicker cant_picker = new NumberPicker(this);
        cant_picker.setMaxValue(15);
        cant_picker.setMinValue(1);
        NumberPicker.OnValueChangeListener valchanger = new NumberPicker.OnValueChangeListener() {
            @Override
            public void onValueChange(NumberPicker picker, int oldVal, int newVal) {
                alcohol.get(pos).setCantidad(newVal);
            }
        };
        cant_picker.setOnValueChangedListener(valchanger);
        AlertDialog.Builder builder = new AlertDialog.Builder(this).setView(cant_picker);
        builder.setTitle("¿Cuantas unidades consumió?");
        builder.setPositiveButton("Ok", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {

            }
        });
        builder.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {

            }
        });
        builder.show();
        adapter.notifyDataSetChanged();
    }
}