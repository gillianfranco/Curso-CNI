<?php
    namespace App\Email;

    class Envio{
        public function enviar():void
        {
            $this->nome = "Brenno";
            $this->email = "brenno@hotmail.com";
            $this->senha = "Senha123456";

            $adaptador1 = new Adaptadores\Mailgun\Adaptador;

            $adaptador2 = clone $adaptador1;
            $adaptador2->nome = "Pedro";
            $adaptador2->email = "pedro@hotmail.com";
            $adaptador2->senha = "Pedro123";

            $adaptador3 = clone $adaptador1;
            $adaptador3->nome = "João";
            $adaptador3->email = "joao@hotmail.com";
            $adaptador3->senha = "Senha";

            $adaptador4 = clone $adaptador1;
            $adaptador4->nome = "Maria";
            $adaptador4->email = "maria@hotmail.com";
            $adaptador4->senha = "Maria123";

            var_dump($adaptador1);
            var_dump($adaptador2);
            var_dump($adaptador3);
            var_dump($adaptador4);
        }
    }