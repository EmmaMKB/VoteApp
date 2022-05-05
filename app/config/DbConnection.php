<?php 

    namespace Config;

    use Dotenv;

    require_once(__DIR__.'\..\..\vendor\autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'\..\..');
    $dotenv->load();

    define('DB_HOST',$_ENV['DB_HOST']);
    define('DB_USER',$_ENV['DB_USER']);
    define('DB_PASSWORD',$_ENV['DB_PASSWORD']);
    define('DB_DATABASE',$_ENV['DB_NAME']);

    class DbConnection {

        public $db;

        public function __construct()
        {
            $conn = new \mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

            if (!$conn)
            {
                die ("<h1>Database Connection Failed</h1>". mysqli_connect_error());
            }
            // return $conn;

            $this->db = $conn;
        }

        
    }