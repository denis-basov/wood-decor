<?php

return [

	'about' => 'about/index', // AboutController & actionIndex - страница "О нас"

	'blog' => 'blog/index', // BlogController & actionIndex - главная страница блога

	'contacts' => 'contacts/index', // ContactsController & actionIndex - страница контактов

	'catalog/([0-9]+)' => 'catalog/view/$1', // CatalogController & actionView - просмотр товара детально
	'catalog' => 'catalog/index', // CatalogController & actionIndex - главная страница каталога

	'' => 'mainPage/index', // MainPageController & actionIndex - главная страница
];