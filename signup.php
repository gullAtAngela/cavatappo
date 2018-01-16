<form action="index.php#signupEvent" method="POST">
	<div class="grid-x grid-x-padding align-center">
		<div class="small-12 medium-8 large-8 cell">
			<?= input("firstname", "Vorname"); ?>
			<?= input("lastname", "Nachname"); ?>
			<?= eventList($events, "event"); ?>
			<input class="button float-right" type="submit" name="send" value="Anmelden">
	</div>
</form>