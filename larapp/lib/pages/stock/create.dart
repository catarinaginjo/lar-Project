import 'dart:async';
import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import 'StockPage.dart';

Future<Stock_movimento> createStockMovimento(String title) async {
  var nome_produto;
  final response = await http.post(
    Uri.parse('https://jsonplaceholder.typicode.com/albums'),
    headers: <String, String>{
      'Content-Type': 'application/json; charset=UTF-8',
    },
    body: jsonEncode(<String, String>{
      'title': title,
      'nome_produto': nome_produto,
    }),
  );

  if (response.statusCode == 201) {
    // If the server did return a 201 CREATED response,
    // then parse the JSON.
    return Stock_movimento.fromJson(jsonDecode(response.body));
  } else {
    // If the server did not return a 201 CREATED response,
    // then throw an exception.
    throw Exception('Failed to create Stock_movimento.');
  }
}

class Stock_movimento {
  final int id;
  final String title;
  final String nome_produto;

  Stock_movimento(
      {required this.id, required this.title, required this.nome_produto});

  factory Stock_movimento.fromJson(Map<String, dynamic> json) {
    return Stock_movimento(
      id: json['id'],
      title: json['title'],
      nome_produto: json['nome_produto'],
    );
  }
}

class MyApp2 extends StatefulWidget {
  MyApp2({Key? key}) : super(key: key);

  @override
  _MyAppState createState() {
    return _MyAppState();
  }
}

class _MyAppState extends State<MyApp2> {
  final TextEditingController _controller = TextEditingController();
  Future<Stock_movimento>? _futureStock_movimento;

  @override
  Widget build(BuildContext context) {
    bool _status = true;
// _status ? _getBackIcon() : new Container(),  onde posso colocar?
    return MaterialApp(
      theme: ThemeData(
        primarySwatch: Colors.blueGrey,
      ),
      home: Scaffold(
        appBar: AppBar(
          title: Text('Nome produto'),
        ),
        body: new Container(
          alignment: Alignment.center,
          padding: const EdgeInsets.all(8.0),
          child: (_futureStock_movimento == null)
              ? buildColumn()
              : buildFutureBuilder(),
        ),
      ),
    );
  }

  Column buildColumn() {
    return Column(
      mainAxisAlignment: MainAxisAlignment.center,
      children: <Widget>[
        TextField(
          controller: _controller,
          decoration: InputDecoration(hintText: 'Insira a quantidade'),
        ),
        ElevatedButton(
          onPressed: () {
            setState(() {
              _futureStock_movimento = createStockMovimento(_controller.text);
            });
          },
          child: Text('Criar'),
        ),
      ],
    );
  }

  FutureBuilder<Stock_movimento> buildFutureBuilder() {
    return FutureBuilder<Stock_movimento>(
      future: _futureStock_movimento,
      builder: (context, snapshot) {
        if (snapshot.hasData) {
          return Text(snapshot.data!.title);
        } else if (snapshot.hasError) {
          return Text('${snapshot.error}');
        }

        return CircularProgressIndicator();
      },
    );
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
            builder: (context) => StockPage(),
          ),
        );
      },
    );
  }
}
