<?php

class Helpers {
    function passwd(string $password): string {
        return password_hash($password, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
    }
    
    function passwd_verify(string $password, string $hash): bool {
        return password_verify($password, $hash);
    }
    
    function passwd_rehash(string $hash): bool {
        return password_needs_rehash($hash, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
    }
    
    function csrf_input(): string {
        session()->csrf();
        return "<input type='text' name='csrf' value='" . (session()->csrf_token ?? "") . "/>";
    }
    
    function csrf_verify($request): bool {
        
    }
}
