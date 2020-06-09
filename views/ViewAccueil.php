<?php

$this->_t = 'Site DAWI';
foreach ($users as $user): ?>
<h2><?= $user->nom() ?></h2>
<h2><?= $user->prenom() ?></h2>

<?php endforeach; ?>
