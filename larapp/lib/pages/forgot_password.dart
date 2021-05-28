import 'package:flutter/material.dart';
import 'HomePage.dart';

class ForgotPassword extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Recuperação de Password"),
        backgroundColor: Colors.blueGrey[300],
        brightness: Brightness.light,
        iconTheme: IconThemeData(color: Colors.black),
        elevation: 10,
      ),
      body: Center(
        child: Column(
          children: <Widget>[
            Padding(
              padding: const EdgeInsets.only(top: 300.0),
              child: Center(
                child: Container(
                  width: 350,
                  height: 50,
                  child: TextField(
                    decoration: InputDecoration(
                        border: OutlineInputBorder(),
                        labelText: 'Email',
                        hintText: 'Insira um email válido. Ex.: abc@gmail.com'),
                  ),
                ),
              ),
            ),
            Container(
              height: 40,
              width: 100,
              decoration: BoxDecoration(
                  color: Colors.blueGrey[300],
                  borderRadius: BorderRadius.circular(20)),
              child: FlatButton(
                onPressed: () {
                  Navigator.push(
                      context, MaterialPageRoute(builder: (_) => HomePage()));
                },
                child: Text(
                  'OK',
                  style: TextStyle(color: Colors.black, fontSize: 20),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
