<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use PDOException;
class DatabaseCreate extends Command
{
     /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'db:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a new database';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'db:create';

    /**
     * Execute the console command.
     */
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function handle()
    {
        
        $database = env('DB_DATABASE', false);
        
        $user= env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        
        $port = env('DB_PORT');
        $host = env('DB_HOST');
        
        $charset = env('DB_CHARSET') ? env('DB_CHARSET') : 'utf8';
        $collation = env('DB_COLLATION') ?  env('DB_COLLATION') : 'utf8_general_ci';
        
//         dd($charset, $collation);
        if (!$database) {
            $this->info('Skipping creation of database as env(DB_DATABASE) is empty');
            return;
        }

        try {
            $pdo = $this->getPDOConnection($host, $port, $user, $pass);
            //CREATE DATABASE IF NOT EXISTS `db_bellas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
           
            $pdo->exec(sprintf(
                'CREATE DATABASE IF NOT EXISTS %s CHARACTER SET %s COLLATE %s;',
                $database,
                $charset,
                $collation
            ));

            $this->info(sprintf('Successfully created %s database', $database));
            
            return 0;
        } catch (PDOException $exception) {
            $this->error(sprintf('Failed to create %s database, %s', $database, $exception->getMessage()));
            
            return 1;
        }
    }

    /**
     * @param  string $host
     * @param  integer $port
     * @param  string $username
     * @param  string $password
     * @return PDO
     */
    private function getPDOConnection($host, $port, $username, $password)
    {
        return new PDO(sprintf('mysql:host=%s;port=%d;', $host, $port), $username, $password);
    }
}
