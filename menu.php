<?php

echo '<nav class="custom1" role="navigation">
    <div class="nav-wrapper container">
        <a href="#" data-activates="nav-mobile" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="index.php" class="brand-logo">FERMI</a>

        <ul class="right hide-on-med-and-down">
            <li>
                <a href="about.php">'. $lang['MENU_ABOUT'] .'</a>
            </li>
            <li>
                <a href="database.php" >'. $lang['MENU_SEARCH'] .'</a>
            </li>
            <li>
                <a href="promotion.php" >'. $lang['MENU_PROMOTION'] .'</a>
            </li>
            <li>
                <a href="http://www.ai-sf.it" > AISF </a>
            </li>
        </ul>
    </div>
</nav>';
?>
