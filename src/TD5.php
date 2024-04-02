<?php

namespace UPJV;

class TD5
{
    public function demain()
    {
        $demain = new \DateTime();
        $demain->add(new \DateInterval('P1D'));
        $reponse = ['demain' => $demain->format("d-m-y")];
        return json_encode($reponse);
    }
}
