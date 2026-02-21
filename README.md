# Tasca S1.04 — POO 1 (Full Stack PHP 2025–2026)

## Descripción
Ejercicios del **Sprint 1: Maquetació i PHP** para practicar **POO en PHP**.

Incluye:
- **Nivell 1 — Exercici 1:** `Employee` (nombre + sueldo) y aviso de impuestos (umbral > 6000).
- **Nivell 1 — Exercici 2:** `Shape` (base) + `Triangle` y `Rectangle` para calcular áreas.
- **Nivell 2 — Exercici 1:** `PokerDice` (tiradas, última figura, 5 dados, contador total de tiradas).

> ver Nota: los ejercicios han sido revisados por dos usuarios y se aplicaron cambios según sus comentarios.

---

## Enunciado (resumen)

### Nivell 1 — Exercici 1 (Employee)
Crear una clase empleado con **nombre** y **sueldo**.  
Método para recibir nombre y sueldo, y otro para imprimir el nombre y si paga impuestos (si el sueldo supera 6000).

### Nivell 1 — Exercici 2 (Shape)
Clase `Shape` con **ancho** y **alto**. Subclases `Triangle` y `Rectangle` que calculen el área con un método.

### Nivell 2 — Exercici 1 (PokerDice)
Clase `PokerDice` con caras: **As, K, Q, J, 7, 8**.  
Método para tirar el dado, otro para obtener la figura de la última tirada.  
Ampliación: tirar **cinco** dados a la vez y un método para ver el **total de tiradas** de todos los dados.

---

## Requisitos
- PHP

---

## Ejecución

1) Clona el repositorio y entra en la carpeta del ejercicio:

bash
git clone https://github.com/aproposito/taskS1.04.git

2) Ejecuta el script:
bash
php index.php de los distintos ejercicios. 

**Nivell 1 — Exercici 1**
php 04_taskS1_04/TaskS1_04_L1_POO_1/index.php

**Nivell 1 — Exercici 2**
php 04_taskS1_04/TaskS1_04_L1_POO_2/public/index.php

**Nivell 2 — Exercici 1**
php 04_taskS1_04/TasksS1_04_L2_POO_3/index.php

⸻

## Estructura (solo S1.04)

04_taskS1_04/
├─ TaskS1_04_L1_POO_1/
│  └─ index.php
├─ TaskS1_04_L1_POO_2/
│  ├─ public/
│  │  └─ index.php
│  └─ src/
│     ├─ Shape.php
│     ├─ Triangle.php
│     └─ Rectangle.php
└─ TasksS1_04_L2_POO_3/
   ├─ index.php
   └─ PokerDice.php


⸻
## Notas

Siguiendo las sugerencias de la revisión de código del usuario https://github.com/HebeStark: 
1. Se crea el el fichero README
2. Se revisa la indentación
3. Se elimina el comentario con el enunciado
4. Se cambia el nombre de la propiedad estática $totalRoll a $totalRolls

Siguiendo las sugerencias de la revisión de código del usuario: https://github.com/fdesouzabcn
1. Se usa la constante __DIR__ para indicar ruta absoluta en el require_once.
2. Se usa el tipado estricto con declare(strict_type=1).
