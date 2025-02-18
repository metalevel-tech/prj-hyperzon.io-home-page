<?php
/**
 * Connect and query the database, used in controllers/Posts.php
 *
 * See also: https://www.php.net/manual/en/class.pdo.php#89019
 * --> class Database extends POD { ... }
 */

class Database
{
    public static $dataBaseAuth = [
        "name" => "sample_db",
        "user" => "sample_db_admin",
        "pswd" => "use-strong-password",
        "driver" => "mysql",
        "host" => "localhost",
        "char-set" => "utf8"
    ];

    private static function connect()
    {
        $settings = self::$dataBaseAuth["driver"] .":";
        $settings .= "host=". self::$dataBaseAuth["host"] .";";
        $settings .= "dbname=". self::$dataBaseAuth["name"] .";";
        $settings .= "charset=". self::$dataBaseAuth["char-set"];

        $pdo = new PDO($settings, self::$dataBaseAuth["user"], self::$dataBaseAuth["pswd"]);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = [])
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }
}
