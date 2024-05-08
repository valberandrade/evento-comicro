<section class="container-fluid chance" id="data-local">

    <div class="container">

        <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
            <h2>Não Perca a Chance de se Desenvolver</h2>
        </div>

        <div class="row gx-4 mb-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">

            <div class="col-md-4 mb-5 mb-md-4 mb-lg-0 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div class="icon">
                            <img src="{{ asset('img/icone-horario.svg') }}" alt="Horário" title="Horário" width="40" height="40" />
                        </div>
                        <h3>Horário</h3>
                        <span>Das 10h às 20h</span>
                        <small>Horário de Brasília</small>
                    </div>
                </div>
            </div><!-- COL -->

            <div class="col-md-4 mb-5 mb-md-4 mb-lg-0 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div class="icon">
                            <img src="{{ asset('img/icone-data.svg') }}" alt="Horário" title="Horário" width="40" height="40" />
                        </div>
                        <h3>Data</h3>
                        <span>16 a 18 de Novembro</span>
                        <small>Ano de 2023</small>
                    </div>
                </div>
            </div><!-- COL -->

            <div class="col-md-4 mb-5 mb-md-4 mb-lg-0 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div class="icon">
                            <img src="{{ asset('img/icone-local.svg') }}" alt="Local" title="Local" width="40" height="40" />
                        </div>
                        <h3>Local</h3>
                        <span><a href="https://maps.app.goo.gl/fMns5T1aH9jCQHXD8" target="_blank">Centro de Convenções de Pernambuco</a></span>
                    </div>
                </div>
            </div><!-- COL -->

{{--            <div class="col-6 col-lg-3 mb-5 mb-md-4 mb-lg-0 d-flex align-items-stretch">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body d-flex flex-column">--}}
{{--                        <div class="icon">--}}
{{--                            <img src="{{ asset('img/icone-valores.svg') }}" alt="Valores" title="Valores" width="40" height="40" />--}}
{{--                        </div>--}}
{{--                        <h3>Valores</h3>--}}
{{--                        <span>Gratuito para<br>Empreendedores</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- COL -->--}}

        </div><!-- ROW -->

        <div data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
            @component('front.layouts._components.btn_inscricao', ['class' => 'd-flex justify-content-center', 'link' => 'https://www.sympla.com.br/evento/comicro-conectando-negocios/2157093', 'rotulo' => 'Inscreva-se'])
            @endcomponent
        </div>

    </div><!-- CONTAINER -->

</section>
