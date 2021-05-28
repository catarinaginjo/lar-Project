import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:flutter/cupertino.dart';
import 'package:lar_mobile/pages/Menu.dart';
import 'package:lar_mobile/GlobalProvider.dart';

class EmentaPage extends StatefulWidget {
  _EmentasS createState() => _EmentasS();
}

class _EmentasS extends State<EmentaPage> {
  List this_ementa = [];
  bool isLoading = false;

  @override
  void initState() {
    super.initState();
    this.get_this_ementa();
  }

  get_this_ementa() async {
    var myurl = "http://larsendim.pt/api/ementas";
    var response = await http.get(Uri.parse(myurl));
    var ementaid = GlobalProvider().engine.currentEmentaId.toString();
    //para aparecerem logo os dados
    print(ementaid);
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body)['result'];
      print(items);
      this_ementa = items;
    } else {
      setState(() {
        this_ementa = [];
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        resizeToAvoidBottomInset: false,
        appBar: AppBar(
          title: Text('Ementa'),
          backgroundColor: Colors.blueGrey[300],
        ),
        drawer: Menu(),
        body: SingleChildScrollView(
          child: Column(
            children: <Widget>[
              getDiaSemana("Segunda-feira"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getDiaSemana("Terça-feira"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getDiaSemana("Quarta-feira"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getDiaSemana("Quinta-feira"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getDiaSemana("Sexta-feira"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getDiaSemana("Sábado"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getDiaSemana("Domingo"),
              getTitle("Sopa"),
              getDadosEmenta("-"),
              getTitle("Almoço"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
              getTitle("Jantar"),
              getDadosEmenta("-"),
              getTitle("Sobremesa"),
              getDadosEmenta("-"),
            ],
          ),
        ),
      ),
    );
  }

/*
  Widget getContainerEmenta(dia) {
    return Column(
      children: <Widget>[
        getDiaSemana(dia),
        getTitle("Sopa"),
        getDadosEmenta("-"),
        getTitle("Almoço"),
        getDadosEmenta("-"),
        getTitle("Sobremesa"),
        getDadosEmenta("-"),
        getTitle("Jantar"),
        getDadosEmenta("-"),
        getTitle("Sobremesa"),
        getDadosEmenta("-"),
      ],
    );
  }
*/
  Widget getDiaSemana(name) {
    return Container(
      margin: EdgeInsets.all(15),
      alignment: Alignment.center,
      child: new Text(
        name,
        style: TextStyle(
            fontWeight: FontWeight.bold,
            fontSize: 20.0,
            fontFamily: 'sans-serif-light',
            color: Colors.black),
      ),
    );
  }

  Widget getTitle(name) {
    return Padding(
      padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 25.0),
      child: new Row(
        mainAxisSize: MainAxisSize.max,
        children: <Widget>[
          new Column(
            mainAxisAlignment: MainAxisAlignment.start,
            mainAxisSize: MainAxisSize.min,
            children: <Widget>[
              new Text(
                name,
                style: TextStyle(fontSize: 16.0, fontWeight: FontWeight.bold),
              ),
            ],
          ),
        ],
      ),
    );
  }
}

Widget getDadosEmenta(dado) {
  return Padding(
    padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 2.0),
    child: new Row(
      mainAxisSize: MainAxisSize.max,
      children: <Widget>[
        new Flexible(
          child: Text(
            //info_utente['nome'].toString(),
            dado.toString(),
            style: TextStyle(fontSize: 17),
          ),
        ),
      ],
    ),
  );
}

// Widget tabela

Widget getTable() {
  return Container(
    width: 203,
    height: 200,
    child: Table(
      defaultColumnWidth: FixedColumnWidth(150.0),
      border: TableBorder.all(
          color: Colors.black, style: BorderStyle.solid, width: 1),
      children: [
        TableRow(children: [
          Column(children: [Text('Sopa')]),
          Column(children: [Text('')]),
        ]),
        TableRow(children: [
          Column(children: [Text('Almoço')]),
          Column(children: [Text('')]),
        ]),
        TableRow(children: [
          Column(children: [Text('Sobremesa')]),
          Column(children: [Text('')]),
        ]),
        TableRow(children: [
          Column(children: [Text('Jantar')]),
          Column(children: [Text('')]),
        ]),
        TableRow(children: [
          Column(children: [Text('Sobremesa')]),
          Column(children: [Text('')]),
        ]),
      ],
    ),
  );
}
/* Dropdown

children: <Widget>[
              /*new DropdownButton<String>(
                items: <String>['Aaaaa', 'B', 'C', 'D'].map((String value) {
                  return new DropdownMenuItem<String>(
                    value: value,
                    child: new Text(value),
                  );
                }).toList(),
                onChanged: (_) {},
              ),*/


 */
