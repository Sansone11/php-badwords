<?php
$Dante_speak = 'Per me si va ne la città dolente,
                per me si va ne l’etterno dolore,
                per me si va tra la perduta gente.
                Giustizia mosse il mio alto fattore:
                fecemi la divina podestate,
                la somma sapienza e ’l primo amore.
                Dinanzi a me non fuor cose create
                se non etterne, e io etterno duro.
                Lasciate ogne speranza, voi ch’intrate”.
                Queste parole di colore oscuro
                vid’io scritte al sommo d’una porta;
                per ch’io: «Maestro, il senso lor m’è duro';
$string_length = strlen( $Dante_speak );
$word = explode('', $Dante_speak);
$user = $_GET['word'];
$new_dante = str_replace($_user,'***',$Dante_speak,$sostituzioni);

?>
<h1><?php echo $Dante_speak; ?></h1>
<p>La stinga è lunga <?php echo $string_length; ?></p>
<h2><?= $new_dante ?></h2>
<p>la parola è stata sostituita<?=$sostituzioni ?>volte</p>
