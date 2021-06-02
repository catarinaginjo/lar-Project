class Ementa {
  final String nutricionista;
  final String ementa_nutricionista;
  final String info;
  final String data_inicio;
  final String data_fim;
  final String ementa_data;

  final String seg_sopa;
  final String seg_almoco;
  final String seg_sob_almoco;
  final String seg_jantar;
  final String seg_sob_jantar;

  final String ter_sopa;
  final String ter_almoco;
  final String ter_sob_almoco;
  final String ter_jantar;
  final String ter_sob_jantar;

  final String qua_sopa;
  final String qua_almoco;
  final String qua_sob_almoco;
  final String qua_jantar;
  final String qua_sob_jantar;

  final String qui_sopa;
  final String qui_almoco;
  final String qui_sob_almoco;
  final String qui_jantar;
  final String qui_sob_jantar;

  final String sex_sopa;
  final String sex_almoco;
  final String sex_sob_almoco;
  final String sex_jantar;
  final String sex_sob_jantar;

  final String sab_sopa;
  final String sab_almoco;
  final String sab_sob_almoco;
  final String sab_jantar;
  final String sab_sob_jantar;

  final String dom_sopa;
  final String dom_almoco;
  final String dom_sob_almoco;
  final String dom_jantar;
  final String dom_sob_jantar;

  Ementa({
    required this.ementa_nutricionista,
    required this.nutricionista,
    required this.data_inicio,
    required this.data_fim,
    required this.info,
    this.ementa_data = "",
    required this.seg_sopa,
    required this.seg_almoco,
    required this.seg_sob_almoco,
    required this.seg_jantar,
    required this.seg_sob_jantar,
    required this.ter_sopa,
    required this.ter_almoco,
    required this.ter_sob_almoco,
    required this.ter_jantar,
    required this.ter_sob_jantar,
    required this.qua_sopa,
    required this.qua_almoco,
    required this.qua_sob_almoco,
    required this.qua_jantar,
    required this.qua_sob_jantar,
    required this.qui_sopa,
    required this.qui_almoco,
    required this.qui_sob_almoco,
    required this.qui_jantar,
    required this.qui_sob_jantar,
    required this.sex_sopa,
    required this.sex_almoco,
    required this.sex_sob_almoco,
    required this.sex_jantar,
    required this.sex_sob_jantar,
    required this.sab_sopa,
    required this.sab_almoco,
    required this.sab_sob_almoco,
    required this.sab_jantar,
    required this.sab_sob_jantar,
    required this.dom_sopa,
    required this.dom_almoco,
    required this.dom_sob_almoco,
    required this.dom_jantar,
    required this.dom_sob_jantar,
  });

  factory Ementa.fromJson(Map<String, dynamic> json) {
    return Ementa(
      nutricionista: json['nutricionista'],
      ementa_data: "De " + json['data_inicio'] + " a " + json['data_fim'],
      data_inicio: json['data_inicio'],
      data_fim: json['data_fim'],
      info: json['info'],
      ementa_nutricionista: "Nutricionista: " + json['nutricionista'],
      seg_sopa: json['seg_sopa'],
      seg_almoco: json['seg_almoço'],
      seg_sob_almoco: json['seg_sob_almoço'],
      seg_jantar: json['seg_jantar'],
      seg_sob_jantar: json['seg_sob_jantar'],
      ter_sopa: json['ter_sopa'],
      ter_almoco: json['ter_almoço'],
      ter_sob_almoco: json['ter_sob_almoço'],
      ter_jantar: json['ter_jantar'],
      ter_sob_jantar: json['ter_sob_jantar'],
      qua_sopa: json['qua_sopa'],
      qua_almoco: json['qua_almoço'],
      qua_sob_almoco: json['qua_sob_almoço'],
      qua_jantar: json['qua_jantar'],
      qua_sob_jantar: json['qua_sob_jantar'],
      qui_sopa: json['qui_sopa'],
      qui_almoco: json['qui_almoço'],
      qui_sob_almoco: json['qui_sob_almoço'],
      qui_jantar: json['qui_jantar'],
      qui_sob_jantar: json['qui_sob_jantar'],
      sex_sopa: json['sex_sopa'],
      sex_almoco: json['sex_almoço'],
      sex_sob_almoco: json['sex_sob_almoço'],
      sex_jantar: json['sex_jantar'],
      sex_sob_jantar: json['sex_sob_jantar'],
      sab_sopa: json['sab_sopa'],
      sab_almoco: json['sab_almoço'],
      sab_sob_almoco: json['sab_sob_almoço'],
      sab_jantar: json['sab_jantar'],
      sab_sob_jantar: json['sab_sob_jantar'],
      dom_sopa: json['dom_sopa'],
      dom_almoco: json['dom_almoço'],
      dom_sob_almoco: json['dom_sob_almoço'],
      dom_jantar: json['dom_jantar'],
      dom_sob_jantar: json['dom_sob_jantar'],
    );
  }
}
