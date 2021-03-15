import 'package:flutter/material.dart';
import "package:larproject/screens/LoginScreen.dart";
import "package:larproject/screens/GeneralScreen.dart";
import "package:larproject/screens/utente_screens/ListaUtentes.dart";

class RouteGlobal {
  static Route factoryRoutes(RouteSettings settings) {
    switch (settings.name) {
      case "/login":
        {
          return MaterialPageRoute(builder: (context) => LoginScreen());
        }
      case "/general":
        {
          return MaterialPageRoute(builder: (context) => GeneralScreen());
        }
        case "/listaUtentes":
        {
          return MaterialPageRoute(builder: (context) => ListaUtentes());
        }
      default:
        {
          return MaterialPageRoute(builder: (context) => LoginScreen());
        }
    }
  }
}
