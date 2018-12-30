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

1) Publicar los assets necesarios para el correcto funcionamiento de algunas librerias, ejecute el siguiente comando:

    ```php
   	php artisan vendor:publish --tag="blade-component-asset"
    ```

2) Para publicar los componentes dentro del directorio de vistas de su aplicación, ejecute el siguiente comando:

	```php
	php artisan vendor:publish --tag="blade-component-view"
	```


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

```