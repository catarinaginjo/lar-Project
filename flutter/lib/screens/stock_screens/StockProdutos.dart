import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';

class StockProdutos extends StatelessWidget {
  StockProdutos({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Pinned.fromSize(
          bounds: Rect.fromLTWH(0.0, 0.0, 272.0, 69.0),
          size: Size(272.0, 69.0),
          pinLeft: true,
          pinRight: true,
          pinTop: true,
          pinBottom: true,
          child: Container(
            decoration: BoxDecoration(
              borderRadius: BorderRadius.circular(35.0),
              color: const Color(0xffffffff),
              border: Border.all(width: 1.0, color: const Color(0xff707070)),
            ),
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(20.0, 14.0, 237.0, 36.0),
          size: Size(272.0, 69.0),
          pinLeft: true,
          pinRight: true,
          fixedHeight: true,
          child: Text(
            'STOCK PRODUTOS',
            style: TextStyle(
              fontFamily: 'Segoe UI',
              fontSize: 27,
              color: const Color(0xff0d0a0a),
              fontWeight: FontWeight.w700,
            ),
            textAlign: TextAlign.left,
          ),
        ),
      ],
    );
  }
}
