import 'package:flutter/material.dart';
import 'package:lar_mobile/pages/stock/FoodStock.dart';
import 'package:lar_mobile/pages/stock/create.dart';

import '../Menu.dart';

class StockPage extends StatefulWidget {
  @override
  _StockPageState createState() => _StockPageState();
}

class _StockPageState extends State<StockPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Stock'),
        backgroundColor: Colors.blueGrey[300],
      ),
      drawer: Menu(), //menu hamburguer
      body: Padding(
        padding: const EdgeInsets.all(80),
        child: Column(children: [
          ElevatedButton(
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => MyApp2(),
                ),
              );
            },
            child: Text('Equipamentos diários'),
            style: ButtonStyle(
                backgroundColor: MaterialStateProperty.all(Colors.grey[600]),
                padding: MaterialStateProperty.all(EdgeInsets.all(10)),
                textStyle: MaterialStateProperty.all(TextStyle(fontSize: 20))),
          ),
          ElevatedButton.icon(
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => FoodPage(),
                ),
              );
            },
            label: Text('Alimentação'),
            icon: Icon(Icons.food_bank),
            style: ButtonStyle(
                backgroundColor: MaterialStateProperty.all(Colors.green),
                padding: MaterialStateProperty.all(EdgeInsets.all(10)),
                textStyle: MaterialStateProperty.all(TextStyle(fontSize: 20))),
          ),
          ElevatedButton(
            onPressed: () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => FoodPage(),
                ),
              );
            },
            child: Text('Higiene'),
            style: ButtonStyle(
                backgroundColor: MaterialStateProperty.all(Colors.red[200]),
                padding: MaterialStateProperty.all(EdgeInsets.all(10)),
                textStyle: MaterialStateProperty.all(TextStyle(fontSize: 20))),
          ),
        ]),
      ),
    );
  }
}
