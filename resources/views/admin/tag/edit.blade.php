@extends('admin.layout')

@section('content')
<div class="container-fluid">
  <div class="row page-title-row">
    <div class="col-md-12">
      <h3>Tags <small>» Editar Tag</small></h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Tag Editar Form</h3>
        </div>
        <div class="panel-body">
          @include('admin.macros.form')
          @include('admin.partials.errors')
          @include('admin.partials.success')
          
            {!! Form::open(['class' => 'form-horizontal', 'route' => ['admin.tag.update',$id]]) !!} 
            {!! Form::input('hidden','_method','PUT') !!}
          
          {{--   <form class="form-horizontal" role="form" method="POST"
            action="/admin/tag/{{ $id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{ $id }}"> --}}

            <div class="form-group">
              {!! Form::bsLabel('tag', 'Tag',['class' => 'col-md-3']) !!}
              <div class="col-md-3">
                <p class="form-control-static">{{ $tag }}</p>
              </div>
            </div>

            <?php 
            $buttons = [
            'button1' =>[
            'value' => 'Salvar',
            'options' =>  ['type' => 'submit','name' => 'action','value' => 'continue', 'class' => 'btn-primary btn-md'],
            'icon' => 'fa-floppy-o'
            ],
            'button2' =>  [
            'value' => 'Salvar - Fechar',
            'options' => ['type' => 'submit','name' => 'action','value' => 'finished', 'class' => 'btn-success btn-md'],
            'icon' => 'fa-floppy-o'
            ],
            'button3' =>  [
            'value' => 'Deletar',
            'options' => ['class' => 'btn-danger btn-md', 'data-toggle' => 'modal', 'data-target' => '#modal-delete'],
            'icon' => 'fa-times-circle'
            ]
            ]; 
            ?>
            @include('admin.tag._form', ['buttons' => $buttons])

              {{-- <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <button type="submit" class="btn btn-primary btn-md">
                    <i class="fa fa-save"></i>
                      Save Changes
                  </button>
                  <button type="button" class="btn btn-danger btn-md"
                          data-toggle="modal" data-target="#modal-delete">
                    <i class="fa fa-times-circle"></i>
                    Delete
                  </button>
                </div>
              </div> --}}

              {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Confirm Delete --}}
  {{-- <div class="modal fade" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            ×
          </button>
          <h4 class="modal-title">Please Confirm</h4>
        </div>
        <div class="modal-body">
          <p class="lead">
            <i class="fa fa-question-circle fa-lg"></i>  
            Are you sure you want to delete this tag?
          </p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="/admin/tag/{{ $id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">
            <button type="button" class="btn btn-default"
            data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-times-circle"></i> Yes
            </button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
  @include('admin.partials._modals', ['type' => 'delete-tag','route' => 'admin.tag.destroy'])
  @stop