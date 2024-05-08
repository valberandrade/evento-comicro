<section class="container-fluid esta-incluso">

    <div class="container">

        <div class="text-center">
            <h2 class="text-light">O que está incluso</h2>
            <p class="text-light subtitle">Fica ligado no que é por nossa conta</p>
        </div>

        <div class="row gx-5 mb-3 mb-md-5">

            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-ideation.svg') }}" alt="Ideation" title="Ideation" width="70" height="70" />
                    <h3>Ideation</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-budget.svg') }}" alt="Budget" title="Budget" width="70" height="70" />
                    <h3>Budget</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-performance.svg') }}" alt="Performance" title="Performance" width="70" height="70" />
                    <h3>Performance</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/icone-speed.svg') }}" alt="Speed" title="Speed" width="70" height="70" />
                    <h3>Speed</h3>
                    <p>Use this section to describe your company and the products you offer.</p>
                </div>
            </div><!-- COL -->

        </div><!-- ROW -->

        @component('front.layouts._components.btn_inscricao', ['class' => 'd-flex justify-content-center', 'link' => '#', 'rotulo' => 'Inscreva-se'])
        @endcomponent

    </div><!-- CONTAINER -->

</section>
