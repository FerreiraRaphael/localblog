<div class="form-group">
  {!! Form::bsLabel('title', 'Titulo2',['class' => 'col-md-3']) !!}
  <div class="col-md-8">
    {!! Form::bsText('title', $title) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::bsLabel('subtitle', 'Subtitulo',['class' => 'col-md-3']) !!}
  <div class="col-md-8">
   {!! Form::bsText('subtitle', $subtitle) !!}
 </div>
</div>

<div class="form-group">
  {!! Form::bsLabel('meta_description', 'Descrição',['class' => 'col-md-3']) !!}
  <div class="col-md-8">
    {!! Form::bsTextArea('meta_description', $meta_description, ['rows' => '3']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::bsLabel('page_image', 'Imagem da Pagina',['class' => 'col-md-3']) !!}
  <div class="col-md-8">
    {!! Form::bsText('page_image', $page_image) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::bsLabel('layout', 'Layout',['class' => 'col-md-3']) !!}
  <div class="col-md-4">    
    {!! Form::bsText('layout', $layout) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::bsLabel('reverse_direction', 'Direção',['class' => 'col-md-3']) !!}
  <div class="col-md-7">
    <label class="radio-inline">
      <input type="radio" name="reverse_direction"
      id="reverse_direction"
      @if (! $reverse_direction)
      checked="checked"
      @endif
      value="0"> Normal
    </label>
    <label class="radio-inline">
      <input type="radio" name="reverse_direction"
      @if ($reverse_direction)
      checked="checked"
      @endif
      value="1"> Reversa
    </label>
  </div>
</div>
<div class="col-md-7 col-md-offset-3">
@foreach($buttons as $button)
{!! Form::bsButton($button['value'],$button['options'],$button['icon']) !!}
@endforeach
</div>