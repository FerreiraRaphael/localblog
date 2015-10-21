<?php
return [
	'name' => "localblog",
	'title' => 'localblog',
	'subtitle' => 'Não há lugar como',
  	'description' => 'Esse carinha é o localblog',
  	'author' => 'Raphael Ferreira',
  	'page_image' => 'home.png',
    'page_sobre' => 'sobre.jpg',
  	'posts_per_page' => 10,
	'uploads' => [
    	'storage' => 's3',
    	'webpath' => 'http://localblog.s3-sa-east-1.amazonaws.com',
  ],
];