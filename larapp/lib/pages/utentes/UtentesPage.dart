import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:lar_mobile/pages/Menu.dart';
import 'package:lar_mobile/GlobalProvider.dart';
import 'package:lar_mobile/pages/utentes/UtentePage.dart';

const url_img = 'https://larsendim.pt/storage/images/utentes/';

class UtentesPage extends StatefulWidget {
  _UtentesState createSate() => _UtentesState();

  @override
  State<StatefulWidget> createState() {
    return _UtentesState();
  }
}

class _UtentesState extends State<UtentesPage> {
  List utentes = [];
  bool isLoading = false;

  @override
  void initState() {
    super.initState();
    this.getListaUtentes();
  }

  getListaUtentes() async {
    var myurl = "https://larsendim.pt/api/utentes";
    var response = await http.get(Uri.parse(myurl));
    //para aparecerem logo os dados
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body)['result'];
      //print(items);
      utentes = items;
    } else {
      setState(() {
        utentes = [];
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Lista de Utentes"),
        backgroundColor: Colors.blueGrey[300],
      ),
      drawer: Menu(), //menu hamburguer
      body: getBody(),
    );
  }

  Widget getBody() {
    if (utentes.contains(null) || utentes.length < 0 || isLoading) {
      return Center(
          child: CircularProgressIndicator(
        valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
      ));
    }
    return ListView.builder(
        itemCount: utentes.length, //vai buscar a quantidade de utentes à lista
        itemBuilder: (context, index) {
          return getCard(utentes[index]);
        });
  }

  Widget getCard(utente) {
    //var utenteid = GlobalProvider().engine.currentUtenteID.toString();
    var fullname = utente['nome'] + " " + utente['apelido'];

    return Card(
      elevation: 10.0,
      child: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListTile(
          onTap: () {
            
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => UtentePage(),
              ),
            );
          },
          title: Row(
            children: <Widget>[
              Container(
                width: 60,
                height: 60,
                decoration: BoxDecoration(
                  color: Colors.white,
                  borderRadius: BorderRadius.circular(60 / 2),
                  image: DecorationImage(
                    fit: BoxFit.cover,
                    image: NetworkImage(
                        url_img + utente['id'].toString() + '.png'),
                  ),
                ),
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
