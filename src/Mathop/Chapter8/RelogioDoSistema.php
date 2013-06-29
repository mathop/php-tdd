<?php

    namespace Mathop\Chapter8;

    class RelogioDoSistema implements Relogio
    {
        public function hoje()
        {
            return new \DateTime();
        }
    }
