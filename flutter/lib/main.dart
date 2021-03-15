import 'package:flutter/material.dart';
import "package:larproject/globals/RouteGlobal.dart";


void main() {
  runApp(
    MaterialApp(
      title: "LarProject",
      initialRoute: "/login",
      onGenerateRoute: RouteGlobal.factoryRoutes,
    )
  );
}

