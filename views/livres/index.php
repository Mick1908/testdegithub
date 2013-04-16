<?php foreach ($live as $t): ?>
<h1><a href="<?php echo WEBROOT; ?>livres/view/<?php echo $t['id']; ?>"><?php echo $t['titre']; ?></a></h1>
<?php endforeach; ?>