<? include 'inc/datos.php' ?>
<? caca() ?>

<div class="col-12">
<h1>Contacto</h1>
<p> Ver a vernos a:</p>
<i class="fas fa-address-book "></i>
    <? mostrar('direccion')?>
</address>
<p>O llámanos al:</p>
<i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?mostrar('tel')?>"><?mostrar('tel')?></a>
<i class="fas fa-mail-bulk    "></i><a href="mailto:<?mostrar('email')?>"><?mostrar('email')?></a>
</div>


<? include 'inc/footer.php' ?>


