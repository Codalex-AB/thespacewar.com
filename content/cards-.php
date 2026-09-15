<?php
$title_tag = 'The Cards | TheSpaceWar.com';
require(ROOT.'view/head.php');
?>

<h1>The Cards</h1>

<p>The Space War includes three ready-to-play preconstructed decks. Each deck has its own commanders, cards, and style of play:</p>

<div style="display:flex;flex-wrap:wrap;justify-content:center;gap:35px;text-align:center;margin:30px 0;">
    <a href="/the-terrans" style="text-decoration:none;">
        <img style="display:block;height:120px;width:120px;margin-bottom:8px;" src="https://images.thespacewar.com/factions/white/the-terrans.png" alt="The Terrans faction logo">
        <strong>The Terrans</strong>
    </a>
    <a href="/the-swarm" style="text-decoration:none;">
        <img style="display:block;height:120px;width:120px;margin-bottom:8px;" src="https://images.thespacewar.com/factions/white/the-swarm.png" alt="The Swarm faction logo">
        <strong>The Swarm</strong>
    </a>
    <a href="/united-stars" style="text-decoration:none;">
        <img style="display:block;height:120px;width:120px;margin-bottom:8px;" src="https://images.thespacewar.com/factions/white/united-stars.png" alt="United Stars faction logo">
        <strong>United Stars</strong>
    </a>
</div>

<ul>
    <li><a href='/the-terrans'>The Terrans</a> is a balanced deck with cards for many different situations.</li>
    <li><a href='/the-swarm'>The Swarm</a> is a very fast and aggressive alien race that can quickly overwhelm any opponent.</li>
    <li><a href='/united-stars'>United Stars</a> is an alliance of advanced planets that uses powerful technology, including a deadly starship.</li>
</ul>

<p>Below are a few examples of each card type.</p>

<a class="big-button" style="margin:30px auto;" href="/card-list">View the complete card list →</a>

<div class="cards">

<h2>Commanders</h2>
<p>You choose your commander at the beginning of the game. Each commander gives you a unique power or ability.</p>

<?php
$commander_data = commanderData();
foreach (['liana-henders', 'zuuls', 'capt-shera-kinson'] as $commander_slug) {
    $commander = $commander_data[$commander_slug];
    echo "<a href='/commanders/".$commander_slug."'><img src='https://images.thespacewar.com/commander-".$commander['id'].".png'></a>";
}
?>

<h2>Spaceship Cards</h2>
<p>Spaceships can move and attack. Some also have special abilities.</p>
<?=cardImage('the-dark-destroyer')?>
<?=cardImage('drone')?>
<?=cardImage('starship')?>

<h2>Event Cards</h2>
<p>An event happens once when played, then the card is placed in the discard pile.</p>
<?=cardImage('excellent-work')?>
<?=cardImage('sacrifice')?>
<?=cardImage('brilliance')?>

<h2>Duration Cards</h2>
<p>Duration cards stay in play and alter the game while their action cost is paid each turn.</p>
<?=cardImage('full-attack')?>
<?=cardImage('time-warp')?>
<?=cardImage('moment-of-peace')?>

<h2>Missile Cards</h2>
<p>Missiles are powerful and fast, but they are destroyed after attacking.</p>
<?=cardImage('explosive-missile')?>
<?=cardImage('alien-missile')?>
<?=cardImage('cluster-nuke')?>

<h2>Defense Cards</h2>
<p>Defense cards protect your space station and cannot move.</p>
<?=cardImage('energy-shield')?>
<?=cardImage('shield')?>
<?=cardImage('death-ray-cannon')?>

<h2>Station Rule Cards</h2>
<p>These cards help players remember the station rules and are not part of a deck.</p>
<img src="https://images.thespacewar.com/station-card-top.jpg" alt="Draw phase station rule card">
<img src="https://images.thespacewar.com/station-card-middle.jpg" alt="Action phase station rule card">
<img src="https://images.thespacewar.com/station-card-bottom.jpg" alt="Discard phase station rule card">

</div>
