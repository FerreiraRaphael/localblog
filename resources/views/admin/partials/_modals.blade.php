<div class="modal fade" id="modal-delete" tabIndex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {!! Form::button('×',['class' => 'close','data-dismiss' => 'modal']) !!}
          <h4 class="modal-title">Por favor Confirme</h4>
        </div>
        <div class="modal-body">
          <p class="lead">
            <i class="fa fa-question-circle fa-lg"></i>  
            @if($type=='delete-post')
            Tem certeza que deseja deletar este post ?
            @elseif ($type=='delete-tag') 
            Tem certeza que deseja deletar esta tag ?
            @endif
          </p>
        </div>
        <div class="modal-footer">
          {!! Form::open(['route' => [$route, $id]]) !!}
          {!! Form::input('hidden','_method','delete') !!}          
          {!! Form::bsButton('Fechar',['class' => 'btn-default','data-dismiss' => 'modal']) !!}
          {!! Form::bsButton('Sim',['type' => 'submit', 'class' => 'btn-danger'],'fa-times-circle') !!}
          {!! Form::close() !!}        
        </div>
      </div>
    </div>
  </div>
</div>