<h2>Spaceships that cost 5 or more</h2>

<?php
foreach (getCardData() as $card_slug => $card) {
    if ($card['type'] !== 'Spaceship') continue;
    if (!is_numeric($card['cost']) || (int) $card['cost'] < 5) continue;

    echo cardImage($card_slug);
}
?>

<h2>Compare With</h2>

<?=cardImage('deja-vu')?>
<?=cardImage('perfect-plan')?>

<h2>Cards Good With for Discarding</h2>

<?=cardImage('acid-projectile')?>
<?=cardImage('perfect-plan')?>
<?=cardImage('brilliance')?>
<?=cardImage('discovery')?>
<?=cardImage('commander-dr-stein')?>


<h2>Changelog During Playtesting</h2>

<ul>
    <li>Buff in October 2026:<br>Card moved to United Stars deck and is being replaced with <a href="/cards/deja-vu">Déjà Vu</a>. Cost decreased from 4 to 2. Old text: "Return any number of spaceship cards with total combined action cost of 6 or less from your discard pile to play." was replaced with new text: "Put any spaceship from your discard pile into play."</li>
    <li>Buff in January 2026:<br>Cost increased from 2 to 4. Now the spaceships are put into play and not back into the hand. Combined action cost increased from 4 to 6.</li>
    <li>Buff in December 2025:<br>Cost reduced from 3 to 2. Earlier the card had this text: "Bring back 1 or 2 cards from your discard pile to your hand. The combined action cost of these cards cannot be more than 6.". Now only spaceships can be brought back, up to 4.</li>
    <li>September 2019: Created.</li>
</ul>
