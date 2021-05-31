package com.example.idrunk2;

import android.content.Intent;
import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Handler;

public class SplashIntro extends AppCompatActivity {
    private static int SPLASH_TIME_OUT=4000;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.welcome_screen);
        //noinspection deprecation
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent inicio = new Intent(SplashIntro.this, MainMenu.class);
                startActivity(inicio);
                finish();
            }
        },SPLASH_TIME_OUT);
    }
}