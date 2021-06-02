import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:lar_mobile/GlobalProvider.dart';

const url = 'http://larsendim.pt/api/utentes/';

Future<Utente> fetchUtente() async {
  var utenteid = GlobalProvider().engine.currentUtenteID.toString();
    
  final response = await http.get(Uri.parse(url + utenteid));

  print("response->");
  print(response.body);
  if (response.statusCode == 200) {
    // If the server did return a 200 OK response,
    // then parse the JSON.
    return Utente.fromJson(jsonDecode(response.body));
  } else {
    // If the server did not return a 200 OK response,
    // then throw an exception.
    throw Exception('Failed to person');
  }
}

class Utente {
  final String name;
  final String fullName;
  final String birthDate;
  final String address;

  Utente({
    required this.name,
    required this.birthDate,
    required this.address,
    this.fullName = "",
  });

  factory Utente.fromJson(Map<String, dynamic> json) {
    return Utente(
      name: json['nome'],
      fullName: json['nome'] + " " + json['apelido'],
      birthDate: json['data_nascimento'],
      address: json['morada'],
    );
  }
}

class UtentePage2 extends StatefulWidget {
  @override
  MapScreenState createState() => MapScreenState();
}

class MapScreenState extends State<UtentePage2>
    with SingleTickerProviderStateMixin {
  late Future<Utente> futureUtente;

  @override
  void initState() {
    super.initState();
    futureUtente = fetchUtente();
  }

  @override
  Widget build(BuildContext context) {
    var scaffold = Scaffold(
      body: Center(
        child: FutureBuilder<Utente>(
          future: futureUtente,
          builder: (context, snapshot) {
            if (snapshot.hasData) {
              return Text(snapshot.data!.fullName +
                  ' ' +
                  snapshot.data!.address +
                  ' ' +
                  snapshot.data!.birthDate);
            } else if (snapshot.hasError) {
              return Text("Error: ${snapshot.error}");
            }

            // By default, show a loading spinner.
            return CircularProgressIndicator();
          },
        ),
      ),
    );

    return scaffold;
  }
}

