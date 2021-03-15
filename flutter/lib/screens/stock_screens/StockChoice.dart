import 'package:flutter/material.dart';
import './StockProdutos.dart';
import './StockAlimentos.dart';
import './ShowStock.dart';
import 'package:adobe_xd/page_link.dart';
import 'package:flutter_svg/flutter_svg.dart';

import 'package:larproject/screens/Recados.dart';

class StockChoice extends StatelessWidget {
  StockChoice({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xffffffff),
      body: Stack(
        children: <Widget>[
          Transform.translate(
            offset: Offset(-220.5, 126.9),
            child: Transform.rotate(
              angle: 1.5708,
              child:
                  // Adobe XD layer: '999' (shape)
                  Container(
                width: 759.1,
                height: 505.4,
                decoration: BoxDecoration(
                  image: DecorationImage(
                    image: const AssetImage(''),
                    fit: BoxFit.fill,
                  ),
                ),
              ),
            ),
          ),
          Container(),
          Transform.translate(
            offset: Offset(31.1, 40.4),
            child: SvgPicture.string(
              _svg_dkat2r,
              allowDrawingOutsideViewBox: true,
            ),
          ),
          Transform.translate(
            offset: Offset(60.0, 36.0),
            child: Text(
              'STOCK\n',
              style: TextStyle(
                fontFamily: 'Segoe UI',
                fontSize: 23,
                color: const Color(0xff100808),
                fontWeight: FontWeight.w700,
              ),
              textAlign: TextAlign.left,
            ),
          ),
          Transform.translate(
            offset: Offset(52.0, 252.0),
            child: PageLink(
              links: [
                PageLinkInfo(
                  transition: LinkTransition.Fade,
                  ease: Curves.easeOut,
                  duration: 0.3,
                  pageBuilder: () => ShowStock(),
                ),
              ],
              child: SizedBox(
                width: 272.0,
                height: 69.0,
                child: StockAlimentos(),
              ),
            ),
          ),
          Transform.translate(
            offset: Offset(52.0, 354.0),
            child: PageLink(
              links: [
                PageLinkInfo(
                  transition: LinkTransition.Fade,
                  ease: Curves.easeOut,
                  duration: 0.3,
                  pageBuilder: () => Recados(),
                ),
              ],
              child: SizedBox(
                width: 272.0,
                height: 69.0,
                child: StockProdutos(),
              ),
            ),
          ),
        ],
      ),
    );
  }
}

const String _svg_dkat2r =
    '<svg viewBox="31.1 40.4 22.0 21.6" ><path transform="translate(25.52, 34.03)" d="M 25.71817970275879 15.06581497192383 L 12.33939933776855 15.06581497192383 L 17.52836608886719 9.888483047485352 C 18.2723274230957 9.07341194152832 18.2723274230957 7.756258010864258 17.52836608886719 6.941186904907227 C 16.78440475463867 6.126115798950195 15.57781410217285 6.126115798950195 14.82760238647461 6.941186904907227 L 6.187658786773682 15.67874908447266 C 5.812552928924561 16.05694198608398 5.625 16.57206535339355 5.625 17.13935661315918 L 5.625 17.16543960571289 C 5.625 17.73272895812988 5.812552928924561 18.24785232543945 6.187658786773682 18.62604713439941 L 14.82135009765625 27.36361122131348 C 15.57156181335449 28.17868232727051 16.77815437316895 28.17868232727051 17.5221118927002 27.36361122131348 C 18.26607322692871 26.54853820800781 18.26607322692871 25.23138427734375 17.5221118927002 24.41631317138672 L 12.3331470489502 19.23898124694824 L 25.71192741394043 19.23898124694824 C 26.76847648620605 19.23898124694824 27.62496566772461 18.30654144287109 27.62496566772461 17.15239906311035 C 27.63122177124023 15.97869300842285 26.77472877502441 15.06581497192383 25.71817970275879 15.06581497192383 Z" fill="#000000" stroke="none" stroke-width="1" stroke-miterlimit="4" stroke-linecap="butt" /></svg>';
