<?php

    use PatternPractice\Behavioral\Command\Explosion;
    use PatternPractice\Behavioral\Command\Healing;
    use PatternPractice\Behavioral\Command\Wizard;

    require '../../index.php';

    $wizard = new Wizard();

    $wizard->castSpell(new Explosion());
    $wizard->castSpell(new Healing());