 <!--Main Navigation-->

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!--Vue js , momentjs, axios -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

     <!--css-->

     <title>@yield('title', 'Lar - administrador')</title>
 </head>

 <html>

 <header>

     <!--Navbar-->
     @include('includes.navbar')
     <!--/.Navbar-->

     <!--Mask-->
     <div id="intro" class="view">

         <div class="mask rgba-black-strong">

             <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                 <div class="row d-flex justify-content-center text-center">

                     <div class="col-md-10">

                         <!-- Heading -->
                         <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Lar da Imaculada Conceição - Sendim</h2>

                         <!-- Divider -->
                         <hr class="hr-light">
                         <div class="view overlay z-depth-20-half">
                             <img src="https://imgur.com/CljJeUK.png" alt="utente" class="rounded-circle" style="width:200px; height:220px">

                             <div class="mask rgba-white-slight"></div>
                         </div>
                         <hr class="hr-light">

                         <!-- Description -->
                         <h4 class="white-text my-4">Projeto realizado na conclusão da Licenciatura de Engenharia Informática </h4>
                         <?php echo "<br>"; ?>
                         <h4> UFP 2020/2021 </h4>

                     </div>

                 </div>

             </div>

         </div>

     </div>
     <!--/.Mask-->

 </header>
 <!--Main Navigation-->

 <!--Main layout-->
 <main class="mt-5">
     <div class="container">

         <!--Section: Best Features-->
         <section id="respostas-sociais" class="text-center">

             <!-- Heading -->
             <h2 class="mb-5 font-weight-bold">Respostas sociais</h2>


             <!--Grid row-->
             <div class="row">

                 <!--Grid column-->
                 <div class="col-md-4 mb-5">
                     <i class="fa fa-camera-retro fa-4x orange-text"></i>
                     <h4 class="my-4 font-weight-bold">Centro de Dia</h4>
                     <p class="grey-text"> Capacidade: 20 utentes.
                         Horário: 08:00 - 21:00 </p>
                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-md-4 mb-1">
                     <i class="fa fa-heart fa-4x orange-text"></i>
                     <h4 class="my-4 font-weight-bold">Estrutura Residencial para Pessoas Idosas (Lar de Idosos)</h4>
                     <p class="grey-text">Capacidade: 27 utentes. Horário: 24h</p>
                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-md-4 mb-1">
                     <i class="fa fa-bicycle fa-4x orange-text"></i>
                     <h4 class="my-4 font-weight-bold">Serviço de Apoio Domiciliário (Idosos)</h4>
                     <p class="grey-text">Capacidade: 45 utentes.
                         Horário: 08:00 - 21:00</p>
                 </div>
                 <!--Grid column-->

             </div>
             <!--Grid row-->

         </section>
         <!--Section: Best Features-->

         <hr class="my-5">

         <section id="historia">

             <!-- Heading -->
             <h2 class="mb-5 font-weight-bold text-center">Breve história sobre a instituição</h2>

             <!--Grid row-->
             <div class="row">

                 <!--Grid column-->
                 <div class="col-md-6 mb-4">

                     <!--Carousel Wrapper-->
                     <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                         <!--Indicators-->
                         <ol class="carousel-indicators">
                             <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                             <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                             <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                         </ol>
                         <!--/.Indicators-->
                         <!--Slides-->
                         <div class="carousel-inner z-depth-1-half" role="listbox">
                             <!--First slide-->
                             <div class="carousel-item active">
                                 <img class="d-block w-100" src="https://i.imgur.com/uciWkrh.png" alt="First slide">
                             </div>
                             <!--/First slide-->
                             <!--Second slide-->
                             <div class="carousel-item">
                                 <img class="d-block w-100" src="https://i.imgur.com/P1YsRY0.png" alt="Second slide">
                             </div>

                             <div class="carousel-item">
                                 <img class="d-block w-100" src="https://i.imgur.com/CUjGxlG.png" alt="Second slide">
                             </div>



                             
                         </div>
                         <!--/.Slides-->
                         <!--Controls-->
                         <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only">Next</span>
                         </a>
                         <!--/.Controls-->
                     </div>
                     <!--/.Carousel Wrapper-->

                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-md-6">

                     <p>Constatando-se a existência de grande número de idosos em situação de solidão, isolamento, dependência e sem condições habitacionais, iniciam-se contactos com a Segurança Social e os autarcas locais, no sentido de se construir de raiz um edifício para lar de idosos. Em 10 de outubro de 2003, o lar inicia a sua atividade com 15 utentes e um ano mais tarde são admitidos mais 10, completando assim a totalidade da sua capacidade (25).
                     </p>

                     <p>A sua construção inicia-se em Dezembro de 2000 depois de serem reunidos, para além dos capitais próprios, os seguintes apoios: terreno oferecido pela Junta de Freguesia, projeto oferecido pela Câmara Municipal e comparticipação da Segurança Social.

                     </p>

                     <p> Em julho de 2006, depois de várias solicitações da comunidade envolvente, dá-se início ao ATL em pausas letivas, para crianças dos 4 aos 12 anos.

                         Em 1 de Setembro de 2009, depois de obras de reabilitação do rés-do-chão do edifício sede, inicia-se a atividade da creche com 12 crianças.
                     </p>



                 </div>
                 <!--Grid column-->

             </div>
             <!--Grid row-->

         </section>

         <hr class="my-5">
         <!--Section: Examples-->
         <section id="atividades" class="text-center">

             <!-- Heading -->
             <h2 class="mb-5 font-weight-bold">Atividades realizadas pelos nossos Utentes</h2>

             <!--Grid row-->
             <div class="row">

                 <!--Grid column-->
                 <div class="col-lg-4 col-md-12 mb-4">

                     <div class="view overlay z-depth-1-half">
                         <img src="https://scontent.fymy1-1.fna.fbcdn.net/v/t1.6435-9/s720x720/194951385_4230725040353976_8200387773885469419_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=110474&_nc_ohc=-yDxiqrEdQ0AX99Rlah&_nc_ht=scontent.fymy1-1.fna&tp=7&oh=41b753db9ebf2f81ccde0d508a702fb6&oe=60E0897D" class="img-fluid" alt="">
                         <div class="mask rgba-white-slight"></div>
                     </div>

                     <h4 class="my-4 font-weight-bold">Dia da Criança - 01/06/2021</h4>


                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-lg-4 col-md-6 mb-4">

                     <div class="view overlay z-depth-1-half">
                         <img src="https://scontent.fymy1-1.fna.fbcdn.net/v/t1.6435-9/s720x720/175151847_4098148820278266_4533454166973825328_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=110474&_nc_ohc=3TpUwtu-yFsAX_1jpp1&_nc_ht=scontent.fymy1-1.fna&tp=7&oh=db7a259b4ba69bc9329f5f1354215e29&oe=60DEDD2C" class="img-fluid" alt="">
                         <div class="mask rgba-white-slight"></div>
                     </div>

                     <h4 class="my-4 font-weight-bold">19/04/2021</h4>


                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-lg-4 col-md-6 mb-4">

                     <div class="view overlay z-depth-1-half">
                         <img src="https://scontent.fymy1-1.fna.fbcdn.net/v/t1.6435-9/s720x720/187786247_4194330520660095_2208361847690054347_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=110474&_nc_ohc=VR9YtmWM3EkAX8T6gIS&_nc_ht=scontent.fymy1-1.fna&tp=7&oh=1cd6375651b7982f15fafa6a7dc52ac9&oe=60DF2A14" class="img-fluid" alt="">
                         <div class="mask rgba-white-slight"></div>
                     </div>

                     <h4 class="my-4 font-weight-bold">Porta-chaves 20/05/2021</h4>


                 </div>
                 <!--Grid column-->

             </div>
             <!--Grid row-->

             <!--Grid row-->
             <div class="row">

                 <!--Grid column-->
                 <div class="col-lg-4 col-md-12 mb-4">

                     <div class="view overlay z-depth-1-half">
                         <img src="https://scontent.fymy1-1.fna.fbcdn.net/v/t1.6435-9/s720x720/169067075_4183857785040702_5795314898696857625_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=110474&_nc_ohc=wgYM6vNDFeYAX8AkzuE&_nc_ht=scontent.fymy1-1.fna&tp=7&oh=8e5ee7f968e66286e309298c969de1e9&oe=60DE6CCF" class="img-fluid" alt="">
                         <div class="mask rgba-white-slight"></div>
                     </div>

                     <h4 class="my-4 font-weight-bold">Provérbios populares - 17/05/2021</h4>


                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-lg-4 col-md-6 mb-4">

                     <div class="view overlay z-depth-1-half">
                         <img src="https://scontent.fymy1-2.fna.fbcdn.net/v/t1.6435-9/s720x720/167579829_4041505312609284_5615256238551371289_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=110474&_nc_ohc=U_DTTpdr1MMAX8tJL6b&_nc_ht=scontent.fymy1-2.fna&tp=7&oh=29ca5af90e8621442f8b791680ef0321&oe=60DE348C" class="img-fluid" alt="">
                         <div class="mask rgba-white-slight"></div>
                     </div>

                     <h4 class="my-4 font-weight-bold">Páscoa 2021</h4>


                 </div>
                 <!--Grid column-->

                 <!--Grid column-->
                 <div class="col-lg-4 col-md-6 mb-4">

                     <div class="view overlay z-depth-1-half">
                         <img src="https://scontent.fymy1-1.fna.fbcdn.net/v/t1.6435-9/s720x720/179815911_4124994730927008_2122748344733370171_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8024bb&_nc_ohc=RJOvDSpTGhYAX9ZnURL&_nc_ht=scontent.fymy1-1.fna&tp=7&oh=b85ccbb9c208a8ddef76fdc3054afb68&oe=60DE3EF9" class="img-fluid" alt="">
                         <div class="mask rgba-white-slight"></div>
                     </div>

                     <h4 class="my-4 font-weight-bold">28-04-2021</h4>

                 </div>
                 <!--Grid column-->

             </div>
             <!--Grid row-->
         </section>
         <hr class="my-1">
         <!--Section: Contact-->
         <section id="contactos">
             <!--Grid row-->
             <div class="row">
                 <!--Grid column-->
                 <div class="col-lg-7 col-md-12">
                     <!--Google map-->
                     <div id="map-container" class="z-depth-1-half map-container mb-5"></div> <!-- style="height: 400px" -->
                 </div>
                 <!--Grid column-->
             </div>
             <!--Grid row-->
         </section>
         <!--Section: Contact-->
     </div>
 </main>

 <!-- Footer -->
 <footer class="page-footer font-small unique-color-dark" style="background-color:lightgrey">

     <!-- Social buttons -->
     <div class="primary-color">
         <div class="container">
             <!--Grid row-->
             <div class="mb-5 font-weight-bold text-center">
                 <h1>Contactos</h1>
             </div>
             <!--Grid row-->
         </div>
     </div>
     <!-- Social buttons -->

     <!--Footer Links-->
     <div class="container mt-5 mb-0 text-center text-md-left">
         <div class="row mt-3">

             <!--First column-->
             <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                 <h6 class="text-uppercase font-weight-bold">
                     <strong>Email</strong>
                 </h6>
                 <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                 <p>lar.ccm@gmail.com</p>
             </div>
             <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                 <h6 class="text-uppercase font-weight-bold">
                     <strong>Contacto telefónico</strong>
                 </h6>
                 <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                 <p>273739582</p>
             </div>
             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                 <h6 class="text-uppercase font-weight-bold">
                     <strong>Localização</strong>
                 </h6>
                 <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                 <p> Casa da Criança Mirandesa Rua Doutor Valentim Guerra 5225-132 Sendim</p>
             </div>

         </div>
     </div>
     <!--/.Footer Links-->

     <!-- Copyright -->
     <div class="footer-copyright text-center ">© 2021 Catarina Ginjo
         <!--Copyright-->
         <!-- <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>-->
     </div>


 </footer>

 </html>
 <header>
     <script>
         // Regular map
         function regular_map() {
             var var_location = new google.maps.LatLng(40.725118, -73.997699);

             var var_mapoptions = {
                 center: var_location,
                 zoom: 14
             };

             var var_map = new google.maps.Map(document.getElementById("map-container"),
                 var_mapoptions);

             var var_marker = new google.maps.Marker({
                 position: var_location,
                 map: var_map,
                 title: "Sendim"
             });
         }

         // Initialize maps
         google.maps.event.addDomListener(window, 'load', regular_map);

         // Carousel options

         $('.carousel').carousel({
             interval: 3000,
         })
     </script>
     <style>
         html,
         body,
         header,
         #intro {
             height: 100%;
         }

         #intro {
             background: url("https://wallpaper.dog/large/20472521.jpg")no-repeat center center fixed;
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;
         }

         .top-nav-collapse {
             background-color: #24355C;
         }

         @media (max-width: 768px) {
             .navbar:not(.top-nav-collapse) {
                 background-color: #24355C;
             }
         }

         @media (min-width: 800px) and (max-width: 850px) {
             .navbar:not(.top-nav-collapse) {
                 background-color: #24355C;
             }
         }
     </style>