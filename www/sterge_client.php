<?php
//require_once "etc/config.php";
//
//if (!Utilizatori::hasRights(1)) {
//    exit();
//}
//
//$id_event  = getRequestParameter('id_event', 0);
//if ($id_event) {
//    $query     = "update calendar set sters=1 where id='" . $id_event . "';";
//
//    $nr_update = myExec($query);
//    $query     = "update calendar set sters=1 where id='" . $id_event . "';";
//    $nr = myExec($query);
//
//    if ($nr_update == 1)
//        echo "1";
//    else echo "0";
//} else {
//    echo "0";
//}
<?php
$asgn = 0;
$c = new Criteria();
$c->add(AsignareParcAutoPeer::ACTIV, 1);
$c->addDescendingOrderByColumn(AsignareParcAutoPeer::ID);
$asignat = $vehicul->getAsignareParcAutos($c);
if (count($asignat) > 0) {
    $asgn = $asignat[0];
    if ($asgn->getUserId() == 6) {
        $can_delete = 1;
        echo "";
    } else {
        $can_delete = 0;
//        echo '<a href="/utilizatori/raport?id=' . $asgn->getUserId() . '">' . ucwords(strtolower($asgn->getUsersData()->getNume())) . '</a>';
    }
} else {
    $can_delete = 1;
}

$sterge_masina = '';
if ($sf_user->hasCredential(array('r21'))) {
    $link1 = '<a href="/parcauto/asignvehicul?id=' . $vehicul->getId() . '" class="btn btn-primary btn-mini">Asigneaza masina</a>';
    if ($can_delete == 1) {
        $sterge_masina = link_to('Sterge masina', 'parcauto/deletevehicul?id=' . $vehicul->getId(),
            'confirm=Sunteti sigur(a) ca doriti sa stergeti vehiculul? Procesul este ireversibil class="btn btn-mini btn-danger"');
    }
}

$params = array('title' => 'Detalii vehicul', 'icon' => 'i-car',
    'links' => array('<a href="/parcauto/vehiculelist" class="btn btn-primary btn-mini">Lista masini</a>', $link1, $sterge_masina,
    ));
include_component('main', 'headerpagina', $params);
?>

<table class="table table-bordered">
    <tr>
        <th width="50"></th>
        <th width="30">CI</th>
        <th>Numar Vehicul</th>
        <th>Tip Vehicul</th>
        <th>Identificare</th>
        <th>Apartenenta</th>
        <th>Gps Id</th>
        <?php
        if ($vehicul->getTipApartenenta() == 1) {
            ?>
            <th>Stare masina</th>
            <?
        } ?>
        <th>Kilometraj+GPS</th>
        <th>Asignat la</th>
        <th>Revizie</th>
        <th>ITP</th>
        <th>Rovinieta</th>
    </tr>
    <tr>
        <td height="20">
            <?= link_to('Modifica', 'parcauto/editvehicul?id=' . $vehicul->getId(), 'class="btn btn-mini btn-primary"') ?>
        </td>
        <td>
            <?
            if ($ci) {
                echo link_to('<i class="icon24 i-book green"></i>', 'parcauto/addci?id=' . $vehicul->getId());
            } else {
                echo link_to('CI', 'parcauto/addci?id=' . $vehicul->getId(), 'class="btn btn-mini btn-primary"');
            }
            ?>
        </td>
        <td height="20">
            <?= $vehicul->getNrAuto() ?>
        </td>
        <td><?php echo myParcAuto::getAutoInfoByAutoId($vehicul->getTipAuto())->getNume(); ?></td>
        <td><?php echo $vehicul->getNrDeIdentificare(); ?></td>
        <td><?php echo myParcAuto::getApartenentaInfoById($vehicul->getTipApartenenta())->getNume(); ?></td>
        <td><?php echo $vehicul->getEvoUuid(); ?></td>
        <?php
        if ($vehicul->getTipApartenenta() == 1) {
            ?>
            <td><?= $vehicul->getParcAutoStari()->getNume(); ?></td>
            <?
        } ?>
        <td>
            <?
            $kilometraj = 0;
            $c = new Criteria();
            $c->add(ParcAutoParcursPeer::VEHICUL_ID, $vehicul->getId());
            $c->addDescendingOrderByColumn(ParcAutoParcursPeer::DATA_CITIRE);
            $kilometraj_db = ParcAutoParcursPeer::doSelectOne($c);
            if ($kilometraj_db) {
                $kilometraj = $kilometraj_db->getKilometri();
            }
            //luam din gps
            $km_parcursi = myAuto::getTotalKmFromLastReading($vehicul->getId());
            if ($km_parcursi > 0) {
                echo $kilometraj . "+" . $km_parcursi . " = " . number_format($kilometraj + $km_parcursi, 0, ',', '.');
            } elseif ($kilometraj == 0) {
                echo "nu are citire";
            } else {
                echo $kilometraj;
            }
            ?>
        </td>
        <td>
            <?php
            $c = new Criteria();
            //$c->add(AsignareParcAutoPeer::ACTIV,1);
            $c->addDescendingOrderByColumn(AsignareParcAutoPeer::ID);
            $asignat = $vehicul->getAsignareParcAutos($c);
            if (count($asignat) > 0) {
                $asgn = $asignat[0];
                echo ucwords(strtolower($asgn->getUsersData()->getNume()));
            }
            ?>
        </td>
        <td>
            <?php
            $auto = new myAuto($vehicul->getId());
            $auto->getNextRevizie();
            ?>
            <div style="background-color:<?= $auto->getRevizieColor() ?>">&nbsp;</div>
        </td>
        <td>
            <div style="background-color: <?= $auto->getItpColor($vehicul->getPerioadaItp()) ?>"
                 title="ROSU cand mai sunt 10 zile pana la expirare!">&nbsp;
            </div>
        </td>
        <td>
            <div style="background-color: <?= $auto->getRovigneteColor() ?>">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td colspan="11">
            <div id="detalii<?= $vehicul->getId() ?>"></div>
        </td>
    </tr>
</table>

<table class="table">
    <tr>
        <td valign="top" align="left" style="width: 50%;">
            <?
            $lista_deconturi_cash = myAuto::getListaDeconturiByAutoIdAndCategorieSubcategorie($vehicul->getId(), 0, $vehicul->getDataCumparare(), 0, 1, 7);
            if (count($lista_deconturi_cash)) {
                ?>
                <fieldset>
                    <legend><b>Alimentari cash</b>&nbsp</legend>
                    <table class="table table-striped table-bordered" width="100%">
                        <tr>
                            <th width="10" style="width: 10px;">
                                <? if (count($lista_deconturi_cash) > 5) { ?>
                                    <i id="toggle_alimentari_cash" class="icon16 i-list" style="cursor: pointer;"></i>
                                <? } ?>
                            </th>
                            <th width="170">
                                Data
                            </th>
                            <th width="200">
                                Valoare
                            </th>
                        </tr>
                        <?
                        $total_cost = 0;
                        $data_luna_curenta = date("m");
                        $nr_randuri = 0;
                        foreach ($lista_deconturi_cash as $row_cash) {
                            $nr_randuri++;
                            if ($row_cash->getDataReferat("m") != $data_luna_curenta) {
                                if ($total_cost > 0) {
                                    ?>
                                    <tr <? if ($nr_randuri > 5) {
                                        echo 'class="alimentare_cash_ascunsa"';
                                    } ?>>
                                        <td align="right" colspan="2">Total luna (<?= $data_luna_curenta ?>):</td>
                                        <td align="right"><b><?= $total_cost ?> lei</b></td>
                                    </tr>
                                    <?
                                }
                                $data_luna_curenta = $row_cash->getDataReferat("m");
                                $total_cost = 0;
                            }
                            $total_cost += $row_cash->getSuma();
                            ?>
                            <tr <? if ($nr_randuri > 5) {
                                echo 'class="alimentare_cash_ascunsa"';
                            } ?> >
                                <td width="20"></td>
                                <td>
                                    <?= $row_cash->getDataReferat("d-m-Y") ?>
                                </td>
                                <td align="right">
                                    <?= $row_cash->getSuma() ?>
                                </td>
                            </tr>
                            <?
                        }
                        ?>
                        <tr <? if ($nr_randuri > 5) {
                            echo 'class="alimentare_cash_ascunsa"';
                        } ?>>
                            <td align="right" colspan="2">Total luna (<?= $data_luna_curenta ?>):</td>
                            <td align="right"><b><?= $total_cost ?> lei</b></td>
                        </tr>
                    </table>
                </fieldset>
                <?
            } ?>

            <fieldset>
                <legend><b>Alimentari card</b>&nbsp;
                    <? if ($sf_user->hasCredential('r21')) { ?>
                        <?= link_to('Export alimentari', 'parcauto/exportalimentari?id=' . $vehicul->getId(), 'class="btn btn-primary btn-mini"') ?>&nbsp;
                        <?= link_to('Adauga alimentare', 'parcauto/addalimentare?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                    <? }; ?>
                </legend>
                <table class="table table-striped table-bordered" width="100%">
                    <tr>
                        <th style="width: 30px;">
                            <? if (count($alimentari) > 5) { ?>
                                <i id="toggle_alimentari" class="icon16 i-list" style="cursor: pointer;"></i>
                            <? } ?>
                        </th>
                        <th width="170">
                            Data
                        </th>
                        <th>
                            Cantitate
                        </th>
                        <th width="200">
                            Pret
                        </th>
                    </tr>
                    <?
                    $total_cantitate = 0;
                    $total_cost = 0;
                    $data_luna_curenta = date("m");
                    $nr_randuri = 0;
                    foreach ($alimentari as $row) {
                        $nr_randuri++;
                        if ($row->getData("m") != $data_luna_curenta) {
                            if ($total_cantitate > 0) {
                                ?>
                                <tr <? if ($nr_randuri > 5) {
                                    echo 'class="alimentare_ascunsa"';
                                } ?>>
                                    <td align="right" colspan="2">Total luna (<?= $data_luna_curenta ?>):</td>
                                    <td align="right"><b><?= $total_cantitate ?> litri</b></td>
                                    <td align="right"><b><?= $total_cost ?> lei</b></td>
                                </tr>
                                <?
                            }
                            $data_luna_curenta = $row->getData("m");
                            $total_cantitate = 0;
                            $total_cost = 0;
                        }
                        $total_cantitate += $row->getCantitate();
                        $total_cost += $row->getCost();
                        ?>
                        <tr <? if ($nr_randuri > 5) {
                            echo 'class="alimentare_ascunsa"';
                        } ?> >
                            <td width="20">
                                <?= link_to('<img src="/images/edit.png">', 'parcauto/editalimentare?id=' . $row->getId(), ' title="edit"') ?>
                            </td>
                            <td>
                                <?= $row->getData("d-m-Y") ?>
                            </td>
                            <td align="right">
                                <?= $row->getCantitate() ?>
                            </td>
                            <td align="right">
                                <?= $row->getCost() ?>
                            </td>
                        </tr>
                        <?
                    }
                    if (count($alimentari)) { ?>
                        <tr <? if ($nr_randuri > 5) {
                            echo 'class="alimentare_ascunsa"';
                        } ?>>
                            <td align="right" colspan="2">Total luna (<?= $data_luna_curenta ?>):</td>
                            <td align="right"><b><?= $total_cantitate ?> litri</b></td>
                            <td align="right"><b><?= $total_cost ?> lei</b></td>
                        </tr>
                    <? } ?>
                </table>
            </fieldset>

            <fieldset>
                <legend>
                    <b>Roviniete</b>&nbsp;<?= link_to('Adauga rovinieta', 'parcauto/addrovgnvehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th style="width: 40px"></th>
                        <th>
                            Data inceput
                        </th>
                        <th>
                            Data expirare
                        </th>
                    </tr>
                    <? foreach ($rovignete as $row) { ?>
                        <tr>
                            <td><?= link_to('<img src="/images/edit.png">', 'parcauto/editrovinieta?id=' . $row->getId() . '&masina_id=' . $vehicul->getId(), ' title="edit"') ?></td>
                            <td>
                                <?= $row->getDataStart("d-m-Y") ?>
                            </td>
                            <td>
                                <?= $row->getDataStop("d-m-Y") ?>
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Revizii</b>&nbsp;
                    <? if ($sf_user->hasCredential('r21')) { ?>
                        <?= link_to('Adauga revizie', 'parcauto/addrevizievehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                    <? } ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>
                            Km revizie
                        </th>
                        <th>
                            Data Revizie
                        </th>
                        <th class="span2">
                            Operatie
                        </th>
                    </tr>
                    <? foreach ($revizii as $row) { ?>
                        <tr>
                            <td>
                                <?= $row->getKm() ?>
                            </td>
                            <td>
                                <?= $row->getDataRevizie("d-m-Y") ?>
                            </td>
                            <td style="text - align: center;">
                                <? if ($sf_user->hasCredential('r21')) { ?>
                                    <?= link_to('Sterge', 'parcauto/stergerevizievehicul?id=' . $row->getId(), 'confirm=Sunteti sigur(a)? class="btn btn-danger btn-mini"') ?>
                                <? }; ?>
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend>
                    <b>Kilometraj</b>&nbsp; <?= link_to('Adauga citire', 'parcauto/addkilometri?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>
                            KM Cititi
                        </th>
                        <th class="span2">
                            Data Citire
                        </th>
                        <th>Operatie</th>
                    </tr>
                    <? foreach ($km as $row) { ?>
                        <tr>
                            <td>
                                <?= $row->getKilometri() ?>
                            </td>
                            <td style="text - align: center">
                                <?= $row->getDataCitire("d-m-Y") ?>
                            </td>
                            <td style="text - align: center;width: 125px">
                                <? if ($sf_user->hasCredential('r21')) { ?>
                                    <?= link_to('Sterge', 'parcauto/stergekmvehicul?id=' . $row->getId(), 'confirm=Sunteti sigur(a)? class="btn btn-danger btn-mini"') ?>
                                <? }; ?>
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>ITP</b>&nbsp;
                    <? if ($sf_user->hasCredential('r21')) { ?>
                        <?= link_to('Adauga ITP', 'parcauto/additpvehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                    <? }; ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>
                            Data efectuare ITP
                        </th>
                        <th>
                            Data expirare ITP
                        </th>
                        <th class="span2">
                            Operatie
                        </th>
                    </tr>
                    <? foreach ($itp as $row) { ?>
                        <tr>
                            <td>
                                <?= $row->getDataItp("d-m-Y") ?>
                            </td>
                            <td>
                                <?= date('d-m-Y', strtotime('+' . $vehicul->getPerioadaItp() . ' months', strtotime($row->getDataItp("d-m-Y")))); ?>
                            </td>
                            <td style="text - align: center">
                                <? if ($sf_user->hasCredential('r21')) { ?>
                                    <?= link_to('Sterge', 'parcauto/stergeitpvehicul?id=' . $row->getId(), 'confirm=Sunteti sigur(a)? class="btn btn-danger btn-mini"') ?>
                                <? }; ?>
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Tahograf</b>&nbsp;
                    <? if ($sf_user->hasCredential('r210')) { ?>
                        <?= link_to('Adauga verificare', 'parcauto/addtahografvehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                    <? }; ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>
                            Data Expirare
                        </th>
                        <th class="span2">
                            Operatie
                        </th>
                    </tr>
                    <? foreach ($tahografe as $row) { ?>
                        <tr>
                            <td>
                                <?= $row->getData("d-m-Y") ?>
                            </td>
                            <? if ($sf_user->hasCredential('r210')) { ?>
                                <td style="text - align: center">
                                    <?= link_to('Sterge', 'parcauto/stergetahografvehicul?id=' . $row->getId(), 'confirm=Sunteti sigur(a)? class="btn btn-danger btn-mini"') ?>
                                </td>
                            <? } else { ?>
                                <td></td>
                                <?
                            } ?>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Clasificare</b>&nbsp;
                    <? if ($sf_user->hasCredential('r211')) { ?>
                        <?= link_to('Adauga clasificare', 'parcauto/addclasificarevehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                    <? }; ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>
                            Data Expirare
                        </th>
                        <th class="span2">
                            Operatie
                        </th>
                    </tr>
                    <? foreach ($clasificari as $row) { ?>
                        <tr>
                            <td>
                                <?= $row->getData("d-m-Y") ?>
                            </td>
                            <? if ($sf_user->hasCredential('r211')) { ?>
                                <td style="text - align: center">
                                    <?= link_to('Sterge', 'parcauto/stergeclasificarevehicul?id=' . $row->getId(), 'confirm=Sunteti sigur(a)? class="btn btn-danger btn-mini"') ?>
                                </td>
                            <? } else { ?>
                                <td></td>
                                <?
                            } ?>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Copie Conforma</b>&nbsp;
                    <? if ($sf_user->hasCredential('r212')) { ?>
                        <?= link_to('Adauga copie conforma', 'parcauto/addcopievehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                    <? }; ?>
                </legend>
                <table class="table table-bordered table-striped" width="100%">
                    <tr>
                        <th>
                            Data Expirare
                        </th>
                        <th class="span2">
                            Operatie
                        </th>
                    </tr>
                    <? foreach ($copii as $row) { ?>
                        <tr>
                            <td>
                                <?= $row->getData("d-m-Y") ?>
                            </td>
                            <? if ($sf_user->hasCredential('r212')) { ?>
                                <td style="text - align: center">
                                    <?= link_to('Sterge', 'parcauto/stergecopievehicul?id=' . $row->getId(), 'confirm=Sunteti sigur(a)? class="btn btn-danger btn-mini"') ?>
                                </td>
                            <? } else { ?>
                                <td></td>
                                <?
                            } ?>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>


        </td>
        <td valign="top" align="left" style="width: 50 %;">

            <fieldset>
                <legend><b>Documente</b></legend>
                <form name="upload_referate" id="upload_referate" action="/parcauto/douploadreferate"
                      enctype="multipart/form-data" method="POST" style="margin - bottom: 5px;">
                    <input type="hidden" name="masina_id" value=" <?= $vehicul->getId() ?>"/>
                    <table class="table table-bordered table-striped" width="100%" style="margin-bottom: 5px;">
                        <thead>
                        <tr>
                            <th colspan="4" style="text-align: left;font-size: 14px">Adaugare referat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th style="text-align: left;vertical-align: middle">Tip referat:</th>
                            <td colspan="2">
                                <select name="tip_referat_id" id="tip_referat_id" class="nouniform"
                                        style="width: 150px;">
                                    <? foreach ($tip_referate as $row) { ?>
                                        <option value="<?= $row->getId() ?>"><?= $row->getNumeReferat() ?></option>
                                    <? } ?>
                                </select>
                            </td>
                            <th style="text-align: left;vertical-align: middle"> din Data:
                                <?php //echo input_date_tag('data_referat', date("Y-m-d"), 'rich=true readonly="readonly" style="width:90px;"') ?>
                                <input type="text" name="data_referat" id="data_referat" value="<?= date("Y-m-d") ?>"/>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4" id="lista_defectiuni"></td>
                        </tr>
                        <tr>
                            <th style="text-align: left;vertical-align: middle">Valoare ref.:</th>
                            <td valign="middle">
                                <input type="text" name="valoare" size="5" style="width: 70px;"/>
                            </td>
                            <th class="stanga" style="text-align: right;vertical-align: middle">Valoare factura:
                            </th>
                            <td valign="middle">
                                <input type="text" name="valoare_factura" size="5" style="width: 70px;"/>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align: left;vertical-align: middle">Fisier:</th>
                            <td colspan="3">
                                <input type="file" name="fisier_referat" id="fisier_referat" style="width: 100px;"/>&nbsp;
                                <input class="btn btn-success btn-mini" type="submit" name="adauga_referat"
                                       id="adauga_referat" value="Adauga Referat"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </fieldset>

            <fieldset>
                <legend><b>Referate/deconturi</b></legend>
                <table class="table table-striped table-bordered" width="100%" id="tabel_deconturi">
                    <tr>
                        <th><? if (count($deconturi) > 5) { ?>
                                <i id="toggle_deconturi" class="icon16 i-list" style="cursor: pointer;"></i>
                            <? } ?>
                        </th>
                        <th class="span2">
                            Data
                        </th>
                        <th>
                            Tip Referat
                        </th>
                        <th align="right">
                            Val. referat
                        </th>
                        <th align="right">
                            Val. factura
                        </th>
                    </tr>
                    <?
                    $nr_randuri = 0;
                    foreach ($deconturi as $row) {
                        $nr_randuri++;
                        ?>
                        <tr <? if ($nr_randuri > 5) {
                            echo 'class="referat_ascuns"';
                        } ?>>
                            <td width="30">
                                <a href="javascript:void(0);" data-editare="<?= $row->getId() ?>"><img
                                        src="/images/details.png" border="0" alt="edit"/></a>
                            </td>
                            <td width="70">
                                <?= $row->getDataReferat("d-m-Y") ?>
                            </td>
                            <td width="120">
                                <?= $row->getBugetSubcategorii()->getName(); ?>
                            </td>
                            <td align="right">
                                <?= $row->getSuma() ?> lei
                            </td>
                            <td align="right">
                                <?= myBugete::getTotalPlatiReferat($row->getId()) ?> lei
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Referate anterioare</b></legend>
                <table class="table table-striped table-bordered" width="100%">
                    <tr>
                        <th><? if (count($referate) > 5) { ?>
                                <i id="toggle_referate" class="icon16 i-list" style="cursor: pointer;"></i>
                            <? } ?>
                        </th>
                        <th class="span2">
                            Data
                        </th>
                        <th>
                            Tip Referat
                        </th>
                        <th align="right">
                            Val. referat
                        </th>
                        <th align="right">
                            Val. factura
                        </th>
                        <th></th>
                    </tr>
                    <?
                    $nr_randuri = 0;
                    foreach ($referate as $row) {
                        $nr_randuri++;
                        ?>
                        <tr <? if ($nr_randuri > 5) {
                            echo 'class="referat_ascuns"';
                        } ?>>
                            <td width="40">
                                <?= link_to('<img src="/images/edit.png">', 'parcauto/editreferatauto?id=' . $row->getId(), ' title="edit"') ?>
                            </td>
                            <td width="70">
                                <?= $row->getDataReferat("d-m-Y") ?>
                            </td>
                            <td width="120">
                                <?= $row->getParcAutoTipReferate()->getNumeReferat(); ?>
                            </td>
                            <td align="right">
                                <?= $row->getValoare() ?> lei
                            </td>
                            <td align="right">
                                <?= $row->getValoareFactura() ?> lei
                            </td>
                            <td align="right" width="40">
                                <? if ($row->getNumeReferat()) {
                                    echo link_to('<img src="/images/download.png">', '/files/downloadreferatauto?id=' . $row->getId(), ' target="_blank" title="download"');
                                }; ?>
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Lista defectiuni vehicul</b></legend>
                <table class="table table-striped table-bordered" width="100%">
                    <? if ($sf_user->hasCredential('r21')) { ?>
                        <tr>
                            <td colspan="4" align="right">
                                <?= link_to('Adauga defectiune', 'parcauto/adddefectiunevehicul?id=' . $vehicul->getId(), 'class="btn btn-info btn-mini"') ?>
                            </td>
                        </tr>
                    <? }; ?>
                    <tr>
                        <th><? if (count($defectiuni) > 5) { ?><i id="toggle_defectiuni" class="icon16 i-list"
                                                                  style="cursor: pointer;"></i>
                            <? } ?>
                            Tip Defectiune
                        </th>
                        <th>
                            Data Defectiune
                        </th>
                        <th style="width: 30px;">
                            Critica?
                        </th>
                        <th class="span2">
                            Operatie
                        </th>
                    </tr>
                    <? $nr_randuri = 0;
                    foreach ($defectiuni as $row) {
                        $nr_randuri++;
                        ?>
                        <tr <? if ($nr_randuri > 5) {
                            echo 'class="defectiune_ascunsa"';
                        } ?>>
                            <td>
                                <?= $row->getDefectiuniAuto()->getName() ?>
                            </td>
                            <td>
                                <?= $row->getDataDefectiune("d-m-Y") ?>
                            </td>
                            <td style="text-align: center;">
                                <? if ($row->getDefectiuniAuto()->getCritic() == 1) { ?>
                                    <img src="/images/critic.gif" class="icon" alt="Critic" title="Critic" width="18"
                                         height="18"/>
                                <? }; ?>
                            </td>
                            <td style="text-align: center">
                                <? if ($sf_user->hasCredential('r21')) { ?>
                                    <?= link_to('Sterge', 'parcauto/stergedefectiunevehicul?id=' . $row->getId(), 'class="btn btn-danger btn-mini"') ?>
                                <? }; ?>
                            </td>
                        </tr>
                    <? }; ?>
                </table>
            </fieldset>

            <fieldset>
                <legend><b>Istoric asignari</b></legend>
                <table width="100%" class="table">
                    <tr>
                        <th><? if (count($istoric) > 5) { ?><i id="toggle_angajati" class="icon16 i-list"
                                                               style="cursor: pointer;"></i>
                            <? } ?>
                            Angajat
                        </th>
                        <th>Data asignare</th>
                    </tr>
                    <?php $nr_randuri = 0;
                    $last_user = 0;
                    foreach ($istoric as $ist) {
                        if ($last_user != $ist->getUserId()) {
                            $last_user = $ist->getUserId();
                            $nr_randuri++; ?>
                            <tr <? if ($nr_randuri > 5) {
                                echo 'class="asignare_ascunsa"';
                            } ?>>
                                <td>
                                    <? if ($ist->getUserId() != 6) {
                                        echo ucwords(strtolower($ist->getUsersData()->getNume()));
                                    } else {
                                        echo "neasignata";
                                    } ?>
                                </td>
                                <td>
                                    <?php
                                    echo $ist->getDataAsignare();
                                    if ($nr_randuri == 1) {
                                        echo ' - prezent';
                                    } else {
                                        echo ' - ' . $end_asign;
                                    }
                                    $end_asign = $ist->getDataAsignare();
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } ?>
                </table>
            </fieldset>

        </td>
    </tr>
</table>
<div style="margin-bottom: 70px"></div>


<div id="myModal" class="modal hide fade">
    <div class="modal-header">
        <button class="close" data-dismiss="modal" type="button">
            <i class="icon16 i-close-2"></i>
        </button>
        <h3>Detalii Referat/Decont</h3>
    </div>
    <div id="modal_content"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        $('#tabel_deconturi').find('[data-editare]').off('click').on('click', function (e) {
            e.stopPropagation();
            var id_curent = $(this).attr('data-editare');
            $.ajax({
                url: '/deconturi/getformviewreferat',
                method: 'post',
                data: {
                    referat_id: id_curent
                },
                success: function (html) {
                    $('#modal_content').html(html);
                    $('#myModal').on('shown.bs.modal', function () {
                        $('#modal_content').find('select').uniform();
                    });

                    $('#myModal').on('hidden.bs.modal', function () {
                        $('#myModal').unbind();
                        $('#modal_content').empty();
                    });

                    $('#myModal').modal('show');
                }
            })
        });


        $('#tip_referat_id').uniform();

        $('#tip_referat_id').on('change', function () {
            var referat_id = $(this).val();
            $.ajax({
                url: "/parcauto/gettipdefectiuni",
                data: {
                    tip_referat: referat_id
                },
                success: function (data) {
                    $('#lista_defectiuni').html(data);

                },
                error: function (xhr, status) {
                    console.log("ajax error: " + status);
                }
            });
        });
        $('#data_referat').datepicker({
            dateFormat: 'yy-mm-dd'
        });

        $('#toggle_alimentari').on('click', function () {
            $('.alimentare_ascunsa').toggle();
        });

        $('#toggle_alimentari_cash').on('click', function () {
            $('.alimentare_cash_ascunsa').toggle();
        });


        $('#toggle_referate').on('click', function () {
            $('.referat_ascuns').toggle();
        });

        $('#toggle_defectiuni').on('click', function () {
            $('.defectiune_ascunsa').toggle();
        });

        $('#toggle_angajati').on('click', function () {
            $('.asignare_ascunsa').toggle();
        });

    })
</script>