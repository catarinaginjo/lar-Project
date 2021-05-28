import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:lar_mobile/pages/HomePage.dart';
import 'package:lar_mobile/pages/Menu.dart';
import 'package:lar_mobile/GlobalProvider.dart';

import 'EmentaPage.dart';

class ListaEmentasPage extends StatefulWidget {
  _EmentasState createSate() => _EmentasState();

  @override
  State<StatefulWidget> createState() {
    return _EmentasState();
  }
}

class _EmentasState extends State<ListaEmentasPage> {
  List ementas = [];
  bool isLoading = false;

  @override
  void initState() {
    super.initState();
    this.getEmentas();
  }

  getEmentas() async {
    var myurl = "http://larsendim.pt/api/ementas";
    var response = await http.get(Uri.parse(myurl));
    //para aparecerem logo os dados
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body)['result'];
      //print(items);
      ementas = items;
    } else {
      setState(() {
        ementas = [];
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Lista de ementas"),
        backgroundColor: Colors.blueGrey[300],
      ),
      drawer: Menu(), //menu hamburguer
      body: getBody(),
    );
  }

  Widget getBody() {
    if (ementas.contains(null) || ementas.length < 0 || isLoading) {
      // "loading"
      return Center(
          child: CircularProgressIndicator(
        valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
      ));
    }
    return ListView.builder(
        itemCount: ementas.length, //vai buscar a quantidade de ementas à lista
        itemBuilder: (context, index) {
          return getCard(ementas[index]);
        });
  }
//quero a ementa mais recente em cima

  Widget getCard(ementa) {
    var fullname =
        " Ementa de: " + ementa['data_inicio'] + " a " + ementa['data_fim'];
    return Card(
      elevation: 1.5,
      child: Padding(
        padding: const EdgeInsets.all(15.0),
        child: ListTile(
          onTap: () {
            GlobalProvider().engine.currentEmentaID = ementa['id'];
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => EmentaPage(),
              ),
            );
          },
          title: Row(
            children: <Widget>[
              Container(
                width: 5,
                height: 5,
              ),
              SizedBox(
                width: 20,
              ),
              Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: <Widget>[
                  SizedBox(
                      width: MediaQuery.of(context).size.width - 140,
                      child: Text(
                        fullname.toString(),
                        style: TextStyle(fontSize: 17),
                      )),
                  SizedBox(
                    height: 10,
                  ),
                ],
              )
            ],
          ),
        ),
      ),
    );
  }
}
