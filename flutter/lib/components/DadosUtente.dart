import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';

class DadosUtente extends StatelessWidget {
  DadosUtente({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Pinned.fromSize(
          bounds: Rect.fromLTWH(2.0, 0.0, 72.0, 23.0),
          size: Size(307.0, 126.0),
          pinLeft: true,
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text.rich(
            TextSpan(
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff1e1818),
              ),
              children: [
                TextSpan(
                  text: 'Idade',
                ),
                TextSpan(
                  text: ': ',
                  style: TextStyle(
                    color: const Color(0xff000000),
                  ),
                ),
                TextSpan(
                  text: '85',
                  style: TextStyle(
                    color: const Color(0xff707070),
                  ),
                ),
              ],
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(203.0, 0.0, 104.0, 46.0),
          size: Size(307.0, 126.0),
          pinRight: true,
          pinTop: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text.rich(
            TextSpan(
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff000000),
              ),
              children: [
                TextSpan(
                  text: 'Diabetes: ',
                ),
                TextSpan(
                  text: 'sim\n',
                  style: TextStyle(
                    color: const Color(0xff707070),
                  ),
                ),
              ],
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(198.0, 30.0, 102.0, 23.0),
          size: Size(307.0, 126.0),
          pinRight: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text.rich(
            TextSpan(
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff100909),
              ),
              children: [
                TextSpan(
                  text: 'Alergias:  ',
                ),
                TextSpan(
                  text: 'não',
                  style: TextStyle(
                    color: const Color(0xff707070),
                  ),
                ),
              ],
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(1.0, 30.0, 122.0, 23.0),
          size: Size(307.0, 126.0),
          pinLeft: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text.rich(
            TextSpan(
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff0d0c0c),
              ),
              children: [
                TextSpan(
                  text: 'Hipertenso',
                ),
                TextSpan(
                  text: ': sim',
                  style: TextStyle(
                    color: const Color(0xff707070),
                  ),
                ),
              ],
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(1.0, 70.0, 244.0, 23.0),
          size: Size(307.0, 126.0),
          pinLeft: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text.rich(
            TextSpan(
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff000000),
              ),
              children: [
                TextSpan(
                  text: 'Dependências: ',
                ),
                TextSpan(
                  text: ' cadeira de rodas',
                  style: TextStyle(
                    color: const Color(0xff707070),
                  ),
                ),
              ],
            ),
            textAlign: TextAlign.left,
          ),
        ),
        Pinned.fromSize(
          bounds: Rect.fromLTWH(0.0, 102.0, 129.0, 24.0),
          size: Size(307.0, 126.0),
          pinLeft: true,
          pinBottom: true,
          fixedWidth: true,
          fixedHeight: true,
          child: Text.rich(
            TextSpan(
              style: TextStyle(
                fontFamily: 'Accuratist',
                fontSize: 20,
                color: const Color(0xff0e0d0d),
              ),
              children: [
                TextSpan(
                  text: 'Medicação:',
                ),
                TextSpan(
                  text: '   ABC',
                  style: TextStyle(
                    color: const Color(0xff707070),
                  ),
                ),
              ],
            ),
            textAlign: TextAlign.left,
          ),
        ),
      ],
    );
  }
}
