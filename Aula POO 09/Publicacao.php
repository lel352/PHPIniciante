<?php

/**
 * undocumented class
 *
 * @package default
 * @author `g:snips_author`
 */
interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhear($pagina);
    public function avancarPagina();
    public function voltarPagina();
}

?>