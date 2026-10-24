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
<?php
$cards_array = getCardData();
foreach ($cards_array as $key => $value) {
    if ( $value['deck_id'] != 1 || $value['type'] != 'Spaceship' ) continue;
    echo "<a href='/cards/".nameToSlug($value['name'])."'><img src='https://images.thespacewar.com/card-".$value['id'].".jpg'></a>";
} ?>

<h2>Event Cards</h2>
<p>Playing an event card means that something happens a single time. The card gets placed directly in the discard pile.</p>
<?php
$cards_array = getCardData();
foreach ($cards_array as $key => $value) {
    if ( $value['deck_id'] != 1 || $value['type'] != 'Event' ) continue;
    echo "<a href='/cards/".nameToSlug($value['name'])."'><img src='https://images.thespacewar.com/card-".$value['id'].".jpg'></a>";
} ?>

<h2>Duration Cards</h2>
<p>These cards stay on the table and alter the game in some way. The action cost of the card has to be paid each turn for it to remain in play.</p>
<?php
$cards_array = getCardData();
foreach ($cards_array as $key => $value) {
    if ( $value['deck_id'] != 1 || $value['type'] != 'Duration' ) continue;
    echo "<a href='/cards/".nameToSlug($value['name'])."'><img src='https://images.thespacewar.com/card-".$value['id'].".jpg'></a>";
} ?>

<h2>Missile Cards</h2>
<p>More powerful and quicker than spaceships, but they are destroyed when hitting their target.</p>
<?php
$cards_array = getCardData();
foreach ($cards_array as $key => $value) {
    if ( $value['deck_id'] != 1 || $value['type'] != 'Missile' ) continue;
    echo "<a href='/cards/".nameToSlug($value['name'])."'><img src='https://images.thespacewar.com/card-".$value['id'].".jpg'></a>";
} ?>

<h2>Defense Cards</h2>
<p>These defend your space station and cannot move.</p>
<?php
$cards_array = getCardData();
foreach ($cards_array as $key => $value) {
    if ( $value['deck_id'] != 1 || $value['type'] != 'Defense' ) continue;
    echo "<a href='/cards/".nameToSlug($value['name'])."'><img src='https://images.thespacewar.com/card-".$value['id'].".jpg'></a>";
} ?>

<hr>

<p>Complete card list in table format can be found <a href='/card-list'>here</a>.</p>

</div>
