    <h2>Second Page</h2>
    <p>
      This is the second page.
    </p>
    <h3>PHP variables</h3>

    <?php $name = 'Garfield';
          $age = 5;
          echo "Name of the cat is <strong>" .$name."</strong> and it is <strong>" .$age. "</strong> years old.";
     ?>

     <h3>PHP array</h3>
     <?php
     $fnames = array('Jim', 'Lisa', 'Bob')
      ?>

      Names from the array : <br>
      <?php print_r($fnames); ?> <br>

      Second name is:
      <?php echo $fnames[1] ?> <br>

      <h3>PHP Associative array</h3>
      <?php
      $a_names=array(
        array("fname"=>"Jim", "lname"=>"Smith"),
        array("fname"=>"Lisa", "lname"=>"Simpson"),
        array("fname"=>"Bob", "lname"=>"Jones")
      );
       ?>
       All persons:
       <ul>
       <?php print_r($a_names); ?> <br> <br>

       Lastnames:
       <?php foreach($a_names as $row) {
         echo '<li>'.$row['lname'].'</li>';
       }
        ?>
      </ul>
