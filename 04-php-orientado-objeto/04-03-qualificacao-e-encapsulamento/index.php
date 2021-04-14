<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump($appTemplate, $webTemplate);

use App\Template;
use Web\Template AS WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump($appUseTemplate, $webUseTemplate);
/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//$user->firstName = "Cristovão";
//$user->lastName = "Lira Braga";

//$user->setFirstName('Cristovão');
//$user->setLastName('Lira Braga');

var_dump($user, get_class_methods($user));

echo "O e-mail {$user->getEmail()} não é válido!";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$cristovao = $user->setUser('Cristovão', 'Lira Braga', 'cursos');

if(!$cristovao):
    echo "<p class='trigger error'>{$user->getError()}</p>";
endif;

$carlos = new \Source\Qualifield\User();
$carlos->setUser("Carlos", "Lira Braga", "carlos@gmail.com.br");

$yan = new \Source\Qualifield\User();
$yan->setUser("Yan", "Lima da Costa", "yanlima@gmail.com");

var_dump($user, $carlos, $yan);