import 'package:flutter/material.dart';
import 'package:larproject/components/DadosUtente.dart';
import 'package:larproject/components/TarefasAuxiliar.dart';
import 'package:larproject/screens/Componente121.dart';
import 'package:larproject/components/VoltarButton.dart';

class UtenteAuxiliar extends StatelessWidget {
  UtenteAuxiliar({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffffffff),
      body: Stack(
        children: <Widget>[
          Transform.translate(
            offset: Offset(-235.4, 136.9),
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
            offset: Offset(34.0, 267.0),
            child: SizedBox(
              width: 307.0,
              height: 126.0,
              child: DadosUtente(),
            ),
          ),
          Transform.translate(
            offset: Offset(148.0, 438.0),
            child: Text(
              'Rotina diária',
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xfff16060),
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(33.0, 624.0),
            child: Text(
              'Notas*: ',
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff0d0a0a),
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(27.0, 654.0),
            child: Container(
              width: 326.0,
              height: 85.0,
              decoration: BoxDecoration(
                color: const Color(0xffffffff),
                border: Border.all(width: 1.0, color: const Color(0xff707070)),
              ),
            ),
          ),
          Transform.translate(
            offset: Offset(35.0, 469.0),
            child: SizedBox(
              width: 305.0,
              height: 148.0,
              child: TarefasAuxiliar(),
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
            offset: Offset(32.0, 400.0),
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
            offset: Offset(300.0, 31.4),
            child: SizedBox(
              width: 49.0,
              height: 68.0,
              child: Componente121(),
            ),
          ),
        ],
      ),
    );
  }
}
