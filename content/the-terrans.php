<?php
$title_tag = 'The Terrans | TheSpaceWar.com';
require(ROOT.'view/head.php');
?>

<img style="margin:0px auto 15px auto;display:block;height:150px;width:150px;" src="https://images.thespacewar.com/factions/white/the-terrans.png" alt="The Terrans faction logo">

<h1>The Terrans</h1>

<div class="cards">

<p>The Terrans is the original deck for The Space War. It is a balanced deck with spaceships, missiles, defenses, and tactical cards for many different situations.</p>

<p><em>The Terrans rely on adaptable technology, powerful warships, and experienced commanders to defend humanity and defeat their enemies.</em></p>

<h2>Commanders</h2>
<p>You choose your commander at the beginning of the game after you have established your start hand. Each commander gives you a unique power or ability.</p>

<?php
$commander_data = commanderData();
foreach ($commander_data as $commander_slug => $commander) {
    if ($commander['deck'] != 1) continue;
    echo "<a href='/commanders/".$commander_slug."'><img src='https://images.thespacewar.com/commander-".$commander['id'].".png'></a>";
}
?>

<h2>Spaceship Cards</h2>
<p>These can move and attack. Sometimes they have special abilities.</p>
<?=cardImage('the-dark-destroyer')?>
<?=cardImage('the-exterminator')?>
<?=cardImage('stormfalcon')?>
<?=cardImage('titan')?>
<?=cardImage('pursuiter')?>
<?=cardImage('trigger-happy-joe')?>
<?=cardImage('thunderbolt')?>
<?=cardImage('the-gladiator')?>
<?=cardImage('the-shade')?>
<?=cardImage('hunter')?>
<?=cardImage('small-repair-ship')?>
<?=cardImage('big-repair-ship')?>
<?=cardImage('battlestar')?>
<?=cardImage('disturbing-sensor')?>
<?=cardImage('deadly-sniper')?>
<?=cardImage('the-liberator')?>

<h2>Event Cards</h2>
<p>Playing an event card means that something happens a single time. The card gets placed directly in the discard pile.</p>
<?=cardImage('excellent-work')?>
<?=cardImage('supernova')?>
<?=cardImage('target-missed')?>
<?=cardImage('missiles-launched')?>
<?=cardImage('perfect-plan')?>
<?=cardImage('grand-opportunity')?>
<?=cardImage('luck')?>
<?=cardImage('fatal-error')?>
<?=cardImage('discovery')?>
<?=cardImage('sabotage')?>

<h2>Duration Cards</h2>
<p>These cards stay on the table and alter the game in some way. The action cost of the card has to be paid each turn for it to remain in play.</p>
<?=cardImage('full-attack')?>
<?=cardImage('good-karma')?>
<?=cardImage('neutralization')?>
<?=cardImage('corrupted-outpost')?>
<?=cardImage('avoid')?>
<?=cardImage('destiny-decided')?>

<h2>Missile Cards</h2>
<p>More powerful and quicker than spaceships, but they are destroyed when hitting their target.</p>
<?=cardImage('explosive-missile')?>
<?=cardImage('fast-missile')?>
<?=cardImage('emp-missile')?>
<?=cardImage('nuclear-missile')?>

<h2>Defense Cards</h2>
<p>These defend your space station and cannot move.</p>
<?=cardImage('energy-shield')?>
<?=cardImage('defense-cannon')?>

<hr>

<p>Complete card list in table format can be found <a href='/card-list'>here</a>.</p>

</div>
