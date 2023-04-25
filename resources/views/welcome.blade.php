<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DeepTree</title>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('/jpg/tree.jpg');
            }
            
        </style>
    </head>
    <body id="page-top">
       <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"> 
             <div class="container px-4 px-lg-5"> 
                <div class="collapse navbar-collapse" id="navbarResponsive">
                @include('layouts/navbar')
                </div>
            </div>
        </nav>
            <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">DeepTree</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Im więcej drzew, tym większa szansa na ocalenie naszej planety</h2>
                        <a class="btn btn-primary" href="#about">Dowiedz się więcej</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Posadź drzewo z nami</h2>
                        <p class="text-white-50">
                            Niewielki koszt czasu oraz pieniędzy pomoże nam wszystkim uratować planetę. Ten projekt
                            jest jednym z niewielu takich działań w Polsce. Koniecznie przeczytaj krótkie wytłumaczenie, po co to wszystko.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="{{ asset('/jpg/sadzenie.jpg') }}" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('/jpg/emisjapolska.jpg') }}" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Emisja w Polsce</h4>
                            <p class="text-black-50 mb-0">Emisja CO2 z polskich instalacji objętych europejskim systemem handlu emisjami (EU ETS), łącznie z sektorem lotniczym, w 2021 r. wyniosła blisko 192 mln ton CO2 i była wyższa o 11,5 proc. w porównaniu do emisji w 2020 r. Informację podał w swoim cyklicznym raporcie. Krajowy Ośrodek Bilansowania i Zarządzania Emisjami (KOBiZE).</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('/jpg/z2.jpg') }}" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Emisja w transporcie</h4>
                                    <p class="mb-0 text-white-50">Transport ma coraz większy udział w emisji gazów cieplarnianych i ze względu na swoja zależność od paliw ropopochodnych i węgla właśnie w tym sektorze najtrudniej przeprowadzić jest działania mające na celu redukcje emisji. Bez zmiany stylu życia i modelu konsumpcji oraz sposobu zagospodarowania przestrzeni, warunkujących mobilność i transportochłonność, nie można liczyć na łatwe sukcesy w ograniczaniu emisji gazów cieplarnianych.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('/jpg/z1.jpg') }}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Jak to wygląda na świecie?</h4>
                                    <p class="mb-0 text-white-50">W tym roku globalna emisja dwutlenku węgla (CO2) ze spalania paliw kopalnych ustanowi nowy rekord: 37,5 miliarda ton. To wzrost o 1% w porównaniu z rokiem 2021. Emisja CO2 związana ze zmianą użytkowania gruntów (na przykład wycinaniem lasów) wyniesie natomiast 3,9 mld ton. W tym tempie w ciągu zaledwie dziewięciu lat ludzkość wpompuje do atmosfery dość CO2, by przekroczyć próg ocieplenia o 1,5°C. Omawiamy budżet węglowy 2022 (Global Carbon Budget 2022).</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Adres placówki</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">74 ul.Słoneczna, Warszawa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">deeptreepolska@wp.pl</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Numer telefonu</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+48 555-435-2443</div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">@DeepTree2022</div></footer>
                    
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('js/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
