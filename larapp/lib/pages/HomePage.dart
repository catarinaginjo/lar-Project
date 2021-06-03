import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import './Menu.dart';

class HomePage extends StatefulWidget {
  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  List recados = [];
  bool isLoading = false;

  @override
  void initState() {
    super.initState();
    this.getListaUtentes();
  }

  getListaUtentes() async {
    var myurl = "http://larsendim.pt/api/recados";
    var response = await http.get(Uri.parse(myurl));
    //para aparecerem logo os dados
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body)['result'];
      print(items);
      recados = items;
    } else {
      setState(() {
        recados = [];
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Página Inicial"),
        backgroundColor: Colors.blue.shade400,
      ),
      drawer: Menu(), //menu hamburguer

      body: new Container(
        child: getBody(),
      ),
    );
  }

  Widget getBody() {
    if (recados.contains(null) || recados.length < 0 || isLoading) {
      return Center(
          child: CircularProgressIndicator(
        valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
      ));
    }
    return ListView.builder(
        itemCount: recados.length, //vai buscar a quantidade de recados à lista
        itemBuilder: (context, index) {
          return getCard(recados[index]);
        });
  }

  Widget getCard(recado) {
    var recado_id = recado['id'];
    var assunto = recado['assunto'];
    var descricao = recado['descriçao'];
    //var data = recado['created_at'];

    var total = "Recado " +
        recado_id.toString() +
        "\n\n" +
        "Assunto: " +
        "\n" +
        assunto +
        "\n\n" +
        "Descrição: " +
        "\n" +
        descricao;

    return Card(
      elevation: 10.0,
      child: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListTile(
          title: Row(
            children: <Widget>[
              SizedBox(
                width: 4,
              ),
              Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: <Widget>[
                  SizedBox(
                    width: MediaQuery.of(context).size.width - 140,
                    child: Text(
                      total.toString(),
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
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
