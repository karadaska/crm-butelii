<?php

class Depozite
{

    public static function getDepoziteInfiintariClienti()
    {
        $ret = array();
        $query = "SELECT * from depozite";
        $result = myQuery($query);

        $a = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($a as $item) {
            $ret[$item['id']] = array(
                'depozit_id' => $item['id'],
                'nume' => $item['nume'],
            );
        }

        return $ret;
    }

    public static function getDepozite()
    {
        $ret = array();
        $query = "SELECT * FROM depozite";
        $result = myQuery($query);
        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $item['asignari'] = Asignari::getAsignariTraseeByDepozitId($item['id']);
                array_push($ret, $item);
            }
        }

        return $ret;
    }

    public static function getListaPreturiByProdusIdAndDepozitId($produs_id, $depozit_id)
    {
        $ret = array();
        $query = "SELECT a.pret, c.depozit_id, a.tip_produs_id from clienti_target as a
                    LEFT JOIN asignari_clienti_trasee as b on a.client_id = b.client_id
                    LEFT JOIN asignari_trasee_depozite as c on b.traseu_id = c.traseu_id
                    LEFT JOIN tip_produs as d on a.tip_produs_id = d.id
                    WHERE a.sters = 0
                    AND a.tip_produs_id = '" . $produs_id . "'
                    AND c.depozit_id = '" . $depozit_id . "'
                    AND b.sters = 0
                    AND c.sters = 0
                    GROUP BY pret";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['pret']] = Clienti::getNumarClientiByPret($item['pret'], $item['depozit_id'], $item['tip_produs_id']);
            }

        }
        return $ret;
    }

    public static function getTipProduseByDepozitId($depozit_id)
    {
        $ret = array();
        $query = "SELECT tip_produs_id, d.tip, c.depozit_id from clienti_target as a
                    LEFT JOIN asignari_clienti_trasee as b on a.client_id = b.client_id
                    LEFT JOIN asignari_trasee_depozite as c on b.traseu_id = c.traseu_id
                    LEFT JOIN tip_produs as d on a.tip_produs_id = d.id
                    WHERE a.sters = 0
                    AND c.depozit_id = '" . $depozit_id . "'
                    AND b.sters = 0
                    AND c.sters = 0
                    AND d.sters = 0
                    GROUP BY tip_produs_id";
        $result = myQuery($query);

        if ($result) {
            $a = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($a as $item) {
                $ret[$item['tip']] = array(
                    'nume_produs' => $item['tip'],
                    'tip_produs_id' => $item['tip_produs_id'],
                    'pret' => self::getListaPreturiByProdusIdAndDepozitId($item['tip_produs_id'], $item['depozit_id'])
                );
            }
        }
        return $ret;

    }

    public static function getClientiByDepozitIdAndDataStart($depozit_id, $data_start)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE a.sters = 0 and (a.stare_id  = 1 or stare_id = 3) 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('%" . $data_start . "%')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }
    public static function getClientiActiviInfiintatiByDepozitIdAndDataStart($depozit_id, $data_start)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE a.sters = 0 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('%" . $data_start . "%')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getClientiByDepozitIdAndDataStop($depozit_id, $data_stop)
    {
        $ret = array();
        $query = "SELECT
               a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id
                WHERE a.stare_id = 2               
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_stop LIKE ('%" . $data_stop . "%')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getClientiByDepozitIdFaraDataContract($depozit_id)
    {
        $ret = array();
        $query = "SELECT
                a.nume
               FROM
                clienti AS a
                LEFT JOIN asignari_clienti_trasee AS e ON a.id = e.client_id
                LEFT JOIN asignari_trasee_depozite AS f ON e.traseu_id = f.traseu_id 
                WHERE
                a.sters = 0 
                AND f.depozit_id = '" . $depozit_id . "'
                AND a.data_start LIKE ('0000-00-00')
                AND a.data_stop LIKE ('0000-00-00')
                AND a.exclus = 0
                GROUP BY a.id
                ";
        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;

    }

    public static function getDepozitById($id)
    {
        $ret = array();
        $query = "SELECT * FROM depozite where id = '" . $id . "' LIMIT 1";
        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getDepozitByClientId($id = 0)
    {
        $ret = null;
        $query = "SELECT d.*,
	              a.id AS asignare_id
                  FROM
                asignari_trasee_depozite a
                LEFT JOIN asignari_clienti_trasee AS b ON a.traseu_id = b.traseu_id
                LEFT JOIN trasee AS c ON b.traseu_id = c.id
                LEFT JOIN depozite AS d ON a.depozit_id = d.id 
                where b.client_id = '" . $id . "'
                and b.sters = 0";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getDepozitByTraseuId($id = 0)
    {
        $ret = null;
        $query = "select a.depozit_id, a.traseu_id, b.nume 
        from 
        asignari_trasee_depozite as a 
        LEFT JOIN depozite as b on a.depozit_id = b.id
        where a.sters = 0
        and traseu_id = '" . $id . "' LIMIT 1";

        $result = myQuery($query);
        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }

        return $ret;
    }

    public static function getDepozitByMasinaId($masina_id)
    {
        $ret = array();
        $query = "Select a.*, c.nume as nume_traseu, e.numar as numar_masina
                from
                depozite as a
                LEFT JOIN asignari_trasee_depozite as b on a.id = b.depozit_id
                left join trasee as c on b.traseu_id = c.id
                LEFT JOIN asignari_masini_trasee as d on b.traseu_id = d.traseu_id
                left join masini as e on d.masina_id = e.id
                where b.sters = 0
                and d.sters = 0
                and e.id = '" . $masina_id . "'";

        $result = myQuery($query);

        if ($result) {
            $ret = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    public static function getDepozitByFisaGenerataId($id)
    {
        $ret = array();
        $id_fisa = "SELECT depozit_id from fise_generate where id = '" . $id . "' ORDER BY id desc LIMIT 1";

        $result = myQuery($id_fisa);

        if ($result) {
            $ret = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $ret;
    }


}