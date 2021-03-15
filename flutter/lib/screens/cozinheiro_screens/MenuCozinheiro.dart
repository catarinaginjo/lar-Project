import 'package:flutter/material.dart';

class CozinheirosPginainicialMenu extends StatelessWidget {
  CozinheirosPginainicialMenu({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffffffff),
      body: Stack(
        children: <Widget>[
          // Adobe XD layer: '9' (shape)
          Container(
            width: 557.0,
            height: 991.0,
            decoration: BoxDecoration(
              image: DecorationImage(
                image: const AssetImage(''),
                fit: BoxFit.fill,
              ),
            ),
          ),
          Container(),
          Container(),
          Transform.translate(
            offset: Offset(87.0, 161.0),
            child:
                // Adobe XD layer: 'logo lar' (shape)
                Container(
              width: 201.0,
              height: 134.0,
              decoration: BoxDecoration(
                borderRadius: BorderRadius.circular(32.0),
                image: DecorationImage(
                  image: const AssetImage(''),
                  fit: BoxFit.cover,
                ),
              ),
            ),
          ),
          Transform.translate(
            offset: Offset(73.0, 79.0),
            child: Text(
              'Bem-vinda Maria',
              style: TextStyle(
                fontFamily: 'screwround',
                fontSize: 30,
                color: const Color(0xff000000),
                fontWeight: FontWeight.w700,
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Container(),
        ],
      ),
    );
  }
}
