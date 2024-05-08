@extends('.front.layouts.template')

{{--SEO--}}
@section('title', 'Quero Expor | COMICRO')
@section('meta_description', 'Por que Expor')
@section('site_url', '#')

{{--CONTENT--}}
@section('content')

    <!------------------- BANNER ---------------------->
    <section class="banner banner-quero-expor container-fluid">

        <div class="container">

            <div class="row d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">

                <div class="col-md-6 mb-5 mb-lg-0">
                    <h1>Por que Expor</h1>
                    <p>Amplie sua visibilidade, conquiste novos clientes e faça parcerias estratégicas em nosso evento.</p>

                    <p>Com uma audiência qualificada de potenciais compradores, empresários, investidores e líderes do mercado, a exposição de sua empresa é a oportunidade perfeita para alavancar seus negócios.</p>

                    <p>Não perca a oportunidade de se destacar no COMICRO Conectando Negócios e fortalecer sua presença de mercado. Garanta seu espaço hoje mesmo!</p>
                    <div class="buttons d-flex mt-5">
                        <a href="https://api.whatsapp.com/send?phone=5581981531166&text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20Stands%20no%20COMICRO%20Conectando%C2%A0Neg%C3%B3cios" class="btn btn-warning btn-vaga text-uppercase me-4">SOLICITAR VALORES</a>
                        <a href="https://api.whatsapp.com/send?phone=5581981531166&text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20Stands%20no%20COMICRO%20Conectando%C2%A0Neg%C3%B3cios" class="btn btn-outline-warning text-uppercase btn-saiba-mais">TIRAR DÚVIDAS</a>
                    </div><!-- BUTTONS -->
                </div><!-- COL -->

            </div><!-- ROW -->

        </div><!-- CONTAINER -->

    </section>


    <!------------------- STANDS ---------------------->
    @include('front.layouts._includes.stands')


    <!------------------- EXPOSITORES ---------------------->
    <section class="container-fluid card-expositores" id="mapa-do-evento">

        <div class="container">

            <h2 class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">Mapa do Evento</h2>

{{--            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">--}}

{{--                @for($i = 1; $i <= 6; $i++)--}}
{{--                <div class="col-md-6 col-lg-4 mb-5">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header text-center">--}}
{{--                            <img src="{{ asset('img/logos/logo-evernote.svg') }}" alt="" title="" width="164" height="48" />--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between mb-3">--}}
{{--                                <span>E-mail:</span>--}}
{{--                                <a href="#" target="_blank">Enviar e-mail</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between mb-3">--}}
{{--                                <span>Telefone:</span>--}}
{{--                                <a href="#" target="_blank">(81) 9 9999-9999</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between mb-3">--}}
{{--                                <span>Site:</span>--}}
{{--                                <a href="#" target="_blank">Acessar</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between mb-3">--}}
{{--                                <span>Redes sociais:</span>--}}
{{--                                <ul class="d-flex justify-content-end">--}}
{{--                                    <li>--}}
{{--                                        <a href="#" target="_blank">--}}
{{--                                            <img src="{{ asset('img/linkedin-roxo.svg') }}" alt="Linkedin" title="Linkedin" width="24" height="24" />--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" target="_blank">--}}
{{--                                            <img src="{{ asset('img/instagram-roxo.svg') }}" alt="Instagram" title="Instagram" width="28" height="28" />--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" target="_blank">--}}
{{--                                            <img src="{{ asset('img/twitter-roxo.svg') }}" alt="Twitter" title="Twitter" width="28" height="28" />--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" target="_blank">--}}
{{--                                            <img src="{{ asset('img/facebook-roxo.svg') }}" alt="Facebook" title="Facebook" width="28" height="28" />--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- COL -->--}}
{{--                @endfor--}}

{{--            </div><!-- ROW -->--}}

            <div class="row gx-5 mb-3 mb-md-5" data-aos="fade-up" data-aos-duration="1000">

                <div class="col-lg-6 order-2 mb-5 mb-lg-0 order-lg-1">
                    <span>Legenda por cores</span>

                    <div class="row mt-4 mb-4">
                        <div class="col-md-5">
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #ffcb04;"></div>
                                <p class="description mb-0">44 Stands 2x3m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #f5821f;"></div>
                                <p class="description mb-0">76 Stands 3x3m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #e887e5;"></div>
                                <p class="description mb-0">11 Stands 5x4m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #e7d1ff;"></div>
                                <p class="description mb-0">11 Stands 5x5m</p>
                            </div>
                        </div><!-- COL -->

                        <div class="col-md-7">
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #ac9ce8;"></div>
                                <p class="description mb-0">03 Stands 10x5m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #adbd82;"></div>
                                <p class="description mb-0">02 Lounges 10x5m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #6ba983;"></div>
                                <p class="description mb-0">Lanchonetes 4x3m</p>
                            </div>
{{--                            <div class="d-flex align-items-center item mb-1">--}}
{{--                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71c1fa;"></div>--}}
{{--                                <p class="description mb-0">Estruturas do Evento</p>--}}
{{--                            </div>--}}
                        </div><!-- COL -->
                    </div><!-- ROW -->

                    <span>Estruturas do Evento</span>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Pórtico Entrada - 9,80 x 2,70m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Bilheteria - 8,00 x 2,50m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Instagramável - 5,00 x 2,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Caex - 5,00 x 3,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Pórtico Congresso - 5,00 x 1,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Credenciamento - 6,00 x 2,50m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Podcast - 3,00 x 3,50m</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Imprensa - 4,00 x 3,50m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Sala Vip - 10,00 x 3,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Camarim - 3,00 x 2,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Palco - 20,00 x 4,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Platéia - 24,00 x 21,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Depósito - 25,00 x 3,00m</p>
                            </div>
                            <div class="d-flex align-items-center item mb-1">
                                <div class="box-cor me-2" style="width: 32px; height: 32px; border-radius: 4px; background: #71C2FA;"></div>
                                <p class="description mb-0">Posto Médico - 4,00 x 3,00m</p>
                            </div>
                        </div>
                    </div>
                </div><!-- COL -->

                <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0">
                    <img src="{{ asset('img/mapa-comicro.png') }}" alt="Mapa do Evento" title="Mapa do Evento" width="653" height="754" class="img-fluid" />
                </div>

            </div><!-- ROW -->

        </div><!-- CONTAINER -->

    </section>

    <section class="container carrossel-expositores">

        <h2 class="text-center">Expositores</h2>

        <!-- Swiper -->
        <div class="swiper SwiperCarExp mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/dlia_cachaca" target="_blank">
                        <img src="{{ asset('img/logos/cachaca-dlia.png') }}" alt="Cachaça D'Lia" title="Cachaça D'Lia" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/ekilibreblends" target="_blank">
                        <img src="{{ asset('img/logos/ekilibre.png') }}" alt="Ekilibre Blends" title="Ekilibre Blends" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/olea_veg" target="_blank">
                        <img src="{{ asset('img/logos/oleaveg.png') }}" alt="Olea Veg" title="Olea Veg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/senhoradasarmas2?igsh=MXh3cDlwN29oZjI3dw%3D%3D&utm_source=qr" target="_blank">
                        <img src="{{ asset('img/logos/logo-senhora-das-armas.png') }}" alt="Senhora das Armas" title="Senhora das Armas" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/camedecooperativa" target="_blank">
                        <img src="{{ asset('img/logos/cooperativa-mestre-dezinho.png') }}" alt="Cooperativa de Artesanato Mestre Dezinho" title="Cooperativa de Artesanato Mestre Dezinho" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/rosimarbiju" target="_blank">
                        <img src="{{ asset('img/logos/rosimar-gomes.png') }}" alt="Rosimar Gomes Bijuterias" title="Rosimar Gomes Bijuterias" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/usesoloficial" target="_blank">
                        <img src="{{ asset('img/logos/usesol.png') }}" alt="Usesol Energia Solar" title="Usesol Energia Solar" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/silverking925_" target="_blank">
                        <img src="{{ asset('img/logos/silverking.png') }}" alt="Silver King" title="Silver King" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/p/C44VaYcLYBB/?igsh=cWo2MTd4dGJtZmV3" target="_blank">
                        <img src="{{ asset('img/logos/ressaire.png') }}" alt="Ressaire Cosméticos" title="Ressaire Cosméticos" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/fabricapecafecaramello?igsh=anJ2NzR0N3V1OG5k" target="_blank">
                        <img src="{{ asset('img/logos/cafe-caramello.png') }}" alt="Café Caramello" title="Café Caramello" />
                    </a>
                </div>
				<div class="swiper-slide">
                    <a href="https://www.instagram.com/new_star_moda_praia?igsh=eDgxMnBmM3dwMWdl" target="_blank">
                        <img src="{{ asset('img/logos/new-star.png') }}" alt="New Star Moda Praia" title="New Star Moda Praia" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/abrafesc/" target="_blank">
                        <img src="{{ asset('img/logos/abrafesc-2.png') }}" alt="ABRAFESC" title="ABRAFESC" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/rlplanosdesaudeoficial" target="_blank">
                        <img src="{{ asset('img/logos/rl-planos-de-saude.png') }}" alt="R&L Planos de Saúde" title="R&L Planos de Saúde" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/cursodesaudeexcellence/" target="_blank">
                        <img src="{{ asset('img/logos/excelence.png') }}" alt="Excelence Cursos de Saúde" title="Excelence Cursos de Saúde" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/aspnec_associacao" target="_blank">
                        <img src="{{ asset('img/logos/aspnec.png') }}" alt="ASPNEC" title="ASPNEC" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/elianemellooficial" target="_blank">
                        <img src="{{ asset('img/logos/eliane-mello.png') }}" alt="ELIANE MELLO" title="ELIANE MELLO" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/institutomariadapenha/" target="_blank">
                        <img src="{{ asset('img/logos/imp.png') }}" alt="IMP" title="IMP" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/fundodonademim" target="_blank">
                        <img src="{{ asset('img/logos/dona-de-mim.png') }}" alt="Dona de Mim" title="Dona de Mim" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/cibelytercos" target="_blank">
                        <img src="{{ asset('img/logos/cibely-tercos.png') }}" alt="Cibely Terços" title="Cibely Terços" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/cofasmi" target="_blank">
                        <img src="{{ asset('img/logos/cofasmi.png') }}" alt="COFASMI" title="COFASMI" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/vivarts_" target="_blank">
                        <img src="{{ asset('img/logos/vivarts.png') }}" alt="Vivarts" title="Vivarts" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/camisetasinspiradas" target="_blank">
                        <img src="{{ asset('img/logos/camisetas-inspiradas.png') }}" alt="Camisetas Inspiradas" title="Camisetas Inspiradas" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/alfaeomegaartesanato" target="_blank">
                        <img src="{{ asset('img/logos/alfa-omega.png') }}" alt="Alfa & Ômega" title="Alfa & Ômega" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/sonhodosdeuses_pijamas" target="_blank">
                        <img src="{{ asset('img/logos/sonho-dos-deuses.png') }}" alt="Sonho dos Deuses Pijamas" title="Sonho dos Deuses Pijamas" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/b.e.a.velas" target="_blank">
                        <img src="{{ asset('img/logos/bea.png') }}" alt="B&A" title="B&A" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/danibarrosresinart" target="_blank">
                        <img src="{{ asset('img/logos/dani-barros.png') }}" alt="Dani Barros Resinart" title="Dani Barros Resinart" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/eusendoapotencia" target="_blank">
                        <img src="{{ asset('img/logos/priscila-antonio.png') }}" alt="Priscila Antônio" title="Priscila Antônio" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/priscila_barrasdeaccess" target="_blank">
                        <img src="{{ asset('img/logos/di-mesa.png') }}" alt="Di Mesa" title="Di Mesa" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/crisbolosoficial" target="_blank">
                        <img src="{{ asset('img/logos/cris.png') }}" alt="Cris Bolos e Cursos" title="Cris Bolos e Cursos" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/redeelaempreendedora" target="_blank">
                        <img src="{{ asset('img/logos/rede-ela.png') }}" alt="Rede Ela Empreendedora" title="Rede Ela Empreendedora" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/feira.empreendedor.local" target="_blank">
                        <img src="{{ asset('img/logos/feira-empreendedor-local.png') }}" alt="Feira Empreendedor Local" title="Feira Empreendedor Local" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/empreendedor.pleno" target="_blank">
                        <img src="{{ asset('img/logos/empreendedor-pleno.png') }}" alt="Empreendedor Pleno" title="Empreendedor Pleno" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/jasfolheados" target="_blank">
                        <img src="{{ asset('img/logos/jas-folheados.png') }}" alt="JAS Folheados" title="JAS Folheados" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/alexsndra_criacoes09" target="_blank">
                        <img src="{{ asset('img/logos/alexandra-criacoes.png') }}" alt="Alexandra Criações" title="Alexandra Criações" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/amicro.aqiraz" target="_blank">
                        <img src="{{ asset('img/logos/amicro-aquiraz.png') }}" alt="AMICRO AQUIRAZ" title="AMICRO AQUIRAZ" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/todaboafashion" target="_blank">
                        <img src="{{ asset('img/logos/toda-boa.png') }}" alt="Toda Boa Moda Feminina" title="Toda Boa Moda Feminina" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/piratasmodapraia" target="_blank">
                        <img src="{{ asset('img/logos/piratas.png') }}" alt="Piratas Moda Praia" title="Piratas Moda Praia" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/aebroficial" target="_blank">
                        <img src="{{ asset('img/logos/aebr.png') }}" alt="AEBR" title="AEBR" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/todosetudocolab" target="_blank">
                        <img src="{{ asset('img/logos/todos-e-tudo.png') }}" alt="Todos & Tudo" title="Todos & Tudo" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.instagram.com/use.marminino" target="_blank">
                        <img src="{{ asset('img/logos/marminino.png') }}" alt="Marminino Estamparia" title="Marminino Estamparia" />
                    </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
{{--            <div class="swiper-pagination"></div>--}}
        </div>

    </section>



@endsection
