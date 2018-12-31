# Blade Component

## Introducción

Elementos html reutilizables para las plantillas blade, esto realmente es una ayuda a estar menos preocupado por el front-end de tu aplicacion.

```php
@input([
	'label' => 'Nombre'
])

// output:  <input type="text" placeholder="Nombre" class="form-control" id="nombre" name="nombre" value="" autofocus>
```

## Instalación

### Instalación Blade Component

Instalar Blade-Component con [composer](https://getcomposer.org/doc/00-intro.md):

```
$ composer require thepany/blade-components
```

> En Laravel 5.5, [Los proveedores de servicios y los alias se registran automáticamente.](https://laravel.com/docs/5.5/packages#package-discovery) 

Una vez que finalize la instalacion via composer, haz los siguientes cambios:

1) Publicar los assets necesarios para el correcto funcionamiento de algunas librerias, ejecute el siguiente comando:

    ```php
   	php artisan vendor:publish --tag="blade-component-asset"
    ```
2) Registrar las siguientes directivas:

	```html
	<head>
		<!-- Scripts -->
		@scripts()
		
		<!-- Links -->
		@stack('links')
	</head>
	```
	> La directiva `@scripts()` incluye por defecto `@stack('scripts')` por lo que no es necesario que se registre.

3) Para publicar los componentes dentro del directorio de vistas de su aplicación, ejecute el siguiente comando:

	```php
	php artisan vendor:publish --tag="blade-component-view"
	```
	> Al publicar los componentes, puedes modificarlos a tu gusto, Incluso puedes registrar tus propios componentes dentro de las directorios generados. Pero debes tener en cuenta que si eliminas todos los componentes deberas eliminar el cache de las vistar para volver a utilizar los componentes por defecto

## Algunos Componentes

```php
@input([
	'label' => 'Nombre',
	'name' => 'name',
	'value' => $user->name,
	'placeholder' => 'Nombre del usuario',
	'required' => true
])

@textarea([
	'label' => 'Nombre',
	'name' => 'name',
	'value' => $user->name,
	'placeholder' => 'Nombre del usuario',
	'required' => true
])

@checkbox([
	'label' => 'Checkbox'
])

@radio([
	'label' => 'Radio',
	'value' => 'true'
])

@icon('ICON-CLASS');

@submit(['label' => 'Botón Submit'])

@alert()

@card
	@slot('header', 'header')
    	// Contenido                  
	@slot('footer', 'footer')
@endcard

@select
	@slot('label', 'Select Simple')
	<option value="1">Opcion 1</option>
	<option value="2">Opcion 2</option>
	<option value="3">Opcion 3</option>
	<option value="4">Opcion 4</option>
@endselect

@selectmultiple
	@slot('label', 'Select multiple')
	<option selected>Open this select menu</option>
	<option value="1">One</option>
	<option value="2">Two</option>
	<option value="3">Three</option>
@endselectmultiple

@flatpickr([
	'label' => 'Date Picker',
	'dateFormat' => 'd-m-Y',
])
```