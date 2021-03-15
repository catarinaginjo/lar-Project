import 'package:flutter/material.dart';
import 'package:larproject/components/LarTitle.dart';
import 'package:larproject/components/UtenteAvatar.dart';

class ListaUtentes extends StatelessWidget {
  ListaUtentes({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        title: "Lar",
        home: Scaffold(
          backgroundColor: const Color(0xffffffff),
          body: Stack(
            children: <Widget>[
              Transform.translate(
                offset: Offset(-20, 15.9),
                child: Transform.rotate(
                  angle: 0,
                  child:
                      // Adobe XD layer: 'background' (shape)
                      Container(
                    width: 2000.1,
                    height: 2000.4,
                    decoration: BoxDecoration(
                      image: DecorationImage(
                        image: const AssetImage('assets/background.jpg'),
                        fit: BoxFit.fill,
                      ),
                    ),
                  ),
                ),
              ),
              Transform.translate(
                offset: Offset(23.1, 33.4),
                child: LarTitle(title: "LISTA DE UTENTES"),
              ),
              GridView.count(
                crossAxisCount: 2,
                children: List.generate(6, (index) {
                  return Center(
                    child: UtenteAvatar(),
                  );
                }),
              ),
            ],
          ),
        ),);
  }
}

const String _svg_qnozd9 =
    '<svg viewBox="23.1 33.4 22.0 21.6" ><path transform="translate(17.52, 27.03)" d="M 25.71817970275879 15.06581497192383 L 12.33939933776855 15.06581497192383 L 17.52836608886719 9.888483047485352 C 18.2723274230957 9.07341194152832 18.2723274230957 7.756258010864258 17.52836608886719 6.941186904907227 C 16.78440475463867 6.126115798950195 15.57781410217285 6.126115798950195 14.82760238647461 6.941186904907227 L 6.187658786773682 15.67874908447266 C 5.812552928924561 16.05694198608398 5.625 16.57206535339355 5.625 17.13935661315918 L 5.625 17.16543960571289 C 5.625 17.73272895812988 5.812552928924561 18.24785232543945 6.187658786773682 18.62604713439941 L 14.82135009765625 27.36361122131348 C 15.57156181335449 28.17868232727051 16.77815437316895 28.17868232727051 17.5221118927002 27.36361122131348 C 18.26607322692871 26.54853820800781 18.26607322692871 25.23138427734375 17.5221118927002 24.41631317138672 L 12.3331470489502 19.23898124694824 L 25.71192741394043 19.23898124694824 C 26.76847648620605 19.23898124694824 27.62496566772461 18.30654144287109 27.62496566772461 17.15239906311035 C 27.63122177124023 15.97869300842285 26.77472877502441 15.06581497192383 25.71817970275879 15.06581497192383 Z" fill="#000000" stroke="none" stroke-width="1" stroke-miterlimit="4" stroke-linecap="butt" /></svg>';
