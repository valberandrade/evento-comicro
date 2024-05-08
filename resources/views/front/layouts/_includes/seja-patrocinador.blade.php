<section class="container-fluid seja-patrocinador" id="patrocinadores">

    <div class="container">

        <div class="text-center">
            <h2>Seja um Patrocinador</h2>
            <p class="subtitle">Veja quem são os nossos Patrocinadores do Evento</p>
        </div>

        <div class="row gx-5 mb-3 mb-md-5">

            <div class="col-md-4 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-ideation.svg') }}" alt="Passo 1" title="Passo 1" width="70" height="70" />
                    <h3>Passo 1</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

            <div class="col-md-4 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-budget.svg') }}" alt="Passo 2" title="Passo 2" width="70" height="70" />
                    <h3>Passo 2</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

            <div class="col-md-4 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-performance.svg') }}" alt="Passo 3" title="Passo 3" width="70" height="70" />
                    <h3>Passo 3</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

        </div><!-- ROW -->

        @component('front.layouts._components.btn_inscricao', ['class' => 'd-flex justify-content-center', 'link' => '#', 'rotulo' => 'Quero Patrocinar'])
        @endcomponent

    </div><!-- CONTAINER -->

</section>
