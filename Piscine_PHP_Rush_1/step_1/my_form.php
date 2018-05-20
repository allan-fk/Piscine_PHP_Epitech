<!DOCTYPE HTML>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>FORMULAIRE</title>
	<link rel="stylesheet" type="text/css" href="my_style.css">
</head>

<body>
	<div class='wrapper1'>
		<div class="title">
			<h2>FORMULAIRE</h2>
		</div>
		<br>
		<form name="formPhp" action="#" method="post" onsubmit="return validateForm()">
			<div class="wrapper">
					<div class="gender">
						<input id="gender" name='gender' type='radio' value='male'>
						<label id="genderlabel" for="gender"></label>Homme
					</div>
					<div class="gender2">
						<input id="gender2" name='gender' type='radio' value='female'>
						<label id="gender2label" for='gender2'></label>Femme
					</div>
			</div>
			<p id="iSexe"></p>
			<div class="column-6 form-select">
				<select name="civilite" id="civil">
					    <option value="" disabled="disabled" selected="selected">Civilité</option>
					    <option>Monsieur</option>
					    <option>Madame</option>
					    <option>Mademoiselle</option>
				</select>
			</div>
			<p id="iCivil"></p>
			<input name='nom' id="name" placeholder='Nom' type='text'>
			<p id="iName"></p>
			<br>
			<input name='prenom' id="name2" placeholder='Prénom' type='text'>
			<p id="iName2"></p>
			<br>
			<input name='email' id="mail" placeholder='E-mail' type='email'>
			<p id="iEmail"></p>
			<br>
			<input name='telephone' id="phone" placeholder='Télephone' type='tel'>
			<p id="iPhone"></p>
			<br>
			<input name='website' id="website" placeholder='Website' type='url'>
			<p id="iWebsite"></p>
			<br>
			<input name='date' id="date" type='date'>
			<p id="iDate"></p>
			<br>
			<br>
			<br>
			<div class='container'>
				<div class='check-container'>
					<input type='checkbox' id='one'>
					<label for='one'></label>
					<span class='tag'>Jeux</span>
				</div>
				<div class='check-container'>
					<input type='checkbox' id='two'>
					<label for='two'></label>
					<span class='tag'>Cinéma</span>
				</div>
				<div class='check-container'>
					<input type='checkbox' id='three'>
					<label for='three'></label>
					<span class='tag'>Lecture</span>
				</div>
				<div class='check-container'>
					<input type='checkbox' id='four'>
					<label for='four'></label>
					<span class='tag'>Sport</span>
				</div>
				<div class='check-container'>
					<input type='checkbox' id='five'>
					<label for='five'></label>
					<span class='tag'>Informatique</span>
				</div>
			</div>
			<br>
			<br>
			<br>
			<input type="hidden" name="token" value="My first website">
			<input type='submit' value='Validation'>
			<br>
			<br>
			<br>
			</form>
	</div>
	<script src=my_script.js></script>
</body>

</html>
