import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:lar_mobile/GlobalProvider.dart';

import 'StockPage.dart';

class FoodPage extends StatefulWidget {
  _FoodState createSate() => _FoodState();

  @override
  State<StatefulWidget> createState() {
    return _FoodState();
  }
}

class _FoodState extends State<FoodPage> {
  List stock_food = [];
  bool isLoading = false;
  bool _status = true;

  @override
  void initState() {
    super.initState();
    this.getListaStock_food();
  }

  getListaStock_food() async {
    var myurl = "https://larsendim.pt/api/produtos_c/Equipamentos";
    // var myurl = "https://larsendim.pt/api/produtos";
    var response = await http.get(Uri.parse(myurl));
    //para aparecerem logo os dados
    setState(() {
      response;
    });

    //print(response.body);
    if (response.statusCode == 200) {
      var items = json.decode(response.body);
      //var items = json.decode(response.body)['result'];
      print(response.body);
      stock_food = items;
    } else {
      setState(() {
        stock_food = [];
        isLoading = false;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Stock - Alimentação"),
        backgroundColor: Colors.blueGrey[300],
      ),
      body: getBody(),
    );
  }

  Widget getBody() {
    if (stock_food.contains(null) || stock_food.length < 0 || isLoading) {
      return Center(
          child: CircularProgressIndicator(
        valueColor: new AlwaysStoppedAnimation<Color>(Colors.blue),
      ));
    }
    return ListView.builder(
        itemCount:
            stock_food.length, //vai buscar a quantidade de stock_food à lista
        itemBuilder: (context, index) {
          return getCard(stock_food[index]);
        });
  }

  Widget getCard(stock_food) {
    var produtoID = GlobalProvider().engine.currentProdutoID.toString();
    var quantidade = stock_food['reorder_point'];
    var fullname =
        stock_food['nome_produto'] + "\n" + "Quantidade atual: " + quantidade;

    return Card(
      elevation: 10.0,
      child: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListTile(
          leading: Icon(Icons.arrow_forward_rounded),
          title: Row(
            children: <Widget>[
              SizedBox(
                width: 0,
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
