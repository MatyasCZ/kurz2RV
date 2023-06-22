<?php
class Crypt
{
    public function hash(string $str): string
    {
        return hash('sha256', $str);
    }
}

?>