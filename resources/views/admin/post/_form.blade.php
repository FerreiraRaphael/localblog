
<div class="row">
  <div class="col-md-8">
    <div class="form-group">
      {!! Form::bsLabel('title', 'Titulo') !!}
      <div class="col-md-10">
        {!! Form::bsText('title',$title,['autofocus']) !!}
      </div>
    </div>
    <div class="form-group">
      {!! Form::bsLabel('subtitle', 'Subtitulo') !!}
      {{-- <label for="subtitle" class="col-md-2 control-label">
        Subtitle
      </label> --}}
      <div class="col-md-10">
          {!! Form::bsText('subtitle', $subtitle) !!}
        {{-- <input type="text" class="form-control" name="subtitle"
        id="subtitle" value="{{ $subtitle }}"> --}}
      </div>
    </div>
    <div class="form-group">
      {{-- <label for="page_image" class="col-md-2 control-label">
        Page Image
      </label> --}}
      {!! Form::bsLabel('page_image', 'Img da Pagina') !!}
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-8">
            {{-- <input type="text" class="form-control" name="page_image"
            id="page_image" onchange="handle_image_change()"
            alt="Image thumbnail" value="{{ $page_image }}"> --}}
            {!! Form::bsText('page_image', $page_image, ['alt' => 'Image thumbnail', 'onchange' => 'handle_image_change()']) !!}
          </div>
          <script>
            function handle_image_change() {
              $("#page-image-preview").attr("src", function () {
                var value = $("#page_image").val();
                if ( ! value) {
                  value = {!! json_encode(config('blog.page_image')) !!};
                  if (value == null) {
                    value = '';
                  }
                }
                if (value.substr(0, 4) != 'http' &&
                  value.substr(0, 1) != '/') {
                  value = {!! json_encode(config('blog.uploads.webpath')) !!}
                + '/' + value;
              }
              return value;
            });
            }
          </script>
          <div class="visible-sm space-10"></div>
          <div class="col-md-4 text-right">          
            <img src="{{ page_image($page_image) }}" class="img img_responsive"
            id="page-image-preview" style="max-height:40px">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      {{-- <label for="content" class="col-md-2 control-label">
        Content
      </label> --}}
      {!! Form::bsLabel('content', 'Corpo') !!}
      <div class="col-md-10">
        {{-- <textarea class="form-control" name="content" rows="14"
        id="content">{{ $content }}</textarea> --}}
        {!! Form::bsTextArea('content', $content, ['rows' => '14']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{-- <label for="publish_date" class="col-md-3 control-label">
        Pub Date
      </label> --}}
      {!! Form::bsLabel('publish_date', 'Data Pub', ['class' => 'col-md-3']) !!}
      <div class="col-md-8">
        {{-- <input class="form-control" name="publish_date" id="publish_date"
        type="text" value="{{ $publish_date }}"> --}}
        {!! Form::bsText('publish_date', $publish_date) !!}
      </div>
    </div>
    <div class="form-group">
      <label for="publish_time" class="col-md-3 control-label">
        Pub Time
      </label>
      <div class="col-md-8">
        <input class="form-control" name="publish_time" id="publish_time"
        type="text" value="{{ $publish_time }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-8 col-md-offset-3">
        <div class="checkbox">
          <label>
            <input {{ checked($is_draft) }} type="checkbox" name="is_draft">
            Draft?
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="tags" class="col-md-3 control-label">
        Tags
      </label>
      <div class="col-md-8">
        <select name="tags[]" id="tags" class="form-control" multiple>
          @foreach ($allTags as $tag)
          <option @if (in_array($tag, $tags)) selected @endif
          value="{{ $tag }}">
          {{ $tag }}
        </option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    {{-- <label for="layout" class="col-md-3 control-label">
      Layout
    </label> --}}
    {!! Form::bsLabel('layout','Layout',['class' => 'col-md-3']) !!}
    <div class="col-md-8">
      {!! Form::bsText('layout', $layout) !!}
      {{-- <input type="text" class="form-control" name="layout"
      id="layout" value="{{ $layout }}"> --}}
    </div>
  </div>
  <div class="form-group">
    {{-- <label for="meta_description" class="col-md-3 control-label">
      Meta
    </label> --}}
    {!! Form::bsLabel('meta_description', 'Descrição') !!}
    <div class="col-md-8">

      {{-- <textarea class="form-control" name="meta_description"
      id="meta_description"
      rows="6">{{ $meta_description }}</textarea> --}}
      {!! Form::bsTextArea('meta_description', $meta_description, ['row' => '6']) !!}
    </div>
  </div>
</div>

  <div class="col-md-8">
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        @foreach($buttons as $button)
        {!! Form::bsButton($button['value'],$button['options'],$button['icon']) !!}
        @endforeach
      </div>
    </div>
  </div>

