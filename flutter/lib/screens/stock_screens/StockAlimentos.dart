import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';
import 'package:flutter_svg/flutter_svg.dart';

class StockAlimentos extends StatelessWidget {
  StockAlimentos({
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
          child: SvgPicture.string(
            _svg_40ltk7,
            allowDrawingOutsideViewBox: true,
            fit: BoxFit.fill,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(13.0, 16.0, 246.0, 36.0),
          size: Size(272.0, 69.0),
          pinLeft: true,
          pinRight: true,
          fixedHeight: true,
          child: Text(
            'STOCK ALIMENTOS',
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

const String _svg_40ltk7 =
    '<svg viewBox="0.0 0.0 272.0 69.0" ><path  d="M 34.5 0 L 237.5 0 C 256.5538330078125 0 272 15.44617462158203 272 34.5 C 272 53.55382537841797 256.5538330078125 69 237.5 69 L 34.5 69 C 15.44617462158203 69 0 53.55382537841797 0 34.5 C 0 15.44617462158203 15.44617462158203 0 34.5 0 Z" fill="#ffffff" stroke="#707070" stroke-width="1" stroke-miterlimit="4" stroke-linecap="butt" /></svg>';
