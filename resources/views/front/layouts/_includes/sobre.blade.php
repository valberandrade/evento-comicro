<section class="container-fluid sobre" id="sobre">

    <div class="container">

        <div class="row gx-5 d-flex align-items-center">

            <div class="col-lg-5 mb-5 mb-lg-0 text-center text-lg-start" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300">
                <img src="{{ asset('img/img-sobre.png') }}" alt="Sobre o Evento" title="Sobre o Evento" width="517" height="506" class="img-fluid" />
            </div><!-- COL -->

            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300">

                <div class="content-sobre">
                    <h2>Sobre o Evento</h2>

                    <p>O evento que coloca em destaque a força e o potencial das micro e pequenas empresas brasileiras será realizado nos dias 16 a 18 de novembro de 2023, no Centro de Convenções de Pernambuco.</p>
                    <p>Em meio a diversas transformações que afetam diretamente o dia a dia dos pequenos negócios, esta edição tem como tema central: Inovações que Impulsionam as Micro e Pequenas Empresas.</p>
                    <p>O COMICRO Conectando Negócios reunirá diversas oportunidades como feira de negócios, palestras, casos de sucesso, workshops, atendimento empresarial, apresentações culturais e muito mais</p>
                    <p>É chegada a hora de embarcar em uma jornada de descobertas, inspiração e transformação. Vamos nessa?</p>

                    @component('front.layouts._components.btn_inscricao', ['class' => 'd-flex justify-content-center justify-content-lg-start', 'link' => 'https://www.sympla.com.br/evento/comicro-conectando-negocios/2157093', 'rotulo' => 'QUERO PARTICIPAR'])
                    @endcomponent
                </div>

            </div><!-- COL -->

        </div><!-- ROW -->

    </div><!-- CONTAINER -->

</section>
