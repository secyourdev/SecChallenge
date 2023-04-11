<?php include "header.php" ?>
<center>

<center>
<h1>Résultat:</h1>
<h2><?php echo rng(); ?><h2>
    <form action="result.php" method="GET">
    	<button type='submit'>Générer un nouveau nombre</button>
    </form>
</center>
<?php include "footer.php" ?>
