<?php

class ArtigoDAO
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function getArtigos(): array
    {
        $resultado = $this->mysql->query('SELECT * FROM artigos');

        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }

    public function findById($id): array
    {
        $query = $this->mysql->prepare("SELECT id,titulo,conteudo FROM artigos WHERE id = ?");
        $query->bind_param('s', $id);
        $query->execute();
        $artigo = $query->get_result()->fetch_assoc();
        return $artigo;
    }

    private function realizaQuery($query)
    {
        $resultado = $this->mysql->query($query);
        return $resultado;
    }
}
