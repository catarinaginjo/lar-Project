import 'package:flutter/material.dart';

class LarTitle extends StatelessWidget {
  final String title;

  const LarTitle({Key key, @required this.title}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Text(
      this.title,
      style: TextStyle(
        fontFamily: 'Segoe UI',
        fontSize: 23,
        color: const Color(0xff100808),
        fontWeight: FontWeight.w700,
      ),
    );
  }
}
