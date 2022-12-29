<?php

class Artigo
{

    public function getArtigos(): array
    {
        $artigos = [

            [
                'titulo' => 'Primeiros passos com Spring',
                'conteudo' => 'Na empresa onde trabalho começamos um Coding Dojo, que é
			basicamente uma reunião com programadores e programadoras a fim de
			resolver desafios e aperfeiçoar as habilidades com algoritmos.',
                'link' => 'primeiros-passos-com-spring.html'
            ],
            [
                'titulo' => 'xxxxx',
                'conteudo' => 'yyyy',
                'link' => 'primeiros-passos-com-spring.html'
            ]
        ];
        return $artigos;
    }
}
