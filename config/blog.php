<?php
return [
	'name' => "localblog",
	'title' => 'localblog',
	'subtitle' => 'Não há lugar como',
  	'description' => 'Este eh o blog de Raphael',
  	'author' => 'Raphael Ferreira',
  	'page_image' => 'home.png',
  	'posts_per_page' => 10,
	'uploads' => [
    	'storage' => 's3',
    	'webpath' => 'http://localblog.s3-sa-east-1.amazonaws.com',
  ],
];