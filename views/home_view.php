<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'includes/head.php'?> 
        <title> <?= ucfirst($page) ?> - The Argonauts</title>
    </head>
<body>
  <?php include_once 'includes/header.php'?> 
    <main class="container">
        <h2>Add an argonaut</h2>
        <form  action="home" method="post">
            <div class="form-outline mb-4">
              <input type="text" id="name" name="name" class="form-control" />
              <label class="form-label" for="name">Name</label>
              <span class="text-danger nameError"><?php if(isset($_GET['message'])){$message;}?></span>
            </div>
            <button data-ripple-color="success" type="button" class="btn btn-light ripple post">submit</button>
        </form>
        <h2>Crew members</h2>
        <section class="member-list">
            <?php foreach($argonauts as $argonaut): ?>
              <?php for($i = 1; $i <= count($argonauts); $i++) {?>
            <p><?= $i.' - '. $argonaut['name'] ?></p>
              <?php } ?>
            <?php endforeach ?>
        </section>
    </main>
        
<?php include_once 'includes/footer.php'?>  
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>