<h2>Cards that cost 0 or 1</h2>

<?php
foreach (getCardData() as $card_slug => $card) {
    if (!in_array((string) $card['cost'], ['0', '1'], true)) continue;

    echo cardImage($card_slug);
}
?>

<h2>Compare With</h2>

<?=cardImage('luck')?>

<h2>Changelog During Playtesting</h2>

<ul>
    <li>Nerf in August 2026:<br>Added that opponent may draw and discard a card.</li>
    <li>Nerf in December 2025:<br>Can no longer disable attack of missile.</li>
    <li>Clarification in March 2023:<br>Text of the card was updated and it is clarifed that the missile can move but only the attack is disabled, same as the card <a href="/cards/disturbing-signals">Disturbing Signals</a>.</li>
    <li>Nerf in October 2021:<br>Previous text was "Counter a card that cost 0 or 1. You may draw a card and then discard a card. [ OR ] Draw 1 card."</li>
    <li>March 2021:<br>Card created and entered playtesting.</li>
</ul>
