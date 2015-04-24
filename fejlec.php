<div id="fejlec">
	<div class="udvozlo">
	Üdvözöljük
	<?php
	if (isset($_SESSION['user'])){
		echo $_SESSION['user'] . '!<br>';
		echo '<a href="logout.php">Kilépés</a><br>';
	}else{
		echo 'Vendég!<br>';
		echo '<a href="register.php">Regisztráció</a><br>';
		echo '<a href="login.php">Bejelentkezés</a><br>';
	}

	?>
	</div>
	<div class="kosar">
	<a href="kosar.php">Kosár <?php echo '(' . count($_SESSION['kosar']) . ')';?></a>	
	</div>	
	<div class="menusor">
		<ul>
		<li><a href="index.php">Kezdőlap</a></li>

			<li><a href="xbox360.php">Xbox 360</a>
				<ul>
					<li><a href="termekek.php?p=0&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=0&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=0&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="xboxone.php">Xbox One</a>
				<ul>
					<li><a href="termekek.php?p=1&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=1&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=1&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="ps3.php">PS3</a>
				<ul>
					<li><a href="termekek.php?p=2&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=2&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=2&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="ps4.php">PS4</a>
				<ul>
					<li><a href="termekek.php?p=3&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=3&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=3&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="wiiu.php">Wii U</a>
				<ul>
					<li><a href="termekek.php?p=4&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=4&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=4&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="wii.php">Wii</a>
				<ul>
					<li><a href="termekek.php?p=5&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=5&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=5&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="psvita.php">PS Vita</a>
				<ul>
					<li><a href="termekek.php?p=6&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=6&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=6&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="psp.php">PSP</a>
				<ul>
					<li><a href="termekek.php?p=7&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=7&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=7&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="3ds.php">3DS</a>
				<ul>
					<li><a href="termekek.php?p=8&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=8&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=8&t=2">Tartozékok</a></li>
				</ul>
			</li>
			<li><a href="pc.php">PC</a>
				<ul>
					<li><a href="termekek.php?p=9&t=0">Gépek</a></li>
					<li><a href="termekek.php?p=9&t=1">Játékok</a></li>
					<li><a href="termekek.php?p=9&t=2">Tartozékok</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>

