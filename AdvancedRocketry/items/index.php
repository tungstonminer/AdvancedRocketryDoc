<?php
    $title = 'Item index';
    
    $mainContent = '<h2>Advanced Rocketry Items</h2>
<br />
<p>Information about items can be found in the following list:<br /></p>
<ul>
<li><img class="icon" src="../img/oreScanner_icon.png"> <a href="oreScanner.php">Ore Scanner</a></li>
<li><img class="icon" src="../img/items/pressureTank0.png"> <a href="pressureTank.php">Pressure Tank</a></li>
<li><img class="icon" src="../img/satellite_icon.png"> <a href="satellite.php">Satellite</a></li>
<li><img class="icon" src="../img/items/space_chestplate.png"> <a href="modularSpaceSuit.php">Space Suit</a></li>
</ul>';
    
    $infoBarContent = ' Index of Advanced Rocketry Items';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?>