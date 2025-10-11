# Projecte CRUD - Gestió d'Usuaris
**ASIXc2AC - Administració de Sistemes Informàtics**

---

## Descripció del projecte

Aplicació web CRUD (Create, Read, Update, Delete) desenvolupada amb **PHP** i **MariaDB** per gestionar una base de dades d'usuaris. El projecte implementa una arquitectura client-servidor amb dos servidors separats.

### Funcionalitats principals:
- **Crear** nous usuaris
- **Llegir** i visualitzar la llista d'usuaris
- **Actualitzar** informació d'usuaris existents
- **Eliminar** usuaris de la base de dades

---

## Arquitectura del sistema

![Clonar repositori](images/23.png)


### Components:
- **Servidor Web (192.168.1.10)**: Apache + PHP
- **Servidor Base de Dades (192.168.1.30)**: MariaDB/MySQL
- **Comunicació**: mysqli (PHP MySQLi extension)

---

## Estructura del projecte

![Clonar repositori](images/24.png)

---

### Descripció dels arxius:

| Arxiu | Funció |
|-------|--------|
| **db.php** | Estableix la connexió amb la base de dades MariaDB |
| **index.php** | Mostra la llista d'usuaris i formulari per afegir-ne |
| **add.php** | Processa el formulari i insereix nous usuaris a la BBDD |
| **edit.php** | Permet modificar les dades d'un usuari existent |
| **delete.php** | Elimina un usuari de la base de dades |
| **style.css** | Estils CSS per millorar la interfície visual |

---

## Bugs identificats i solucionats

| Arxiu | Línia | Error | Solució |
|-------|-------|-------|---------|
| db.php | 2 | Typo: "locahost" | Corregit a "192.168.1.30" |
| db.php | 8 | Falta "}" de tancament | Afegit bracket de tancament |
| script.sql | 1 | "Where false" invàlid | Eliminada clàusula incorrecta |
| index.php | 16 | method="posts" | Corregit a method="post" |
| index.php | 11 | Etiqueta table duplicada | Eliminada duplicació |
| add.php | 6 | VALUES (*, ?) | Corregit a VALUES (?, ?) |
| edit.php | 13 | UPDATE...where | Corregit a UPDATE...SET |
| delete.php | 4 | DELETE * FROM | Corregit a DELETE FROM |

---

## Instal·lació i configuració

### Prerequisits
- Ubuntu Server 20.04 o superior
- Apache 2.4+
- PHP 8.0+ amb extensions: mysqli
- MariaDB/MySQL 10.5+
- Git

---

### Configuració del Servidor Web (192.168.1.10)

#### 1. Instal·lar Apache i PHP

Instal·lació dels paquets necessaris per executar l'aplicació web.

![Instal·lació d'Apache i PHP](images/1.png)

#### 2. Iniciar el servei Apache

Arrencada del servei web Apache.

![Iniciar Apache](images/2.png)

#### 3. Verificar estat d'Apache

Comprovació que el servei Apache està funcionant correctament.

![Estat d'Apache](images/3.png)

#### 4. Clonar el repositori des de GitHub

Descàrrega del codi del projecte des del repositori remot.

![Clonar repositori](images/4.png)

#### 5. Configurar permisos dels arxius

Assignació dels permisos correctes perquè Apache pugui accedir als arxius.

![Configurar permisos](images/5.png)

#### 6. Crear i configurar VirtualHost

Creació del fitxer de configuració del lloc web a Apache.

![Configuració VirtualHost](images/6.png)

#### 7. Activar el lloc web

Habilitació del nou lloc i recàrrega d'Apache per aplicar els canvis.

![Activar lloc web](images/7.png)

#### 8. Crear estructura de carpetes del projecte

Creació de la carpeta app i verificació dels arxius del projecte.

![Estructura del projecte](images/8.png)

#### 9. Crear arxius PHP de l'aplicació

Creació dels diferents arxius PHP necessaris per a l'aplicació CRUD.

![Crear arxius PHP](images/9.png)


#### 10. Crear base de dades a MariaDB

Creació de la base de dades grup8_db al servidor MariaDB.

![Crear base de dades](images/13.png)

#### 11. Verificar bases de dades existents

Comprovació que la base de dades grup8_db s'ha creat correctament.

![Verificar bases de dades](images/14.png)

#### 12. Crear taula users

Creació de la taula users amb els camps id, name i email.

![Crear taula users](images/15.png)

#### 13. Verificar taules creades

Comprovació que la taula users s'ha creat correctament dins de grup8_db.

![Verificar taules](images/16.png)

#### 14. Crear usuari i assignar permisos

Creació de l'usuari 'guim' i assignació de tots els privilegis sobre la base de dades grup8_db.

![Crear usuari i permisos](images/17.png)

#### 15. Configurar bind-address de MariaDB

Modificació del fitxer 50-server.cnf per permetre connexions remotes canviant bind-address a 0.0.0.0.

![Configurar bind-address](images/18.png)

#### 16. Crear usuari root per accés remot

Creació de l'usuari root amb permisos per connectar-se des de la IP 192.168.1.10.

![Crear usuari root remot](images/19.png)

---

## Verificació de la connexió

### Provar connexió a la base de dades

Comprovació de la connexió des del servidor web al servidor de base de dades.

![Connexió exitosa a MariaDB](images/11.png)

---

## Resultat final

### Aplicació web funcionant

Interfície de l'aplicació CRUD en funcionament amb gestió d'usuaris.

![Aplicació funcionant](images/12.png)

*Captura de l'aplicació web mostrant la llista d'usuaris i el formulari per afegir nous usuaris.*

---

## Verificació de la instal·lació

Per comprovar que tot funciona correctament:

1. Accedir a l'aplicació web: **http://192.168.1.10**
2. Provar afegir un usuari nou
3. Verificar que es guarda correctament a la base de dades
4. Provar les funcions d'editar i eliminar

---

## Tecnologies utilitzades

- **Ubuntu Server** 20.04 LTS
- **Apache** 2.4
- **PHP** 8.1
- **MariaDB** 10.5
- **HTML5** i **CSS3**
- **Git** per control de versions

---


## Data

Octubre 2025

---
