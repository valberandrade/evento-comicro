@extends('.front.layouts.template')

{{--SEO--}}
@section('title', 'Conectando Negócios | COMICRO')
@section('meta_description', 'Inovações que Impulsionam as Micro e Pequenas Empresas')
@section('site_url', '#')

{{--CONTENT--}}
@section('content')

    <!------------------- BANNER ---------------------->
    @include('front.layouts._includes.banner')


    <!------------------- SOBRE ---------------------->
    @include('front.layouts._includes.sobre')


    <!------------------- EVENTO ---------------------->
    @include('front.layouts._includes.evento')


    <!------------------- PRA QUEM É INDICADO ---------------------->
    @include('front.layouts._includes.indicado')


    <!------------------- TAGS ---------------------->
    @include('front.layouts._includes.tags')


    <!------------------- PROGRAMAÇÃO ---------------------->
    @include('front.layouts._includes.programacao')


    <!------------------- PALESTRANTES ---------------------->
    @include('front.layouts._includes.palestrantes')


    <!------------------- GALERIA DE IMAGENS ---------------------->
    @include('front.layouts._includes.galeria')


    <!------------------- NÃO PERCA A CHANCE ---------------------->
    @include('front.layouts._includes.chance')


    <!------------------- FAQ ---------------------->
    @include('front.layouts._includes.faq')


    <!------------------- REALIZAÇÃO ---------------------->
    @include('front.layouts._includes.realizacao')


    <!------------------- PATROCINADORES ---------------------->
    @include('front.layouts._includes.patrocinadores')


    <!------------------- APOIADORES ---------------------->
    @include('front.layouts._includes.apoiadores')


    <!------------------- APOIO INSTITUCIONAL ---------------------->
    @include('front.layouts._includes.apoio-institucional')


    <!------------------- CONTATOS ---------------------->
    @include('front.layouts._includes.contatos')

@endsection
