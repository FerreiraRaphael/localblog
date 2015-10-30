@include('admin.macros.form')
{{-- Create Folder Modal --}}
<div class="modal fade" id="modal-folder-create">
  <div class="modal-dialog">
    <div class="modal-content">
        {!! Form::open(['route' => ['admin.upload.folder'], 'class' => 'form-horizontal']) !!}
        <div class="modal-header">
          {!! Form::input('hidden','folder',$folder) !!}
          {!! Form::button('×', ['class' => 'close', 'data-dismiss' => 'modal']) !!}
          <h4 class="modal-title">Criar Nova Pasta</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            {!! Form::bsLabel('new_folder_name', 'Nome da Pasta', ['class' => 'col-sm-3']) !!}            
            <div class="col-sm-8">
              {!! Form::bsText('new_folder') !!}              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          {!! Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}          
          {!! Form::button('Criar Pasta', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}          
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  {{-- Delete File Modal --}}
  <div class="modal fade" id="modal-file-delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          {!! Form::button('×',[ 'class' => 'close', 'data-dismiss' => 'modal']) !!}        
          <h4 class="modal-title">Por favor Confirme</h4>
        </div>
        <div class="modal-body">
          <p class="lead">
            <i class="fa fa-question-circle fa-lg"></i>  
            Você tem certeza que deseja deletar o arquivo: 
            <kbd><span id="delete-file-name1">file</span></kbd>
          </p>
        </div>
        <div class="modal-footer">
          {!! Form::open(['route' => 'admin.upload.file.destroy']) !!}
          {!! Form::input('hidden', '_method', 'DELETE') !!}
          {!! Form::input('hidden', 'folder', $folder) !!}
          {!! Form::input('hidden', 'del_file', null,['id' => 'delete-file-name2']) !!}
          {!! Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
          {!! Form::button('Deletar Arquivo', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
          {!! Form::close() !!}        
        </div>
      </div>
    </div>
  </div>

  {{-- Delete Folder Modal --}}
  <div class="modal fade" id="modal-folder-delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          {!! Form::button('×',['class' => 'close', 'data-dismiss' => 'modal']) !!}        
          <h4 class="modal-title">Por favor Confirme</h4>
        </div>
        <div class="modal-body">
          <p class="lead">
            <i class="fa fa-question-circle fa-lg"></i>  
            Você tem certeza que deseja deletar a pasta: 
            <kbd><span id="delete-folder-name1">folder</span></kbd>
          </p>
        </div>
        <div class="modal-footer">
          {!! Form::open(['route' => 'admin.upload.folder.destroy']) !!}
          {!! Form::input('hidden', '_method', 'DELETE') !!}
          {!! Form::input('hidden', 'folder', $folder) !!}
          {!! Form::input('hidden', 'del_folder', null,['id' => 'delete-folder-name2']) !!}
          {!! Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
          {!! Form::button('Deletar Folder', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
          {!! Form::close() !!}        
        </div>
      </div>
    </div>
  </div>

  {{-- Upload File Modal --}}
  <div class="modal fade" id="modal-file-upload">
    <div class="modal-dialog">
      <div class="modal-content">      
        {!! Form::open(['route' => 'admin.upload.file']) !!}
        {!! Form::input('hidden', 'folder', $folder) !!}
        <div class="modal-header">
          {!! Form::button('×', ['class' => 'close', 'data-dismiss' => 'modal']) !!}
          <h4 class="modal-title">Upload New File</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            {!! Form::bsLabel('file', 'Arquivo', ['class' => 'col-sm-3']) !!}            
            <div class="col-sm-8">
              {!! Form::file('file') !!}              
            </div>
          </div>
          <div class="form-group">            
            {!! Form::bsLabel('file_name', 'Nome opcional', ['class' => 'col-sm-3']) !!}
            <div class="col-sm-4">
              {!! Form::bsText('file_name') !!}              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          {!! Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
          {!! Form::button('Cancelar', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}          
        </div>
        {!! Form::close() !!}    
      </div>
    </div>
  </div>

  {{-- View Image Modal --}}
  <div class="modal fade" id="modal-image-view">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          {!! Form::button('×', ['class' => 'close', 'data-dismiss' => 'modal']) !!}
          <h4 class="modal-title">Previa</h4>
        </div>
        <div class="modal-body">
          <img id="preview-image" src="x" class="img-responsive">
        </div>
        <div class="modal-footer">
          {!! Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}        
        </div>
      </div>
    </div>
  </div>