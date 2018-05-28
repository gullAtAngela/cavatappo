<!-- Iterating through the Events from Template -->
<?php
// Setting up time for disable the event
$time = '17:00:00';
foreach ($events as $event) {
	if (strtotime($event['publishedUntil'] . " " . $time) >= strtotime(date('Y-m-d G:i:s'))) { ?>
		<section class="events bgPrimary">
			<div class="grid-container grid-x">
				<div class="small-12 cell">
					<div class="grid-x grid-padding-x">
						<div class="flags small-12 medium-3 large-3 cell">
							<?php if ($event['leftImage'] !== "") {echo "<img src=\"img/flags/{$event['leftImage']}\">";} ?>
						</div>
						<div class="small-12 medium-9 large-6 cell">
							<h3><?php echo $event['titel'] ?></h3>				
							<h5><?php echo $event['time'] ?></h5>
							<p><?php echo $event['description'] ?></p>
							<h6>Anmeldung</h6>
							<p>Unser Kleiner, aber feiner Weinladen bietet Platz für 20 Personen. Bitte senden Sie Ihre Anmeldung bis zum <?php echo $event['registrationDate'] ?> an <a href="mailto:info@cavatappo.ch">info@cavatappo.ch</a>. Für die Verköstigung verrechnen wir einen kleinen Beitrag von 25 Franken pro Person.</p>
						</div>
						<?php if ($event['rightImage'] !== "") { ?>
							<div class="eventImage small-12 medium-12 large-3 cell">
								<img class="" src="img/events/<?= $event['rightImage'] ?> ">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
<?php }
} ?>