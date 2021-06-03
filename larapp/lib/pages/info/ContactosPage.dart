import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:url_launcher/url_launcher.dart';
import 'package:lar_mobile/pages/Menu.dart';

//import 'package:url_launcher/url_launcher.dart';
class ContactosPage extends StatefulWidget {
  _ContactosState createSate() => _ContactosState();

  @override
  State<StatefulWidget> createState() {
    return _ContactosState();
  }
}

class _ContactosState extends State<ContactosPage>
    with SingleTickerProviderStateMixin {
  List contactos = [];
  List contactos_f = [];
  bool isLoading = false;

  TabController? _tabController;

  @override
  void initState() {
    super.initState();
    this.getListaContactos();
    this.getListaContactosFuncionarios();
    _tabController = TabController(length: 2, vsync: this);
  }

  getListaContactosFuncionarios() async {
    var myurl = "http://larsendim.pt/api/funcionarios";
    var response = await http.get(Uri.parse(myurl));
    //para aparecerem logo os dados
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body)['result'];
      contactos_f = items;
    } else {
      setState(() {
        contactos_f = [];
        isLoading = false;
      });
    }
  }

  getListaContactos() async {
    var myurl = "http://larsendim.pt/api/contactos";
    var response = await http.get(Uri.parse(myurl));
    //para aparecerem logo os dados
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body)['result'];
      contactos = items;
    } else {
      setState(() {
        contactos = [];
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Lista de Contactos"),
        backgroundColor: Colors.blueGrey[300],
      ),
      drawer: Menu(), //menu hamburguer
      body: Column(
        children: <Widget>[
          Padding(
            padding: const EdgeInsets.symmetric(vertical: 10, horizontal: 5),
            child: TabBar(
              controller: _tabController,
              labelColor: Colors.blue,
              isScrollable: true,
              indicatorColor: Colors.transparent,
              unselectedLabelColor: Colors.grey,
              unselectedLabelStyle: TextStyle(
                fontSize: 16,
                color: Colors.grey,
                fontWeight: FontWeight.w700,
              ),
              labelStyle: TextStyle(
                fontSize: 16,
                fontWeight: FontWeight.w700,
              ),
              tabs: <Widget>[
                Text('Gerais'),
                Text('Funcionários'),
              ],
            ),
          ),
          Expanded(
            child: TabBarView(
              controller: _tabController,
              children: <Widget>[
                Center(child: getBody()),
                Center(child: getBodyFuncionarios()),
              ],
            ),
          ),
        ],
      ),
    );
  }

  Widget getBody() {
    if (contactos.contains(null) || contactos.length < 0 || isLoading) {
      return Center(
          child: CircularProgressIndicator(
        valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
      ));
    }
    return ListView.builder(
        itemCount:
            contactos.length, //vai buscar a quantidade de contactos à lista
        itemBuilder: (context, index) {
          return getCard(contactos[index]);
        });
  }

  Widget getBodyFuncionarios() {
    if (contactos_f.contains(null) || contactos_f.length < 0 || isLoading) {
      return Center(
          child: CircularProgressIndicator(
        valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
      ));
    }
    return ListView.builder(
        itemCount:
            contactos_f.length, //vai buscar a quantidade de contactos à lista
        itemBuilder: (context, index) {
          return getCardFuncionarios(contactos_f[index]);
        });
  }

  Widget getCard(contacto) {
    var fullname = contacto['nome'] + " " + contacto['numero'];
    return Card(
      elevation: 10.0,
      child: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListTile(
          leading: Icon(Icons.add_call),
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
                      fullname.toString(),
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
                  ElevatedButton(
                    onPressed: _makingPhoneCall,
                    child: Text('Ligar'),
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

  Widget getCardFuncionarios(contacto_f) {
    var fullname = contacto_f['nome'] +
        " " +
        contacto_f['apelido'] +
        "\n" +
        "Cargo: " +
        contacto_f['cargo'] +
        "\n" +
        "Contacto: " +
        contacto_f['contacto'];
    return Card(
      elevation: 10.0,
      child: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListTile(
          leading: Icon(Icons.add_call),
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
                      fullname.toString(),
                      style: TextStyle(fontSize: 17),
                    ),
                  ),
                  ElevatedButton(
                    onPressed: _makingPhoneCall,
                    child: Text('Ligar'),
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

  _makingPhoneCall() async {
    const number = '9876543210';
    if (await canLaunch(number)) {
      await launch(number);
    } else {
      throw 'Could not launch $number';
    }
  }
}
