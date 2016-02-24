<?php
/**
 * #CHERCHER_LOGO{objet, id_objet}
 * Retrouver le logo d'un objet sans avoir a lancer tout le système de boucle.
 
 via https://gist.github.com/phenix-factory/57cb993512d13fdfee88
 *
 * @param mixed $p
 * @access public
 * @return mixed
 */
function balise_CHERCHER_LOGO_dist($p) {
    $objet = interprete_argument_balise(1,$p);
    $id_objet = interprete_argument_balise(2,$p);
    include_spip('inc/filtres');
    include_spip('public/quete');
    $p->code = "http_img_pack(_DIR_IMG.quete_logo(id_table_objet($objet), 'on', $id_objet, '', true), '', 'class=\"spip_logos\"')";
    $p->interdire_scripts = false;
    return $p;
}