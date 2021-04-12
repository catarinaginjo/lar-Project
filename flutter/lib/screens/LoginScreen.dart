import 'package:flutter/material.dart';
import 'package:larproject/components/BackgroundPic.dart';

class LoginScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return _LoginScreenState();
  }
}

class _LoginScreenState extends State<LoginScreen> {

  void sendLoginRequest(String email, String password) {
    // Nesta função enviar um HTTP Post Request ao Laravel/Servidor (http://localhost:8000/api/login)
    // O Laravel depois de enviar o token para trás, caso a auth tenha sido com sucesso, guardar resposta numa variavel
    var response;
    print(response);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffffffff),
      body: BackgroundPic(
        children: [
          Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Padding(
                padding: EdgeInsets.only(left: 10.0, right: 10.0),
                child: TextField(
                  controller: TextEditingController(text: 'catarina@gmail.com'),
                  style: TextStyle(fontSize: 20.0),
                  decoration: InputDecoration(
                      border: InputBorder.none, labelText: 'E-Mail'),
                ),
              ),
              Padding(
                padding: EdgeInsets.only(left: 10.0, right: 10.0),
                child: TextField(
                  controller: TextEditingController(text: '12345'),
                  obscureText: true,
                  style: TextStyle(fontSize: 20.0),
                  decoration: InputDecoration(
                      border: InputBorder.none, labelText: 'Password'),
                ),
              ),
              Text(
                'LOGIN',
                style: TextStyle(
                  fontFamily: 'Nueva Std',
                  fontSize: 43,
                  color: const Color(0xff000000),
                  fontWeight: FontWeight.w700,
                ),
                textAlign: TextAlign.left,
              ),
              Text(
                'Esqueci-me da password.',
                style: TextStyle(
                  fontFamily: 'Segoe UI',
                  fontSize: 13,
                  color: const Color(0x91000000),
                  fontWeight: FontWeight.w700,
                ),
                textAlign: TextAlign.left,
              ),
              Builder(
                builder: (context) => RaisedButton(
                  child: Text('Fazer login'),
                  onPressed: () {
                    //sendLoginRequest(email, password) --> HTTP.PostRequest
                    //---> http://localhost:8000/api/login
                    //response <---- request.response
                    Scaffold.of(context).showSnackBar(
                      SnackBar(
                        content: Text('Login efetuado com sucesso'),
                        duration: Duration(seconds: 3),
                      ),
                    );
                    new Future.delayed(const Duration(seconds: 3), () {
                      Navigator.pushNamed(context, '/general');
                    });
                  },
                ),
              ),
              Builder(
                builder: (context) => RaisedButton(
                  child: Text('task'),
                  onPressed: () {
                    Scaffold.of(context).showSnackBar(
                      SnackBar(
                        content: Text('task done'),
                        duration: Duration(seconds: 3),
                      ),
                    );
                    new Future.delayed(const Duration(seconds: 3), () {
                      Navigator.pushNamed(context, '/listaUtentes');
                    });
                  },
                ),
              ),
            ],
          ),
        ],
      ),
    );
  }
}
