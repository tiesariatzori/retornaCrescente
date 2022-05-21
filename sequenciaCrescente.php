<?php
  public function sequenciaCrescente($array)
    {

        $arrayCrecente = $array;
        sort($arrayCrecente, SORT_NUMERIC);
        $arrayCrecente = array_unique($arrayCrecente);
        $arrmerge      = [];
        $arrayCrecente = array_merge($arrayCrecente, $arrmerge);
        $posiçoes      = count($arrayCrecente);

        for ($i = 0; $i <= $posiçoes; $i++) {

            $arrayRemovido = $array;
            unset($arrayRemovido[$i]);
            $arraymesc     = [];
            $arrayRemovido = array_merge($arrayRemovido, $arraymesc);
            $contador      = 0;
            $countRemovido = count($arrayRemovido);
            $diff          = ($countRemovido - $posiçoes);

            for ($j = 0; $j < ($posiçoes + $diff); $j++) {

                if (isset($arrayCrecente[$j])) {

                    if ($arrayCrecente[$j] != $arrayRemovido[$j]) {
                        $contador++;
                    }
                } else {

                    $contador++;
                }
            }
            if ($contador == 0) {

                return true;
            }
        }

        return false;
    }
?>