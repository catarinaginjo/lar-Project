import 'package:flutter/material.dart';
import 'package:lar_mobile/pages/HomePage.dart';
import 'package:flutter/cupertino.dart';

class ChangePasswordPage extends StatefulWidget {
  @override
  MapScreenState createState() => MapScreenState();
}

class MapScreenState extends State<ChangePasswordPage> with SingleTickerProviderStateMixin {
  final _formKey = GlobalKey<FormState>();
  String email = "";
  String password = "";

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white, //background geral
      appBar: AppBar(
        title: Text("Alteração de Password"),
        backgroundColor: Colors.blueGrey[300],
        elevation: 15,
      ),
      body: Column(
        children: <Widget>[
          Container(padding: const EdgeInsets.all(100)),
          Padding(
            padding: const EdgeInsets.only(
                left: 15.0, right: 15.0, top: 15, bottom: 0),
            child: TextField(
              obscureText: true,
              decoration: InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: 'Password atual',
                  hintText: 'Insira a sua password.'),
            ),
          ),
          Container(padding: const EdgeInsets.all(5)),
          Padding(
            padding: const EdgeInsets.only(
                left: 15.0, right: 15.0, top: 15, bottom: 0),
            child: TextField(
              obscureText: true,
              decoration: InputDecoration(
                  border: OutlineInputBorder(),
                  labelText: 'Nova password',
                  hintText: 'Insira a sua nova password.'),
            ),
          ),
          Container(padding: const EdgeInsets.all(25)),
          Container(
            height: 30,
            width: 200,
            decoration: BoxDecoration(
                color: Colors.blueGrey[100],
                borderRadius: BorderRadius.circular(20)),
            child: FlatButton(
              onPressed: () {
                Navigator.push(
                    context, MaterialPageRoute(builder: (_) => HomePage()));
              },
              child: Text(
                'Alterar password',
                style: TextStyle(color: Colors.black, fontSize: 18),
              ),
            ),
          ),
        ],
      ),
    );
  }
}
