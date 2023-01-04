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


    public function insere(string $titulo, string $conteudo)
    {
        $queryInsere = $this->mysql->prepare("INSERT INTO artigos (titulo,conteudo) VALUES (?,?);");
        $queryInsere->bind_param('ss', $titulo, $conteudo);
        $queryInsere->execute();
    }


    public function alterar($titulo, $conteudo, $id)
    {
        $query = $this->mysql->prepare("UPDATE artigos SET titulo = ?,
        conteudo = ? WHERE id = ?");
        $query->bind_param("sss", $titulo, $conteudo, $id);
        $query->execute();
    }
    public function excluir($id)
    {
        $queryInsere = $this->mysql->prepare("DELETE from artigos WHERE id = ?");
        $queryInsere->bind_param('s', $id);
        $queryInsere->execute();
    }
}
