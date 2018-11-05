# ReVis
# Repositorio Visual

El repositorio visual (REVIS) es una aplicación web para almacenar diferentes tipos de aplicaciones y archivos creados por un desarrollador. 
El sistema almacena diferentes proyectos y los asocia a un desarrollador previamente registrado, los proyectos se clasifican principalmente en aplicaciones de software, trabajos de diseño gráfico, soundtracks y otros. 
Nuestro objetivo es brindar un espacio para que desarrolladores y creadores independientes puedan poner a venta sus creaciones para que las adquieran empresas, diseñadores web, productores musicales, agencias creativas y personas interesadas.

## Instrucciones 

1. Instalar wampserver
	verificar servicios

2. Instalar composer

3. En la ubicacion del proyecto cmd:
	```composer require --dev phpunit/phpunit ^5
	verificar instalacion en vendor\bin 

4. Agregar a composer.json:
	```"phpunit/phpunit-skeleton-generator": "*"
	cmd projecto:
		composer update
	o-> 	composer global require "phpunit/phpunit-skeleton-generator=*"

5. Propiedades del projecto->testing->phpunit->addfolder->tests

6. Crear test.
