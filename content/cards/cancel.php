<h2>Cards that cost 5 or more</h2>

<?php
foreach (getCardData() as $card_slug => $card) {
    if (!is_numeric($card['cost']) || (int) $card['cost'] < 5) continue;

    echo cardImage($card_slug);
}
?>

<h2>Compare With</h2>

<?=cardImage('luck')?>
<?=cardImage('fate')?>
<?=cardImage('avoid')?>

<h2>Rule Clarifications</h2>

<ul>
    <li>The discarding part of Cancel is part of the cost of playing the card and has to happen even if Cancel is countered by for example Fate.</li>
</ul>

<h2>Changelog During Playtesting</h2>

<ul>
    <li>Nerf in October 2026:<br>Discarding a card is now part of the cost of playing the card.</li>
    <li>Nerf in December 2025:<br>Discarding a card is required to counter a card. Cannot be done if no cards in hand.</li>
    <li>April 2020: Created.</li>
</ul>
