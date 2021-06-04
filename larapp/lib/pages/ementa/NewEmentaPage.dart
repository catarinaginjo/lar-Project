import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:getwidget/getwidget.dart';
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
    //  var ementaid = GlobalProvider().engine.currentEmentaID.toString();
    return new Scaffold(
      body: new FutureBuilder<Ementa>(
        future: fetchEmenta(),
        builder: (context, snapshot) {
          if (snapshot.hasData) {
            return Scaffold(
              appBar: AppBar(
                title: Text("Ementas"),
                backgroundColor: Colors.orange.shade700,
              ),
              // drawer: Menu(), //menu hamburguer
              body: _getContainer(snapshot.data),
            );
          } else if (snapshot.hasError) {
            return Text("Error: ${snapshot.error}");
          }
          // By default, show a loading spinner.
          return Scaffold(
              appBar: AppBar(
                title: Text("Ementas"),
                backgroundColor: Colors.orange.shade700,
              ),
              // drawer: Menu(), //menu hamburguer
              body: Center(
                  child: CircularProgressIndicator(
                valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
              )));
        },
      ),
    );
  }

  Widget _getContainer(var ementa) {
    DateTime date = DateTime.now();
    int day = date.weekday;
    return new Container(
      color: Colors.white,
      child: new ListView(
        children: <Widget>[
          Column(
            children: <Widget>[
              // new Container(
              //   height: 70.0,
              //   color: Colors.white,
              //   child: new Column(
              //     children: <Widget>[
              //       Padding(
              //         padding: EdgeInsets.only(left: 20.0, top: 20.0),
              //         child: new Row(
              //           crossAxisAlignment: CrossAxisAlignment.start,
              //           children: <Widget>[
              //             new Column(
              //               mainAxisAlignment: MainAxisAlignment.end,
              //               mainAxisSize: MainAxisSize.min,
              //               children: <Widget>[
              //                 _status ? _getBackIcon() : new Container(),
              //               ],
              //             ),
              //             Padding(
              //               padding: EdgeInsets.only(left: 25.0),
              //               child: new Text(
              //                 'EMENTA',
              //                 style: TextStyle(
              //                     fontWeight: FontWeight.bold,
              //                     fontSize: 20.0,
              //                     fontFamily: 'sans-serif-light',
              //                     color: Colors.black),
              //               ),
              //             ),
              //           ],
              //         ),
              //       ),
              //     ],
              //   ),
              // ),

              Column(
                children: <Widget>[
                  Card(
                    child: Column(
                      mainAxisSize: MainAxisSize.min,
                      children: <Widget>[
                        ListTile(
                          leading: Icon(Icons.shopping_basket_outlined),
                          title: Text(
                            ementa.ementa_data,
                            style: TextStyle(
                              fontWeight: FontWeight.bold,
                              fontSize: 20.0,
                            ),
                          ),
                          subtitle: Text(
                            ementa.ementa_nutricionista,
                            style: TextStyle(
                              fontWeight: FontWeight.bold,
                              fontSize: 18.0,
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                  // Divider(),
                ],
              ),
              // Container(
              //   height: 40.0,
              //   child: Text(
              //     ementa.ementa_data,
              //     style: TextStyle(
              //         fontWeight: FontWeight.bold,
              //         fontSize: 20.0,
              //         fontFamily: 'sans-serif-light',
              //         color: Colors.orange[900]),
              //   ),
              // ),
              // Container(
              //   height: 40.0,
              //   child: Text(
              //     ementa.ementa_nutricionista,
              //     style: TextStyle(
              //         fontWeight: FontWeight.bold,
              //         fontSize: 18.0,
              //         fontFamily: 'sans-serif-light',
              //         color: Colors.black),
              //   ),
              // ),
              // Column(
              //   children: <Widget>[
              //     Container(
              //       height: 8,
              //       color: Colors.red,
              //     ),
              //     Divider(),
              //   ],
              // ),

              getBody(
                  ementa,
                  "Segunda-feira",
                  ementa.seg_sopa,
                  ementa.seg_almoco,
                  ementa.seg_sob_jantar,
                  ementa.seg_jantar,
                  ementa.seg_sob_jantar,
                  (day == 1) ? true : false),
              Container(height: 2.0),
              getBody(
                  ementa,
                  "Terça-feira",
                  ementa.ter_sopa,
                  ementa.ter_almoco,
                  ementa.ter_sob_jantar,
                  ementa.ter_jantar,
                  ementa.ter_sob_jantar,
                  (day == 2) ? true : false),
              Container(height: 2.0),
              getBody(
                  ementa,
                  "Quarta-feira",
                  ementa.qua_sopa,
                  ementa.qua_almoco,
                  ementa.qua_sob_jantar,
                  ementa.qua_jantar,
                  ementa.qua_sob_jantar,
                  (day == 3) ? true : false),
              Container(height: 2.0),
              getBody(
                  ementa,
                  "Quinta-feira",
                  ementa.qui_sopa,
                  ementa.qui_almoco,
                  ementa.qui_sob_jantar,
                  ementa.qui_jantar,
                  ementa.qui_sob_jantar,
                  (day == 4) ? true : false),
              Container(height: 2.0),
              getBody(
                  ementa,
                  "Sexta-feira",
                  ementa.sex_sopa,
                  ementa.sex_almoco,
                  ementa.sex_sob_jantar,
                  ementa.sex_jantar,
                  ementa.sex_sob_jantar,
                  (day == 5) ? true : false),
              Container(height: 2.0),
              getBody(
                  ementa,
                  "Sábado",
                  ementa.sab_sopa,
                  ementa.sab_almoco,
                  ementa.sab_sob_jantar,
                  ementa.sab_jantar,
                  ementa.sab_sob_jantar,
                  (day == 6) ? true : false),
              Container(height: 2.0),
              getBody(
                  ementa,
                  "Domingo",
                  ementa.dom_sopa,
                  ementa.dom_almoco,
                  ementa.dom_sob_jantar,
                  ementa.dom_jantar,
                  ementa.dom_sob_jantar,
                  (day == 7) ? true : false),
              Container(height: 60.0),
            ],
          ),
        ],
      ),
    );
  }

  Widget getBody(ementa, dia, sopa_almoco, almoco, sobremesa_almoco, jantar,
      sob_jantar, visible) {
    return Container(
      color: Color(0xffFFFFFF),
      child: Padding(
        padding: EdgeInsets.only(bottom: 0.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          mainAxisAlignment: MainAxisAlignment.start,
          children: <Widget>[
            GFAccordion(
              showAccordion: visible,
              title: dia,
              // titleBorder: Border.all(color: Colors.blueGrey, width: 4),
              expandedTitleBackgroundColor: Colors.teal,
              collapsedTitleBackgroundColor: GFColors.LIGHT,
              // titleBorderRadius: BorderRadius.circular(10),
              contentBorderRadius: BorderRadius.all(Radius.circular(0)),
              contentBorder: Border.all(color: Colors.teal, width: 4),
              contentChild: Column(children: [
                Padding(
                  padding: EdgeInsets.only(left: 2.0, top: 12.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        mainAxisSize: MainAxisSize.min,
                        children: <Widget>[
                          Row(
                            children: [
                              Icon(
                                Icons.ramen_dining_outlined,
                              ),
                              SizedBox(width: 10),
                              Text(
                                'Sopa',
                                style: TextStyle(
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.bold),
                              ),
                            ],
                          )
                        ],
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 10.0, top: 10.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Flexible(
                        child: Text(
                          sopa_almoco,
                          style: TextStyle(
                              fontSize: 17, fontStyle: FontStyle.italic),
                        ),
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 2.0, top: 12.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        mainAxisSize: MainAxisSize.min,
                        children: <Widget>[
                          Row(
                            children: [
                              Icon(Icons.dinner_dining),
                              SizedBox(width: 10),
                              Text(
                                'Almoço',
                                style: TextStyle(
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.bold),
                              ),
                            ],
                          )
                        ],
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 10.0, top: 10.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Flexible(
                        child: Text(
                          almoco,
                          style: TextStyle(
                              fontSize: 17, fontStyle: FontStyle.italic),
                        ),
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 2.0, top: 12.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        // mainAxisSize: MainAxisSize.min,
                        children: <Widget>[
                          Row(
                            children: [
                              Icon(Icons.cake),
                              SizedBox(width: 10),
                              Text(
                                ' Sobremesa:',
                                style: TextStyle(
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.bold),
                              ),
                            ],
                          )
                        ],
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 10.0, top: 10.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Flexible(
                        child: Text(
                          sobremesa_almoco,
                          style: TextStyle(
                              fontSize: 17, fontStyle: FontStyle.italic),
                        ),
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 2.0, top: 12.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        mainAxisSize: MainAxisSize.min,
                        children: <Widget>[
                          Row(
                            children: [
                              Icon(
                                Icons.brunch_dining_outlined,
                              ),
                              SizedBox(width: 10),
                              Text(
                                'Jantar',
                                style: TextStyle(
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.bold),
                              ),
                            ],
                          )
                        ],
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 10.0, top: 10.0),
                  child: Row(
                    mainAxisSize: MainAxisSize.max,
                    children: <Widget>[
                      Flexible(
                        child: Text(
                          jantar,
                          style: TextStyle(
                              fontSize: 17, fontStyle: FontStyle.italic),
                        ),
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 2.0, top: 12.0),
                  child: new Row(
                    mainAxisSize: MainAxisSize.max,
                    mainAxisAlignment: MainAxisAlignment.start,
                    children: <Widget>[
                      Expanded(
                        child: Row(children: [
                          Icon(Icons.cake),
                          SizedBox(width: 10),
                          Text(
                            'Sobremesa',
                            style: TextStyle(
                                fontSize: 16.0, fontWeight: FontWeight.bold),
                          ),
                        ]),
                        flex: 2,
                      ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 10.0, top: 10.0),
                  child: new Row(
                    mainAxisSize: MainAxisSize.max,
                    mainAxisAlignment: MainAxisAlignment.start,
                    children: <Widget>[
                      Flexible(
                        child: Padding(
                          padding: EdgeInsets.only(right: 10.0),
                          child: Text(
                            sob_jantar,
                            style: TextStyle(
                                fontSize: 17, fontStyle: FontStyle.italic),
                          ),
                        ),
                        flex: 2,
                      ),
                    ],
                  ),
                ),
              ]),
              // collapsedIcon: Text('Show'),
              // expandedIcon: Text('Hide')
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
        Navigator.pop(context);
      },
    );
  }
}
