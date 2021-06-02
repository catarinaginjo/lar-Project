
class Produto {
  final String name;
  final String fullName;
  final String birthDate;
  final String address;
  final String contacto;

  Produto({
    required this.name,
    required this.birthDate,
    required this.address,
    required this.contacto,

    this.fullName = "",
  });

  factory Produto.fromJson(Map<String, dynamic> json) {
    return Produto(
      name: json['nome'],
      fullName: json['nome'] + " " + json['apelido'],
      birthDate: json['data_nascimento'],
      address: json['morada'],
      contacto: json['contacto_familiar'],
     );
  }
}
