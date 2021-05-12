<?php

class ParcAuto
{
    public static function getTipAlimentare()
    {
        $ret = array();
        $query = "select *from 
                    tip_alimentare
                    where sters = 0
                    ORDER BY tip ASC";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getMasini($opt = array())
    {
        $stare_id = isset($opt['stare_id']) ? $opt['stare_id'] : 0;

        $ret = array();
        $query = "SELECT a.*, b.nume as stare_masina from 
        masini as a
        left join masini_stari as b on a.stare_id = b.id
        where a.sters = 0
        ORDER BY a.numar
        ";

        if ($stare_id > 0) {
            $query .= "and stare_id= '" . $stare_id . "'";
        }
        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['asignari_masina'] = Trasee::getTraseeByMasinaId($item['id']);
                $item['depozit_by_masina'] = Depozite::getDepozitByMasinaId($item['id']);
                $item['sofer_by_masina'] = self::getSoferByMasinaId($item['id']);
                $item['traseu_by_masina'] = Asignari::getAsignareTraseuIdByMasinaId($item['id']);
                array_push($ret, $item);
            }
        }
        return $ret;
    }

    public static function getListaMasini($opt = array())
    {
        $stare_id = isset($opt['stare_id']) ? $opt['stare_id'] : 0;

        $ret = array();
        $query = "SELECT a.id, a.numar, a.model from 
                  masini as a
                  LEFT JOIN masini_stari as b on a.stare_id = b.id
                  WHERE a.sters = 0				
                  ORDER BY a.numar
                    ";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getSoferByMasinaId($masina_id)
    {
        $ret = array();
        $query = "select a.*, b.nume, d.numar from 
                    asignari_soferi_trasee as a
                    LEFT JOIN soferi as b on a.sofer_id = b.id
                    left join asignari_masini_trasee as c on a.traseu_id = c.traseu_id
                    left join masini as d on c.masina_id = d.id
                    where c.masina_id = '" . $masina_id . "'
                    and c.sters = 0
                    GROUP BY b.nume";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

//Lista de soferi si cu asignari
    public static function getSoferi()
    {
        $ret = array();
        $query = "SELECT * FROM soferi where sters = 0 ORDER BY nume ASC";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['asignari_trasee'] = Asignari::getAsignareTraseuBySoferId($item['id']);
                array_push($ret, $item);
            }
        }

        return $ret;
    }


    public static function getListaSoferi()
    {
        $ret = array();
        $query = "SELECT * FROM soferi 
                  WHERE sters = 0 
                  ORDER BY nume ASC";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getMasinaById($id = 0)
    {
        $ret = array();
        $query = "SELECT * FROM masini WHERE id = '" . $id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

//    Scoate starea masinii activa/desfiintata
    public static function getStariMasini()
    {
        $ret = array();
        $query = "SELECT * FROM masini_stari";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getStareByMasinaId($masina_id)
    {
        $ret = array();
        $query = "select stare_id from masini where id = '" . $masina_id . "' LIMIT 1";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getSoferById($id = 0)
    {
        $ret = array();
        $query = "SELECT * FROM soferi WHERE id = '" . $id . "' and sters = 0 LIMIT 1 ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getSoferByFisaGenerataId($id)
    {
        $ret = array();
        $id_fisa = "SELECT a . sofer_id , b . nume as nume_sofer
                      from fise_generate as a
                      left join soferi as b on a . sofer_id = b . id
                      where a . id = '" . $id . "'
                      ORDER BY a . id
                      desc LIMIT 1";

        $result = myQuery($id_fisa);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getMasinaByFisaGenerataId($id)
    {
        $ret = array();
        $id_fisa = "SELECT a . masina_id,b . numar as numar_masina 
                    from fise_generate as a
                    left join masini as b on a . masina_id = b . id
                      where a . id = '" . $id . "' 
                      ORDER BY a . id desc LIMIT 1";

        $result = myQuery($id_fisa);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getTotalCantitatiBySoferIdAndTraseuId($sofer_id, $traseu_id, $masina_id, $opts = array())
    {
        $ret = null;
        $tip_produs_id = isset($opts['tip_produs_id']) ? $opts['tip_produs_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.sofer_id = '" . $sofer_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND b.masina_id = '" . $masina_id . "'                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        if ($tip_produs_id > 0) {
            $target_by_client_id .= ' AND a.tip_produs_id = ' . $tip_produs_id . ' ';
        }

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }


    public static function getTotalCantitatiByMasinaIdAndTraseuIdAndSoferId($masina_id = 0, $traseu_id, $sofer_id, $opts = array())
    {
        $ret = null;
        $tip_produs_id = isset($opts['tip_produs_id']) ? $opts['tip_produs_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.masina_id = '" . $masina_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND b.sofer_id = '" . $sofer_id . "'                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        if ($tip_produs_id > 0) {
            $target_by_client_id .= ' AND a.tip_produs_id = ' . $tip_produs_id . ' ';
        }

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalCantitatiExtraByMasinaIdAndTraseuIdAndSoferId($masina_id = 0, $traseu_id, $sofer_id, $opts = array())
    {
        $ret = null;
        $tip_produs_id = isset($opts['tip_produs_id']) ? $opts['tip_produs_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare
                                FROM detalii_fisa_extra_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.masina_id = '" . $masina_id . "'                                
                                AND b.traseu_id = '" . $traseu_id . "'                                
                                AND b.sofer_id = '" . $sofer_id . "'                                
                                AND b.data_intrare >= '" . $data_start . "'
                                AND b.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0
                                AND b.sters = 0
                                AND a.stare_produs = 1
                                ";

        if ($tip_produs_id > 0) {
            $target_by_client_id .= ' AND a.tip_produs_id = ' . $tip_produs_id . ' ';
        }

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalKmBySoferIdAndTraseuIdAndMasinaId($sofer_id = 0, $traseu_id, $masina_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $km_traseu = "SELECT SUM(a.km_parcursi) as km_traseu
                                FROM miscari_fise as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.sofer_id = '" . $sofer_id . "'
                                AND b.traseu_id = '" . $traseu_id . "'
                                AND b.masina_id = '" . $masina_id . "'
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND b.sters = 0
                                ";


        $result = myQuery($km_traseu);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalKmByMasinaIdAndTraseuIdAndSoferId($masina_id = 0, $traseu_id, $sofer_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $km_traseu = "SELECT SUM(a.km_parcursi) as km_traseu
                                FROM miscari_fise as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.masina_id = '" . $masina_id . "'
                                AND b.traseu_id = '" . $traseu_id . "'
                                AND b.sofer_id = '" . $sofer_id . "'
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND b.sters = 0
                                ";


        $result = myQuery($km_traseu);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalKmByTraseuId($opts = array())
    {
        $ret = null;
        $traseu_id = isset($opts['traseu_id']) ? $opts['traseu_id'] : 0;
        $masina_id = isset($opts['masina_id']) ? $opts['masina_id'] : 0;
        $sofer_id = isset($opts['sofer_id']) ? $opts['sofer_id'] : 0;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT SUM(a.km_parcursi) as km_traseu
                                FROM miscari_fise as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                ";

        if ($traseu_id > 0) {
            $query .= " and traseu_id = " . $traseu_id;
        }

        if ($sofer_id > 0) {
            $query .= " and sofer_id = " . $sofer_id;
        }

        if ($masina_id > 0) {
            $query .= " and masina_id = " . $masina_id;
        }

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalCantitatiBySoferIdProdusId($sofer_id = 0, $tip_produs_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.sofer_id = '" . $sofer_id . "'                                
                                AND a.tip_produs_id = '" . $tip_produs_id . "'                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalCantitatiByMasinaIdProdusId($masina_id = 0, $tip_produs_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.masina_id = '" . $masina_id . "'                                
                                AND a.tip_produs_id = '" . $tip_produs_id . "'                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getTotalCantitatiByTraseuIdAndProdusId($traseu_id = 0, $tip_produs_id, $opts = array())
    {
        $ret = null;
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $target_by_client_id = "SELECT SUM(a.cantitate) as cantitate, SUM(a.cantitate * a.pret) as valoare,  SUM(a.comision) as comision
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
                                WHERE b.traseu_id = '" . $traseu_id . "'                                
                                AND a.tip_produs_id = '" . $tip_produs_id . "'                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.sters = 0";

        $result = myQuery($target_by_client_id);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;

    }


    public static function getTotalCantitatiBG11CuComisionByClientId($sofer_id, $traseu_id, $opts = array())
    {
        $ret = array();
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT SUM(a.cantitate * c.comision) as total_cant_comision
                                FROM detalii_fisa_intoarcere_produse  as a
                                LEFT JOIN fise_generate as b on a.fisa_id = b.id
								LEFT JOIN clienti_target as c on a.client_id = c.client_id                                
                                WHERE b.sofer_id = '" . $sofer_id . "'                          
                                AND b.traseu_id = '" . $traseu_id . "'                              
                                AND a.tip_produs_id = 1                                
                                AND a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'     
                                AND a.sters = 0
								GROUP BY a.client_id ";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getRaportLivrariSoferi($sofer_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $ret = array(
            'trasee' => array()
        );

        $query = "SELECT a.id, a.depozit_id, a.traseu_id, a.masina_id, a.sofer_id, b.nume as nume_sofer, c.nume as nume_traseu, d.numar 
                  FROM fise_generate as a
                  LEFT JOIN soferi as b on a.sofer_id = b.id
                  LEFT JOIN trasee as c on a.traseu_id = c.id
                  LEFT JOIN masini as d on a.masina_id = d.id
                  WHERE a.sofer_id = '" . $sofer_id . "'
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  GROUP BY a.traseu_id, a.masina_id
                  ORDER BY c.nume ASC             
                    ";

        $result = myQuery($query);
        $ret['produse_sofer'] = Produse::getProduseVanduteBySoferId($sofer_id, array(
            'data_start' => $data_start,
            'data_stop' => $data_stop
        ));

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'nume_sofer' => $item['nume_sofer'],
                    'nume_traseu' => $item['nume_traseu'],
                    'numar' => $item['numar'],
                    'total_produse' => array(),
                    'km' => self::getTotalKmBySoferIdAndTraseuIdAndMasinaId($item['sofer_id'], $item['traseu_id'], $item['masina_id'], array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ))
                );
                foreach ($ret['produse_sofer'] as $tip_produs_id => $item_tip_produs) {
                    $r['total_produse'][$tip_produs_id] = self::getTotalCantitatiBySoferIdAndTraseuId($item['sofer_id'], $item['traseu_id'], $item['masina_id'], array(
                        'tip_produs_id' => $tip_produs_id,
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));

                    $ret['grand'][$tip_produs_id] = self::getTotalCantitatiBySoferIdProdusId($item['sofer_id'], $tip_produs_id, array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));
                }
                array_push($ret['trasee'], $r);
            }
        }
        return $ret;
    }

    public static function getCantitatiByTraseuAndSoferAndMasina($traseu_id, $sofer_id, $masina_id, $opts = array())
    {
        $ret = array();
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $query = "SELECT  b.fisa_id, b.data_intrare as data
                                FROM fise_generate AS a
                                LEFT JOIN detalii_fisa_intoarcere_produse as b on a.id = b.fisa_id
                                WHERE a.data_intrare >= '" . $data_start . "'
                                AND a.data_intrare <= '" . $data_stop . "'
                                AND a.traseu_id = '" . $traseu_id . "'
                                AND a.sofer_id = '" . $sofer_id . "'
                                AND a.masina_id = '" . $masina_id . "'
                                AND a.sters = 0
                                AND b.sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }


    public static function getRaportLivrariMasini($masina_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $ret = array(
            'trasee' => array()
        );

        $query = "SELECT a.id, a.masina_id, a.sofer_id, b.nume as nume_sofer,
                  c.nume as nume_traseu, d.numar, d.model, a.traseu_id 
                  FROM fise_generate as a
                  LEFT JOIN soferi as b on a.sofer_id = b.id
                  LEFT JOIN trasee as c on a.traseu_id = c.id
                  LEFT JOIN masini as d on a.masina_id = d.id
                  WHERE a.masina_id = '" . $masina_id . "'
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  GROUP BY a.traseu_id, a.sofer_id
                  ORDER BY c.nume ASC             
                    ";

        $result = myQuery($query);
        $ret['produse_masina'] = Produse::getProduseVanduteByMasinaId($masina_id, array(
            'data_start' => $data_start,
            'data_stop' => $data_stop
        ));

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'numar' => $item['numar'],
                    'model' => $item['model'],
                    'nume_sofer' => $item['nume_sofer'],
                    'nume_traseu' => $item['nume_traseu'],
                    'total_produse' => array(),

                    'km' => self::getTotalKmByMasinaIdAndTraseuIdAndSoferId($item['masina_id'], $item['traseu_id'], $item['sofer_id'], array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    )),

                    'fise_by_masina' => Fise::getFiseLivrariMasini(array(
                        'masina_id' => $item['masina_id'],
                        'traseu_id' => $item['traseu_id'],
                        'sofer_id' => $item['sofer_id'],
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ))
                );
                foreach ($ret['produse_masina'] as $tip_produs_id => $item_tip_produs) {
                    $r['total_produse'][$tip_produs_id] = self::getTotalCantitatiByMasinaIdAndTraseuIdAndSoferId($item['masina_id'], $item['traseu_id'], $item['sofer_id'], array(
                        'tip_produs_id' => $tip_produs_id,
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));

                    $ret['grand'][$tip_produs_id] = self::getTotalCantitatiByMasinaIdProdusId($item['masina_id'], $tip_produs_id, array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));
                }
                array_push($ret['trasee'], $r);
            }
        }
        return $ret;
    }

    public static function getRaportLivrariTrasee($traseu_id, $opts = array())
    {
        $data_start = isset($opts['data_start']) ? $opts['data_start'] : 0;
        $data_stop = isset($opts['data_stop']) ? $opts['data_stop'] : 0;

        if ($data_start == 0) {
            $data_start = date('Y-m-01');
        }

        if ($data_stop == 0) {
            $data_stop = date('Y-m-t');
        }

        $ret = array(
            'trasee' => array()
        );

        $query = "SELECT a.id, a.masina_id, a.sofer_id, b.nume as nume_sofer,
                  c.nume as nume_traseu, d.numar, d.model, a.traseu_id 
                  FROM fise_generate as a
                  LEFT JOIN soferi as b on a.sofer_id = b.id
                  LEFT JOIN trasee as c on a.traseu_id = c.id
                  LEFT JOIN masini as d on a.masina_id = d.id
                  WHERE a.traseu_id = '" . $traseu_id . "'
                  AND a.data_intrare >= '" . $data_start . "'
                  AND a.data_intrare <= '" . $data_stop . "'
                  AND a.sters = 0
                  GROUP BY a.masina_id, a.sofer_id
                  ORDER BY c.nume ASC           
                  ";

        $result = myQuery($query);
        $ret['produse_traseu'] = Produse::getProduseVanduteByTraseuId($traseu_id, array(
            'data_start' => $data_start,
            'data_stop' => $data_stop
        ));

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $r = array(
                    'numar' => $item['numar'],
                    'model' => $item['model'],
                    'nume_sofer' => $item['nume_sofer'],
                    'nume_traseu' => $item['nume_traseu'],
                    'total_produse' => array(),

                    'km' => self::getTotalKmByTraseuId(array(
                        'traseu_id' => $item['traseu_id'],
                        'masina_id' => $item['masina_id'],
                        'sofer_id' => $item['sofer_id'],
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ))
                );
                foreach ($ret['produse_traseu'] as $tip_produs_id => $item_tip_produs) {
                    $r['total_produse'][$tip_produs_id] = self::getTotalCantitatiByMasinaIdAndTraseuIdAndSoferId($item['masina_id'], $item['traseu_id'], $item['sofer_id'], array(
                        'tip_produs_id' => $tip_produs_id,
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));


                    $r['total_produse_extra'][$tip_produs_id] = self::getTotalCantitatiExtraByMasinaIdAndTraseuIdAndSoferId($item['masina_id'], $item['traseu_id'], $item['sofer_id'], array(
                        'tip_produs_id' => $tip_produs_id,
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));

                    $ret['grand'][$tip_produs_id] = self::getTotalCantitatiByTraseuIdAndProdusId($item['traseu_id'], $tip_produs_id, array(
                        'data_start' => $data_start,
                        'data_stop' => $data_stop
                    ));
                }
                array_push($ret['trasee'], $r);
            }
        }
        return $ret;
    }

}