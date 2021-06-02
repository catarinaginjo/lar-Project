import 'dart:convert';

class Utente {
  final String name;
  final String fullName;
  final String birthDate;
  final String address;
  final String contacto;
  final String doenca;
  final String alergia;
  final String diabetes;
  final String hipertensao;
  final String dieta;
  final String condicao;
  final String medicacao;
  final String cuidados;

  Utente({
    required this.name,
    required this.birthDate,
    required this.address,
    required this.contacto,
    required this.doenca,
    required this.alergia,
    required this.diabetes,
    required this.hipertensao,
    required this.dieta,
    required this.condicao,
    required this.medicacao,
    required this.cuidados,
    this.fullName = "",
  });

  factory Utente.fromJson(Map<String, dynamic> json) {
    return Utente(
      name: json['nome'],
      fullName: json['nome'] + " " + json['apelido'],
      birthDate: json['data_nascimento'],
      address: json['morada'],
      contacto: json['contacto_familiar'],
      doenca: json['doença'] == null ? "" : json['doença'],
      alergia: json['alergia'] == null ? "" : json['alergia'],
      diabetes: json['diabetes'] == null ? "" : json['diabetes'],
      hipertensao: json['hipertensao'] == null ? "" : json['hipertensao'],
      condicao: json['condicao'] == null ? "" : json['condiçao'],
      medicacao: json['medicaçao'] == null ? "" : json['medicaçao'],
      cuidados: json['cuidados'] == null ? "" : json['cuidados'],
      dieta: json['dieta'] == null ? "" : json['dieta'],
    );
  }
}
