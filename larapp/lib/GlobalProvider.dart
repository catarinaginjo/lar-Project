import 'package:http/http.dart' as http;

class GlobalProvider {
  static final GlobalProvider _instance = new GlobalProvider._internal();

  factory GlobalProvider() {
    return _instance;
  }

  var engine;

  GlobalProvider._internal() {
    engine = GlobalProviderEngine();
  }
}

class GlobalProviderEngine {
  bool _isLoggedIn = false;
  String? _username;
  String? _password;
  String? _token;
  login(String username, String password) {
    _username = username;
    _password = password;
    http.post(
      Uri.http('127.0.0.1:5555', '/'),
      body: "asdasd"
    );

    ///
  }
}
