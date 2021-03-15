import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';
import 'package:flutter_svg/flutter_svg.dart';

class TarefasAuxiliar extends StatelessWidget {
  TarefasAuxiliar({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Pinned.fromSize(
          bounds: Rect.fromLTWH(176.0, 76.5, 128.0, 24.0),
          size: Size(305.0, 148.0),
          pinRight: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Medicação:  - 0 +',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(6.0, 8.5, 54.0, 23.0),
          size: Size(305.0, 148.0),
          pinLeft: true,
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Banho ',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(6.0, 44.5, 47.0, 23.0),
          size: Size(305.0, 148.0),
          pinLeft: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Barba',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(3.0, 76.5, 117.0, 23.0),
          size: Size(305.0, 148.0),
          pinLeft: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Corte de Unhas',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(126.0, 8.5, 25.0, 23.0),
          size: Size(305.0, 148.0),
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Container(
            decoration: BoxDecoration(
              color: const Color(0xffffffff),
              border: Border.all(width: 1.0, color: const Color(0xff707070)),
            ),
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(126.0, 44.5, 25.0, 23.0),
          size: Size(305.0, 148.0),
          fixedWidth: true,
          fixedHeight: true,
          child: Container(
            decoration: BoxDecoration(
              color: const Color(0xffffffff),
              border: Border.all(width: 1.0, color: const Color(0xff707070)),
            ),
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(126.0, 77.5, 25.0, 23.0),
          size: Size(305.0, 148.0),
          fixedWidth: true,
          fixedHeight: true,
          child: Container(
            decoration: BoxDecoration(
              color: const Color(0xffffffff),
              border: Border.all(width: 1.0, color: const Color(0xff707070)),
            ),
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(181.0, 9.5, 73.0, 23.0),
          size: Size(305.0, 148.0),
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Insulina: ',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(264.0, 10.5, 25.0, 23.0),
          size: Size(305.0, 148.0),
          pinRight: true,
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Container(
            decoration: BoxDecoration(
              color: const Color(0xffffffff),
              border: Border.all(width: 1.0, color: const Color(0xff707070)),
            ),
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(178.0, 43.5, 127.0, 23.0),
          size: Size(305.0, 148.0),
          pinRight: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Nº fraldas:    - 0 +',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(0.0, 116.5, 119.0, 23.0),
          size: Size(305.0, 148.0),
          pinLeft: true,
          pinBottom: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'Corte de Cabelo',
            style: TextStyle(
              fontFamily: 'Accuratist',
              fontSize: 20,
              color: const Color(0xff707070),
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(125.0, 117.5, 25.0, 23.0),
          size: Size(305.0, 148.0),
          pinBottom: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Container(
            decoration: BoxDecoration(
              color: const Color(0xffffffff),
              border: Border.all(width: 1.0, color: const Color(0xff707070)),
            ),
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(164.5, 0.0, 1.0, 148.0),
          size: Size(305.0, 148.0),
          pinTop: true,
          pinBottom: true,
          fixedWidth: true,
          child: SvgPicture.string(
            _svg_qgl4il,
            allowDrawingOutsideViewBox: true,
            fit: BoxFit.fill,
          ),
        ),
      ],
    );
  }
}

const String _svg_qgl4il =
    '<svg viewBox="164.5 0.0 1.0 148.0" ><path transform="translate(164.5, 0.0)" d="M 0 0 L 0 148" fill="none" fill-opacity="0.32" stroke="#707070" stroke-width="1" stroke-opacity="0.32" stroke-miterlimit="4" stroke-linecap="butt" /></svg>';
