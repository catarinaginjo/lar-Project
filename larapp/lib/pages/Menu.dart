import 'package:flutter/material.dart';
import 'package:lar_mobile/pages/info/ContactosPage.dart';
import 'package:lar_mobile/pages/stock/StockPage.dart';

import 'LoginPage.dart';
import 'perfil/Profilepage.dart';
import 'ementa/ListaEmentasPage.dart';
import 'HomePage.dart';
import 'utentes/UtentesPage.dart';

class Menu extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Drawer(
        child: Column(
      children: <Widget>[
        Container(
          width: double.infinity,
          padding: EdgeInsets.all(20),
          decoration: BoxDecoration(
            image: DecorationImage(
                image: NetworkImage(
                    'https://image.freepik.com/free-photo/light-peach-blue-bokeh-light-abstract-background_73588-56.jpg'),
                fit: BoxFit.fill),
          ),
          child: Center(
            child: Column(
              children: <Widget>[
                Container(
                  width: 125,
                  height: 125,
                  margin: EdgeInsets.only(top: 50),
                  decoration: BoxDecoration(
                    shape: BoxShape.circle,
                    image: DecorationImage(
                        image: NetworkImage(
                            'https://paperio.ca/wp-content/uploads/2017/03/slide-6-older-woman-big-smile.png'),
                        fit: BoxFit.fill),
                  ),
                ),
                Text(
                  'Marta Peres',
                  style: TextStyle(fontSize: 25, color: Colors.black),
                ),
                Text(
                  'Auxiliar',
                  style: TextStyle(fontSize: 20, color: Colors.black),
                ),
              ],
            ),
          ),
        ),
        ListTile(
          leading: Icon(Icons.home),
          title: Text('Página inicial', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => HomePage(),
              ),
            );
          },
        ),
        ListTile(
          leading: Icon(Icons.person),
          title: Text('Perfil', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => ProfilePage(),
              ),
            );
          },
        ),
        ListTile(
          leading: Icon(Icons.group),
          title: Text('Lista de utentes', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => UtentesPage(),
              ),
            );
          },
        ),
        ListTile(
          leading: Icon(Icons.food_bank_rounded),
          title: Text('Ementa semanal', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => ListaEmentasPage(),
              ),
            );
          },
        ),
        ListTile(
          leading: Icon(Icons.add_shopping_cart),
          title: Text('Stock', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => StockPage(),
              ),
            );
          },
        ),
        ListTile(
          leading: Icon(Icons.add_call),
          title: Text('Contactos', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => ContactosPage(),
              ),
            );
          },
        ),
        ListTile(
          leading: Icon(Icons.arrow_back),
          title: Text('Terminar sessão', style: TextStyle(fontSize: 20)),
          onTap: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => LoginDemo(),
              ),
            );
          },
        ),
      ],
    ));
  }
}
