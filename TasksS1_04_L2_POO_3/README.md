# Tasks S1.04 — Poker Dice (POO) — IT Academy (FullStack PHP)

## Descripción
Ejercicio de Programación Orientada a Objetos (POO) del Bootcamp **IT Academy FullStack PHP**.
Se implementa la clase `PokerDice`, un dado de póker cuyas caras son:
- As, K, Q, J, 7, 8

Requisitos del enunciado:
- Método para **tirar** el dado.
- Método para obtener la **figura de la última tirada**.
- Ampliación para poder tirar **cinco dados** a la vez.
- Método para consultar la **cantidad total de tiradas de TODOS los dados** (contador global).

> Nota: hay una **revisión del código** disponible en la sección **Issues** del repositorio.

## Requisitos

- PHP 

## Instalación y ejecución

1) Clona el repositorio y entra en la carpeta del ejercicio:
bash
git clone https://github.com/aproposito/taskS1.04.git
cd taskS1.04/TasksS1_04_L2_POO_3

2) Ejecuta el script:
bash
php index.php


## Estructura del proyecto

TasksS1_04_L2_POO_3/
├─ index.php          # Script de ejemplo/ejecución
├─ PokerDice.php      # Clase PokerDice

## Notas

Siguiendo las sugerencias de la revisión de código del usuario https://github.com/HebeStark: 
1. Se crea el el fichero README
2. Se revisa la indentación
3. Se elimina el comentario con el enunciado
4. Se cambia el nombre de la propiedad estática $totalRoll a $totalRolls
