import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';
import './Componente121.dart';
import 'package:flutter_svg/flutter_svg.dart';

class Componente131 extends StatelessWidget {
  Componente131({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Pinned.fromSize(
          bounds: Rect.fromLTWH(9.0, 5.5, 40.5, 36.0),
          size: Size(49.5, 131.0),
          pinRight: true,
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child:
              // Adobe XD layer: 'Icon awesome-edit' (shape)
              SvgPicture.string(
            _svg_x7tp26,
            allowDrawingOutsideViewBox: true,
            fit: BoxFit.fill,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(9.0, 66.9, 39.0, 60.6),
          size: Size(49.5, 131.0),
          pinRight: true,
          pinBottom: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Componente121(),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(11.5, 43.5, 28.0, 11.0),
          size: Size(49.5, 131.0),
          fixedWidth: true,
          fixedHeight: true,
          child: Text(
            'EDITAR',
            style: TextStyle(
              fontFamily: 'Segoe UI',
              fontSize: 8,
              color: const Color(0xff000000),
              fontWeight: FontWeight.w700,
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(0.0, 0.0, 2.0, 131.0),
          size: Size(49.5, 131.0),
          pinLeft: true,
          pinTop: true,
          pinBottom: true,
          fixedWidth: true,
          child: SvgPicture.string(
            _svg_fgymt2,
            allowDrawingOutsideViewBox: true,
            fit: BoxFit.fill,
          ),
        ),
      ],
    );
  }
}

const String _svg_x7tp26 =
    '<svg viewBox="9.0 5.5 40.5 36.0" ><path transform="translate(9.0, 5.49)" d="M 28.30781173706055 5.849999904632568 L 34.64999771118164 12.19218730926514 C 34.91718673706055 12.45937442779541 34.91718673706055 12.89531230926514 34.64999771118164 13.16249942779541 L 19.29375076293945 28.51874923706055 L 12.76875114440918 29.24296760559082 C 11.89687633514404 29.34140586853027 11.15859508514404 28.60312461853027 11.25703239440918 27.73124885559082 L 11.98125076293945 21.20624923706055 L 27.33749961853027 5.849999904632568 C 27.60468673706055 5.582812309265137 28.04062461853027 5.582812309265137 28.30781173706055 5.849999904632568 Z M 39.69843673706055 4.239843368530273 L 36.26718521118164 0.8085932731628418 C 35.19843673706055 -0.2601567506790161 33.46171569824219 -0.2601567506790161 32.38593673706055 0.8085932731628418 L 29.89687347412109 3.297655820846558 C 29.62968635559082 3.564843416213989 29.62968635559082 4.000781059265137 29.89687347412109 4.26796817779541 L 36.23905944824219 10.61015510559082 C 36.50624847412109 10.87734222412109 36.94218444824219 10.87734222412109 37.20937347412109 10.61015510559082 L 39.69843673706055 8.121092796325684 C 40.76718521118164 7.045311450958252 40.76718521118164 5.308592796325684 39.69843673706055 4.239842891693115 Z M 27 24.34218788146973 L 27 31.5 L 4.5 31.5 L 4.5 9 L 20.65781211853027 9 C 20.8828125 9 21.09375 8.908594131469727 21.25546836853027 8.75390625 L 24.06796836853027 5.94140625 C 24.60234260559082 5.407031059265137 24.22265625 4.5 23.47031211853027 4.5 L 3.375 4.5 C 1.51171875 4.5 0 6.01171875 0 7.875 L 0 32.625 C 0 34.48828125 1.51171875 36 3.375 36 L 28.125 36 C 29.98828125 36 31.5 34.48828125 31.5 32.625 L 31.5 21.52968788146973 C 31.5 20.77734375 30.59296798706055 20.40468788146973 30.05859375 20.93203163146973 L 27.24609375 23.74453163146973 C 27.09140586853027 23.90625 27 24.1171875 27 24.34218788146973 Z" fill="#000000" stroke="none" stroke-width="1" stroke-miterlimit="4" stroke-linecap="butt" /></svg>';
const String _svg_fgymt2 =
    '<svg viewBox="0.0 0.0 2.0 131.0" ><path  d="M 0 0 L 2 131" fill="none" fill-opacity="0.47" stroke="#707070" stroke-width="1" stroke-opacity="0.47" stroke-miterlimit="4" stroke-linecap="butt" /></svg>';