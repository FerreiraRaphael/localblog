@extends('admin.layout')

@section('styles')
<link href="/assets/pickadate/themes/default.css" rel="stylesheet">
<link href="/assets/pickadate/themes/default.date.css" rel="stylesheet">
<link href="/assets/pickadate/themes/default.time.css" rel="stylesheet">
<link href="/assets/selectize/css/selectize.css" rel="stylesheet">
<link href="/assets/selectize/css/selectize.bootstrap3.css" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid">
  <div class="row page-title-row">
    <div class="col-md-12">
      <h3>Posts <small>» Editar Post</small></h3>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Post Editar Form</h3>
        </div>
        <div class="panel-body">

          @include('admin.partials.errors')
          @include('admin.partials.success')
          @include('admin.macros.form')

          {!! Form::open(['method' => 'POST', 'route' => ['admin.post.update', $id], 'class' => 'form-horizontal']) !!}      

          {!! Form::input('hidden','_method','PUT') !!}
          <?php 
          $buttons = [
          'button1' =>[
          'value' => 'Salvar',
          'options' =>  ['type' => 'submit','name' => 'action','value' => 'continue'],
          'icon' => 'fa-floppy-o'
          ],
          'button2' =>  [
          'value' => 'Salvar - Fechar',
          'options' => ['type' => 'submit','name' => 'action','value' => 'finished', 'class' => 'btn-success btn-lg'],
          'icon' => 'fa-floppy-o'
          ],
          'button3' =>  [
          'value' => 'Deletar',
          'options' => ['class' => 'btn-danger btn-lg', 'data-toggle' => 'modal', 'data-target' => '#modal-delete'],
          'icon' => 'fa-times-circle'
          ]
          ]; 
          ?>
          @include('admin.post._form',['buttons' => $buttons])

          {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>

  @include('admin.partials._modals',['type' => 'delete-post', 'route' => 'admin.post.destroy'])

  @stop

  @section('scripts')
  <script src="/assets/pickadate/picker.js"></script>
  <script src="/assets/pickadate/picker.date.js"></script>
  <script src="/assets/pickadate/picker.time.js"></script>
  <script src="/assets/selectize/selectize.min.js"></script>
  <script>
    $(function() {
      $("#publish_date").pickadate({
        format: "mmm-d-yyyy"
      });
      $("#publish_time").pickatime({
        format: "h:i A"
      });
      $("#tags").selectize({
        create: true
      });
    });
  </script>
  @stop