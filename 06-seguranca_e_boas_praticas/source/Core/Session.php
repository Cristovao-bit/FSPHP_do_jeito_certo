<?php

namespace Source\Core;

/**
 * Class Session
 * @package Source\Core
 */
class Session {

/**
 * Método responsável por construir a sessão
 * Session constructor
 */    
public function __construct() {
    if(!session_id()):// se não existir um sessão
        session_save_path(CONF_SES_PATH);
        session_start();
    endif;
}

/**
 * @param $name
 * @return null|mixed 
 */
public function __get($name) {
    if(!empty($_SESSION[$name])):
        return $_SESSION[$name];
    endif;
    return null;
}

/**
 * @param $name
 * @return bool
 */
public function __isset($name): bool {
    return $this->has($name);
}

/**
 * Obter nossa sessão
 * @return null/object
 */
public function all(): ?object {
return (object) $_SESSION;
}

/**
 * @param string $key
 * @param mixed $value
 * @return Session
 */
public function set(string $key, $value): Session {
    $_SESSION[$key] = (is_array($value) ? (object) $value : $value);
    return $this;
}

/**
 * Removendo o indice da sessão
 * @param string $key
 * @return Session
 */
public function unset(string $key): Session {
    unset($_SESSION[$key]);
    return $this;
}

/**
 * Verificar a sessão
 * @param string $key
 * @return bool
 */
public function has(string $key): bool {
    return isset($_SESSION[$key]);
}

/**
 * @return Session
 */
public function regenerate(): Session {
session_regenerate_id(true);
return $this;
}

/**
 * Sair da sessão
 * @return Session
 */
public function destroy(): Session {
session_destroy();
return $this;
}

/**
 * @return null|Message
 */
public function flash(): ?Message {
    if($this->has("flash")):
        $flash = $this->flash;
        $this->unset("flash");
        return $flash;
    endif;
    return null;
}

/**
 * CSRF Token
 */
public function csrf(): void {
    $_SESSION['csrf token'] = base64_encode(random_bytes(20));
}
}
