import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:lar_mobile/pages/ementa/ListaEmentasPage.dart';
import 'package:lar_mobile/GlobalProvider.dart';
import 'package:lar_mobile/models/ementa.dart';

import 'package:http/http.dart' as http;

const url = 'https://larsendim.pt/api/ementas/';

class NewEmentaPage extends StatefulWidget {
  @override
  MapScreenState createState() => MapScreenState();
}

class MapScreenState extends State<NewEmentaPage>
    with SingleTickerProviderStateMixin {
  late Ementa ementa;

  bool _status = true;
  final FocusNode myFocusNode = FocusNode();
  @override
  void initState() {
    super.initState();
    this.fetchEmenta();
  }

  Future<Ementa> fetchEmenta() async {
    var ementaid = GlobalProvider().engine.currentEmentaID.toString();
    final response = await http.get(Uri.parse(url + ementaid));
    //print("response->");
    //print(response.body);
    if (response.statusCode == 200) {
      // If the server did return a 200 OK response,
      // then parse the JSON.
      return Ementa.fromJson(jsonDecode(response.body));
    } else {
      // If the server did not return a 200 OK response,
      // then throw an exception.
      throw Exception('Failed to ementa');
    }
  }

  @override
  Widget build(BuildContext context) {
    var ementaid = GlobalProvider().engine.currentEmentaID.toString();
    return new Scaffold(
      body: new FutureBuilder<Ementa>(
        future: fetchEmenta(),
        builder: (context, snapshot) {
          if (snapshot.hasData) {
            return _getContainer(snapshot.data);
          } else if (snapshot.hasError) {
            return Text("Error: ${snapshot.error}");
          }
          // By default, show a loading spinner.
          return CircularProgressIndicator();
        },
      ),
    );
  }

  Widget _getContainer(var ementa) {
    return new Container(
      color: Colors.white,
      child: new ListView(
        children: <Widget>[
          Column(
            children: <Widget>[
              new Container(
                height: 70.0,
                color: Colors.white,
                child: new Column(
                  children: <Widget>[
                    Padding(
                      padding: EdgeInsets.only(left: 20.0, top: 20.0),
                      child: new Row(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: <Widget>[
                          new Column(
                            mainAxisAlignment: MainAxisAlignment.end,
                            mainAxisSize: MainAxisSize.min,
                            children: <Widget>[
                              _status ? _getBackIcon() : new Container(),
                            ],
                          ),
                          Padding(
                            padding: EdgeInsets.only(left: 25.0),
                            child: new Text(
                              'EMENTA',
                              style: TextStyle(
                                  fontWeight: FontWeight.bold,
                                  fontSize: 20.0,
                                  fontFamily: 'sans-serif-light',
                                  color: Colors.black),
                            ),
                          ),
                        ],
                      ),
                    ),
                  ],
                ),
              ),
              Column(
                children: <Widget>[
                  Container(
                    height: 8,
                    color: Colors.red,
                  ),
                  Divider(),
                ],
              ),
              new Container(
                height: 40.0,
                child: new Text(
                  ementa.ementa_data,
                  style: TextStyle(
                      fontWeight: FontWeight.bold,
                      fontSize: 20.0,
                      fontFamily: 'sans-serif-light',
                      color: Colors.orange[900]),
                ),
              ),
              new Container(
                height: 40.0,
                child: new Text(
                  ementa.ementa_nutricionista,
                  style: TextStyle(
                      fontWeight: FontWeight.bold,
                      fontSize: 17.0,
                      fontFamily: 'sans-serif-light',
                      color: Colors.black),
                ),
              ),
              Column(
                children: <Widget>[
                  Container(
                    height: 8,
                    color: Colors.red,
                  ),
                  Divider(),
                ],
              ),
              getBody(
                  ementa,
                  "Segunda-feira",
                  ementa.seg_sopa,
                  ementa.seg_almoco,
                  ementa.seg_sob_jantar,
                  ementa.seg_jantar,
                  ementa.seg_sob_jantar),
              new Container(height: 40.0),
              getBody(
                  ementa,
                  "Terça-feira",
                  ementa.ter_sopa,
                  ementa.ter_almoco,
                  ementa.ter_sob_jantar,
                  ementa.ter_jantar,
                  ementa.ter_sob_jantar),
              new Container(height: 40.0),
              getBody(
                  ementa,
                  "Quarta-feira",
                  ementa.qua_sopa,
                  ementa.qua_almoco,
                  ementa.qua_sob_jantar,
                  ementa.qua_jantar,
                  ementa.qua_sob_jantar),
              new Container(height: 40.0),
              getBody(
                  ementa,
                  "Quinta-feira",
                  ementa.qui_sopa,
                  ementa.qui_almoco,
                  ementa.qui_sob_jantar,
                  ementa.qui_jantar,
                  ementa.qui_sob_jantar),
              new Container(height: 40.0),
              getBody(
                  ementa,
                  "Sexta-feira",
                  ementa.sex_sopa,
                  ementa.sex_almoco,
                  ementa.sex_sob_jantar,
                  ementa.sex_jantar,
                  ementa.sex_sob_jantar),
              new Container(height: 40.0),
              getBody(
                  ementa,
                  "Sábado",
                  ementa.sab_sopa,
                  ementa.sab_almoco,
                  ementa.sab_sob_jantar,
                  ementa.sab_jantar,
                  ementa.sab_sob_jantar),
              new Container(height: 40.0),
              getBody(
                  ementa,
                  "Domingo",
                  ementa.dom_sopa,
                  ementa.dom_almoco,
                  ementa.dom_sob_jantar,
                  ementa.dom_jantar,
                  ementa.dom_sob_jantar),
              new Container(height: 60.0),
            ],
          ),
        ],
      ),
    );
  }

  Widget getBody(
      ementa, dia, sopa_almoco, almoco, sobremesa_almoco, jantar, sob_jantar) {
    return new Container(
      color: Color(0xffFFFFFF),
      child: Padding(
        padding: EdgeInsets.only(bottom: 4.0),
        child: new Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          mainAxisAlignment: MainAxisAlignment.start,
          children: <Widget>[
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 0.0),
              child: new Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Column(
                    mainAxisAlignment: MainAxisAlignment.start,
                    mainAxisSize: MainAxisSize.min,
                    children: <Widget>[
                      new Text(
                        dia,
                        style: TextStyle(
                            fontSize: 25.0,
                            fontWeight: FontWeight.bold,
                            color: Colors.black),
                      ),
                    ],
                  ),
                  new Column(
                    mainAxisAlignment: MainAxisAlignment.end,
                    mainAxisSize: MainAxisSize.min,
                  )
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 25.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Column(
                    mainAxisAlignment: MainAxisAlignment.start,
                    mainAxisSize: MainAxisSize.min,
                    children: <Widget>[
                      new Text(
                        'Sopa',
                        style: TextStyle(
                            fontSize: 16.0, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 2.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Flexible(
                    child: Text(
                      sopa_almoco,
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 25.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Column(
                    mainAxisAlignment: MainAxisAlignment.start,
                    mainAxisSize: MainAxisSize.min,
                    children: <Widget>[
                      new Text(
                        'Almoço',
                        style: TextStyle(
                            fontSize: 16.0, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 2.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Flexible(
                    child: Text(
                      almoco,
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 25.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Column(
                    mainAxisAlignment: MainAxisAlignment.start,
                    mainAxisSize: MainAxisSize.min,
                    children: <Widget>[
                      new Text(
                        'Sobremesa',
                        style: TextStyle(
                            fontSize: 16.0, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 2.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Flexible(
                    child: Text(
                      sobremesa_almoco,
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 25.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Column(
                    mainAxisAlignment: MainAxisAlignment.start,
                    mainAxisSize: MainAxisSize.min,
                    children: <Widget>[
                      new Text(
                        'Jantar',
                        style: TextStyle(
                            fontSize: 16.0, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 2.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                children: <Widget>[
                  new Flexible(
                    child: Text(
                      jantar,
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 25.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                mainAxisAlignment: MainAxisAlignment.start,
                children: <Widget>[
                  Expanded(
                    child: Container(
                      child: new Text(
                        'Sobremesa',
                        style: TextStyle(
                            fontSize: 16.0, fontWeight: FontWeight.bold),
                      ),
                    ),
                    flex: 2,
                  ),
                ],
              ),
            ),
            Padding(
              padding: EdgeInsets.only(left: 25.0, right: 25.0, top: 2.0),
              child: new Row(
                mainAxisSize: MainAxisSize.max,
                mainAxisAlignment: MainAxisAlignment.start,
                children: <Widget>[
                  Flexible(
                    child: Padding(
                      padding: EdgeInsets.only(right: 10.0),
                      child: Text(
                        sob_jantar,
                        style: TextStyle(fontSize: 17),
                      ),
                    ),
                    flex: 2,
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }

  @override
  void dispose() {
    // Clean up the controller when the Widget is disposed
    myFocusNode.dispose();
    super.dispose();
  }

  Widget _getBackIcon() {
    return new GestureDetector(
      child: new Icon(
        Icons.arrow_back_ios,
        color: Colors.black,
        size: 22.0,
      ),
      onTap: () {
        Navigator.push(
          context,
          MaterialPageRoute(
            builder: (context) => ListaEmentasPage(),
          ),
        );
      },
    );
  }
}
