<aside class="bg-dark">
	<div class="container text-center" style="height: 30px;">
		<div class="call-to-action">
			<p>Copyright (c) 2017-2018 FatturarePA.it (TM) &egrave; un marchio di Doubling S.R.L.S. - P.IVA 01939510663 - Via Capo le Case 13, 67100 L'Aquila (AQ)</p>
		</div>
	</div>
</aside>
 <?php 
// se ruolo == SERVICE, REGISTERED USER
 if ($_SESSION['myrole'] != 1 && $_SESSION['myrole'] != 2) {
?>    
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Per qualsiasi informazione contatta il nostro HelpDesk</h2>
                    <hr class="primary">
                    <p>Il nostro servizio di assistenza &egrave; a tua disposizione</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>328.3472997 - 389.7655038</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">assistenza@fatturarepa.it</a></p>
                </div>
            </div>
        </div>
    </section>
<?php 	
}
?>
    