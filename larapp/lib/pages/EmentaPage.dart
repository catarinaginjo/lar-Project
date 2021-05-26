import 'package:flutter/material.dart';

import 'Menu.dart';

/*
class Ementa extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Ementa semanal'),
      ),
      drawer: Menu(), //menu hamburguer
      /*body: new Container(
        child: new ListView.separated(
          itemBuilder: (context, position) {
            return Menu();
          },
          separatorBuilder: (context, position) {
            return Menu();
          },
        ),
      ),*/
      
    );
  }
}*/

class EmentaPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Ementa'),
        backgroundColor: Colors.blueGrey[300],
      ),
      drawer: Menu(), //menu hamburguer
      body: Center(
        
        child: new ListView(
          padding: const EdgeInsets.all(8),
          children: <Widget>[
            Card(
                child: ListTile(
              title: Text("Battery Full"),
              subtitle: Text("The battery is full."),
            )),
            Card(
                child: ListTile(
              title: Text("Anchor"),
            )),
          ],
        ),
      ),
    );
  }
}
