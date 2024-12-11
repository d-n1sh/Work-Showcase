package sg.edu.rp.c346.id21012612.ese;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.ArrayList;

public class CListActivity extends AppCompatActivity {

    ListView lvc;
    ArrayList<String> al;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        lvc = findViewById(R.id.lvComics);

        al.add(0,"Bill Finger,");
        al.add(1,"Bob Kane, ");
        al.add(2,"Jerry Robinson");
        lv = new Comic("Batman #1",al);

        ArrayAdapter aa = new ArrayAdapter<Comic>(this, android.R.layout.simple_list_item_1, Comic);
        lvc.setAdapter(aa);

    }
}