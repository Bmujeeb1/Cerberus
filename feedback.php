<?php include'inc/header.php'?>

  <?php 

  $query =  "SELECT * FROM feedback" ;
  $result = mysqli_query($conn, $query);
  $codedDb = mysqli_fetch_all($result, MYSQLI_ASSOC);


  // $codedDb = [
  //   [
  //     'id' => '1',
  //     'name' => 'James',
  //     'email' => 'Jamei@outlook.com',
  //     'body' => 'I love to Code ',
  //   ],
  //   [
  //     'id' => '2',
  //     'name' => 'Jane',
  //     'email' => 'Jane@outlook.com',
  //     'body' => 'I love to Code Always ',
  //   ],
  //   [
  //     'id' => '3',
  //     'name' => 'Chris',
  //     'email' => 'Chris@gmail.com',
  //     'body' => 'You Are Awesome! ',
  //   ],
  // ];


  ?>



    <h2>Feedback</h2>
    <?php if(empty($codedDb)): ?>
      <p class="lead mt3">There is no Feedback</p>
    <?php endif; ?>


    <?php foreach($codedDb as $item): ?>
    <div class="card my-3 w-75 ">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
       </div>
     </div>
   </div>
   <?php endforeach; ?>

<?php include'inc/footer.php'; ?>

