@extends('blog.layouts.master')

@section('page-header')
  <header class="intro-header"
          style="background-image: url('{{ page_image($page_image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>Se você tem perguntas</h1>
            <hr class="small">
            <h2 class="subheading">talvez eu tenha as repostas</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
  <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Olá, meu nome é Raphael de Brito Soares Ferreira, estudante de Engenharia de Software na Universidade Federal de Goiás, e este é o localblog minha primeira tentativa de por alguma coisa online e consequentemente meu primeiro blog.</p>
                <p>Pretendo preencher esse carinha com coisas que aprendo no dia a dia, hoje desenvolvo/estudo solo (sozinho, na escuridão da noite ou no meu quarto) na framework Laravel, que é uma framework do PHP,  e trabalho com desenvolvimento ASP. Net que é legal também né, mas vou falar mais sobre Laravel e coisas Open Source, que é bem mais show, porque é Open Source.</p>
                <p>Este blog tem o Laravel cuidando do seu back-end, e este front-end bonitão é Open Source também. Que louco né. Este é o template gratuito <a href="http://startbootstrap.com/template-overviews/clean-blog/">Clean Blog</a>, que já é responsivo ou seja love ( amor, carrinho, cheiro no pescoço ) dos smartphones, que coisa bonita não é... Belo.</p>
                <p>Todo este blog foi criado seguindo o <a href="http://laravelcoding.com/blog?tag=L5+Beauty">Laravel 5 Beauty</a> do escritor do livro <a href="https://leanpub.com/l5-beauty">The Laravel 5.1 Beauty Book</a> Chuck Heintzelman, neste tutorial ele ensina boas praticas da Laravel, que me deram uma boa noção inicial da framework, Thanks Chuck.</p>
            </div>
        </div>
    </div>

    <hr>
@stop