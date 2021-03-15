import 'package:flutter/material.dart';

class UtenteAvatar extends StatelessWidget {
  const UtenteAvatar({Key key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Column(children: [
      Container(
        width: 115.0,
        height: 115.0,
        decoration: BoxDecoration(
          borderRadius: BorderRadius.all(Radius.elliptical(9999.0, 9999.0)),
          image: DecorationImage(
            image: const AssetImage('assets/idoso5.jpg'),
            fit: BoxFit.cover,
          ),
          border: Border.all(width: 1.0, color: const Color(0xff707070)),
        ),
      ),
      Text(
        'Manuel Oliveira',
        style: TextStyle(
          fontFamily: 'Segoe UI',
          fontSize: 15,
          color: const Color(0xff000000),
        ),
        textAlign: TextAlign.left,
      )
    ]);
  }
}
