<h2>Excellent Usage of this Card</h2>

<ul>
    <li>You have board control and you want to slow down the opponent.</li>
    <li>Preventing the opponent from playing 0 cost cards in your turn.</li>
    <li>Gaining tempo, for example by playing it the first turn and then not keeping it for your next turn.</li>
    <li>Remember to put it in play as the last card in your action phase.</li>
</ul>

<h2>Cards that Cost 0</h2>

<?php
foreach (getCardData() as $card_slug => $card) {
    if ((string) $card['cost'] !== '0') continue;

    echo cardImage($card_slug);
}
?>

<h2>Compare With</h2>

<?=cardImage('destiny-decided')?>

<h2>Changelog During Playtesting</h2>

<ul>
    <li>Nerf in September 2026:<br>Instead of costing 3 additional actions to play, cards now cost 1 additional action for each station card in the player’s second row.</li>
    <li>September 2019: Created.</li>
</ul>
