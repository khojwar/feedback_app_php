<?php include 'inc/header.php' ?>

<?php
  $sql = "SELECT * FROM feedback";
  $result = mysqli_query($conn, $sql);
  $feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // print_r($feedbacks);
?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <h2>Feedback</h2>

    <?php if(empty($feedbacks)): ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedbacks as $item): ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $item['body']; ?>
          <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?> on <?php echo date_format(date_create($item['date']), 'g:ia \o\n l jS F Y'); ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    
  </div>
</main>

<?php include 'inc/footer.php' ?>

