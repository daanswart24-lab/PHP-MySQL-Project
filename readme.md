# PHP en MySQL Project - Larry Ullman (4th Edition)

Dit is mijn persoonlijke leeromgeving voor het boek **PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (Fourth Edition)** door Larry Ullman. Hierin documenteer ik mijn voortgang, oefeningen en de uiteindelijke webapplicaties.

---

## 📂 Projectstructuur
De mappen zijn georganiseerd per hoofdstuk om de leercurve van het boek te volgen:

* **`01-05_Basics/`**: Variabelen, formulieren en de eerste PHP-logica.
* **`06-10_Database_Design/`**: SQL-scripts, database-normalisatie en JOIN-queries.
* **`11-15_Security_and_Auth/`**: Inlogsystemen, sessiebeheer en beveiligingstechnieken.
* **`site/`**: De complete webapplicatie die gedurende het boek wordt opgebouwd.
* **`uploads/`**: Map voor oefeningen met bestandsuploads (zorg dat deze schrijfbaar is).

## 🛠️ Benodigdheden
Om dit project lokaal te draaien heb je een WAMP/MAMP/XAMPP stack nodig:
* **PHP:** v8.0 of hoger aanbevolen.
* **MySQL:** v5.7 of hoger.
* **Webserver:** Apache.

## 🚀 Installatie & Gebruik
1.  **Clone de repo:**
    ```
    git clone https://github.com/daanswart24-lab/PHP-MySQL-Project.git
    ```
    
2.  **Database setup:**
    * Open phpMyAdmin.
    * Maak een nieuwe database aan (bijv. `sitename`).
    * Importeer de SQL-bestanden uit de map `sql/`.
3.  **Configuratie:**
    * Pas de database-instellingen aan in `pdo_connect.php` (host, user, password, db).
4.  **Browser:**
    * Open `http://localhost/php-mysql-project/` in je browser.

## 📝 Geleerde Lessen