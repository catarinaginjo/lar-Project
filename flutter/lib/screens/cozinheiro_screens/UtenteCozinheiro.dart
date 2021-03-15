import 'package:flutter/material.dart';
import 'package:larproject/components/DadosUtente.dart';
import 'package:larproject/components/VoltarButton.dart';

class UtenteCozinheiro extends StatelessWidget {
  UtenteCozinheiro({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffffffff),
      body: Stack(
        children: <Widget>[
          Transform.translate(
            offset: Offset(-206.9, 128.6),
            child: Transform.rotate(
              angle: 1.5708,
              child:
                  // Adobe XD layer: '999' (shape)
                  Container(
                width: 820.4,
                height: 546.5,
                decoration: BoxDecoration(
                  image: DecorationImage(
                    image: const AssetImage(''),
                    fit: BoxFit.fill,
                  ),
                ),
              ),
            ),
          ),
          Transform.translate(
            offset: Offset(107.4, 40.0),
            child: Transform.rotate(
              angle: -0.0175,
              child:
                  // Adobe XD layer: 'a-depressao-em-idos…' (shape)
                  Container(
                width: 158.3,
                height: 147.4,
                decoration: BoxDecoration(
                  borderRadius:
                      BorderRadius.all(Radius.elliptical(9999.0, 9999.0)),
                  image: DecorationImage(
                    image: const AssetImage(''),
                    fit: BoxFit.cover,
                  ),
                  border:
                      Border.all(width: 1.0, color: const Color(0xff707070)),
                ),
              ),
            ),
          ),
          Transform.translate(
            offset: Offset(108.0, 196.0),
            child: Text(
              'Manuel Oliveira',
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 26,
                color: const Color(0xff070606),
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(35.0, 267.0),
            child: SizedBox(
              width: 306.0,
              height: 53.0,
              child: DadosUtente(),
            ),
          ),
          Transform.translate(
            offset: Offset(33.0, 626.0),
            child: Text(
              'Notas*: ',
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff191212),
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(30.0, 653.0),
            child: Container(
              width: 315.0,
              height: 85.0,
              decoration: BoxDecoration(
                color: const Color(0xffffffff),
                border: Border.all(width: 1.0, color: const Color(0xff707070)),
              ),
            ),
          ),
          Transform.translate(
            offset: Offset(21.0, 31.4),
            child: VoltarButton(),
          ),
          Transform.translate(
            offset: Offset(137.0, 235.0),
            child: Text.rich(
              TextSpan(
                style: TextStyle(
                  fontFamily: 'Accuratist',
                  fontSize: 20,
                  color: const Color(0xfff16060),
                ),
                children: [
                  TextSpan(
                    text: 'Informações',
                  ),
                  TextSpan(
                    text: ' ',
                    style: TextStyle(
                      color: const Color(0xffee8181),
                    ),
                  ),
                ],
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(94.0, 338.0),
            child: Text.rich(
              TextSpan(
                style: TextStyle(
                  fontFamily: 'Accuratist',
                  fontSize: 20,
                  color: const Color(0xff140e0e),
                ),
                children: [
                  TextSpan(
                    text: 'Contactos: ',
                  ),
                  TextSpan(
                    text: ' 93 xxx xxx (Filha) ',
                    style: TextStyle(
                      color: const Color(0xff707070),
                    ),
                  ),
                ],
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Container(),
          Transform.translate(
            offset: Offset(33.0, 399.0),
            child: Text(
              'Dieta: ',
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff1e1a1a),
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(28.0, 427.0),
            child: Container(
              width: 319.0,
              height: 151.0,
              decoration: BoxDecoration(
                color: const Color(0xffffffff),
                border: Border.all(width: 1.0, color: const Color(0xff707070)),
              ),
            ),
          ),
        ],
      ),
    );
  }
}