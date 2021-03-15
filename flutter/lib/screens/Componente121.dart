import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';
import 'package:flutter_svg/flutter_svg.dart';

class Componente121 extends StatelessWidget {
  Componente121({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Pinned.fromSize(
          bounds: Rect.fromLTWH(5.3, 0.0, 35.7, 47.0),
          size: Size(49.0, 67.6),
          pinLeft: true,
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child:
              // Adobe XD layer: 'Icon feather-save' (group)
              Stack(
            children: <Widget>[
              Pinned.fromSize(
                bounds: Rect.fromLTWH(0.0, 0.0, 35.7, 47.0),
                size: Size(35.7, 47.0),
                pinLeft: true,
                pinRight: true,
                pinTop: true,
                pinBottom: true,
                child: SvgPicture.string(
                  _svg_b17072,
                  allowDrawingOutsideViewBox: true,
                  fit: BoxFit.fill,
                ),
              ),
              Pinned.fromSize(
                bounds: Rect.fromLTWH(6.0, 35.0, 23.7, 12.0),
                size: Size(35.7, 47.0),
                pinLeft: true,
                pinRight: true,
                pinBottom: true,
                fixedHeight: true,
                child: SvgPicture.string(
                  _svg_mk77hk,
                  allowDrawingOutsideViewBox: true,
                  fit: BoxFit.fill,
                ),
              ),
              Pinned.fromSize(
                bounds: Rect.fromLTWH(9.5, 0.0, 12.0, 7.5),
                size: Size(35.7, 47.0),
                pinTop: true,
                fixedWidth: true,
                fixedHeight: true,
                child: SvgPicture.string(
                  _svg_ht2nub,
                  allowDrawingOutsideViewBox: true,
                  fit: BoxFit.fill,
                ),
              ),
            ],
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(0.0, 53.6, 49.0, 14.0),
          size: Size(49.0, 67.6),
          pinLeft: true,
          pinRight: true,
          pinBottom: true,
          fixedHeight: true,
          child: Text(
            'GUARDAR',
            style: TextStyle(
              fontFamily: 'Segoe UI',
              fontSize: 10,
              color: const Color(0xff000000),
              fontWeight: FontWeight.w700,
            ),
            textAlign: TextAlign.left,
          ),
        ),
      ],
    );
  }
}

const String _svg_b17072 =
    '<svg viewBox="4.5 4.5 35.7 47.0" ><path transform="translate(0.0, 0.0)" d="M 36.23266220092773 51.46343994140625 L 8.466582298278809 51.46343994140625 C 6.275898933410645 51.46343994140625 4.5 49.12718963623047 4.5 46.24528121948242 L 4.5 9.718159675598145 C 4.5 6.836248874664307 6.275899887084961 4.499999046325684 8.466583251953125 4.5 L 30.28278732299805 4.5 L 40.19924545288086 17.54540252685547 L 40.19924545288086 46.24528121948242 C 40.19924545288086 49.12718963623047 38.42334365844727 51.46343994140625 36.23266220092773 51.46343994140625 Z" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';
const String _svg_mk77hk =
    '<svg viewBox="10.5 39.5 23.7 12.0" ><path transform="translate(0.0, 19.96)" d="M 34.19924926757813 31.5 L 34.19924926757813 19.5 L 10.5 19.5 L 10.5 31.5" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';
const String _svg_ht2nub =
    '<svg viewBox="14.0 4.5 12.0 7.5" ><path transform="translate(3.48, 0.0)" d="M 10.5 4.5 L 10.5 12 L 22.5 12" fill="none" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';
