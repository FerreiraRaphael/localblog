{!!	
	Form::macro('bsButton', function($value, $options = array(), $icon = ''){
		if($icon){
			$icon = Form::fa($icon);
			$value = $icon.' '.$value;
		}
		$options = bootstrap('btn', $options, 'btn-primary btn-lg');
		return Form::button($value, $options);
	});

	Form::macro('bsLabel', function($name, $value = null, $options = array()){
		$options = bootstrap('control-label' , $options, 'col-md-2');
		return Form::label($name,$value,$options);
	});

	Form::macro('bsText', function($name, $value = null, $options = array()){
		$options = bootstrap('form-control' , $options);
		return Form::text($name,$value,$options);
	});

	Form::macro('bsTextArea', function($name, $value = null, $options = array()){
		$options = bootstrap('form-control' , $options);
		return Form::textarea($name,$value,$options);
	});

	Form::macro('fa', function($icon){
		return '<i class="fa '.$icon.'"></i>';
	});

	function bootstrap($class, $options, $default = ''){
		if ( ! array_key_exists('class', $options)){
			$options['class'] = $default;
		}

		$classes = explode(' ' , $options['class']);
		if (array_search($class, $classes) === false ){
			$options['class'] .= ' '.$class;
		}

		return $options;
	}
	!!}
	