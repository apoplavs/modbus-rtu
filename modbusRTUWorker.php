<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use HomeAutomation\Device\WP3066ADAM\WP3066MbpollClient;
use HomeAutomation\Device\WP8026ADAM\WP8026MbpollClient;
use HomeAutomation\Service\Logger;
use PhpMqtt\Client\ConnectionSettings;
use PhpMqtt\Client\MqttClient;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


/**
 * Закінчив на обробці тв відправці у відповідні топіки дані з пристроїв
 * Topic sender в окремих класах для кожного пристрою, де будуть перевірятись зміни з класу, які є - паблішити
 * в кожного пристрою свій топік, наприклад (technical building system tbs) tbs/temperature/buffer-top=56, tbs/temperature/boiler=62, kitchen/motion, kitchen/motion=off, kitchen/door=off pork/motion, pork/door=off, master-bedroom/window=off
 * з 8026 приклад отримання
 * Array
    (
    [0] => [1]: 	0
    [1] => [2]: 	0
    [2] => [3]: 	0
    [3] => [4]: 	0
    [4] => [5]: 	0
    [5] => [6]: 	0
    [6] => [7]: 	0
    [7] => [8]: 	0
    [8] => [9]: 	0
    [9] => [10]: 	0
    [10] => [11]: 	0
    [11] => [12]: 	0
    [12] => [13]: 	0
    [13] => [14]: 	0
    [14] => [15]: 	0
    [15] => [16]: 	0
    )
 *
 *
 *
 * @todo Додати git для контролю версій
 * @todo створити в mqtt свого юзера для цього воркера
 * @todo
 * @todo
 * @todo
 * @todo
 * @todo
 *
 */

exit(0);




$logger = new Logger($_ENV['LOG_FILE']);
$wp3066Client = new WP3066MbpollClient($logger);
$wp8026Client = new WP8026MbpollClient($logger);


$wp3066Client();
while (true) {
    for ($i = 0; $i < 3; $i++) {

        sleep(1);
    }

}

echo "100500";
//print_r($env);

//$getenv();
