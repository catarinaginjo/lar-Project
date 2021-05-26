import 'package:flutter/material.dart';
import '../GlobalProvider.dart';

class LoginScreen extends StatefulWidget {
  _LoginScreenState createState() => _LoginScreenState();
}

class _LoginScreenState extends State<LoginScreen> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Welcome to Flutter',
      home: Scaffold(
        appBar: AppBar(
          title: Text('Welcome to Flutter'),
        ),
        body: Center(
          child: ElevatedButton(
                child: Text("Login"),
                onPressed: () => GlobalProvider().engine.login("username", "password"),
              ),
        ),
      ),
    );
  }
}
