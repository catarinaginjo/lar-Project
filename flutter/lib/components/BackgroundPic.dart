import 'package:flutter/material.dart';
//código do background que se repete em todos os screens

class BackgroundPic extends StatelessWidget {
  final List<Widget> children;
  const BackgroundPic({Key key, this.children}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffffffff),
      body: Stack(
        children: <Widget>[
              Container(
                width: 825.1,
                height: 549.4,
                decoration: BoxDecoration(
                  image: DecorationImage(
                    image: const AssetImage('assets/background.jpg'),
                    fit: BoxFit.fill,
                  ),
                ),
              ),
            ] +
            this.children,
      ),
    );
  }
}
