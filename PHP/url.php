<?php 
  session_start();
  if(!isset($_SESSION['username'])){
	  header("location: ../index.php");
  }
  else{
    include "Connection.php";
    $new_url = "";
    if(isset($_GET)){
      foreach($_GET as $key=>$val){
        $u = mysqli_real_escape_string($conn, $key);
        $new_url = str_replace('/', '', $u);
      }
        $sql = mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$new_url}'");
        if(mysqli_num_rows($sql) > 0){
          $sql2 = mysqli_query($conn, "UPDATE url SET clicks = clicks + 1 WHERE shorten_url = '{$new_url}'");
          if($sql2){
              $full_url = mysqli_fetch_assoc($sql);
              header("Location:".$full_url['full_url']);
            }
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>URL-Shortener</title>
    <link rel="stylesheet" href="../CSS/urlpage.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  </head>
  <body>
    <div class='navi'>
      <h2 style="padding: 20px;">Hello, <?php echo($_SESSION['username']) ?></h2>
      <a style="padding: 10px; margin-right: 10px; color: #fff; border-radius: 10px; font-size: 20px; font-weight: 600; background-color: #20B2AA;" href="../logout.php">LogOut</a>
    </div>
    <div class="outer">
      <div class="wrapper">
        <form action="#" autocomplete="off">
          <input type="text" spellcheck="false" name="full_url" placeholder="Enter or paste a long url" required>
          <i class="url-icon uil uil-link"></i>
          <button>Shorten</button>
        </form>
        <?php
          $sql2 = mysqli_query($conn, "SELECT * FROM url where user = '{$_SESSION['username']}' ORDER BY id DESC");
          if(mysqli_num_rows($sql2) > 0){;
        ?>
        <div class="statistics">
          <?php
            $sql3 = mysqli_query($conn, "SELECT COUNT(*) FROM url");
            $res = mysqli_fetch_assoc($sql3);

            $sql4 = mysqli_query($conn, "SELECT clicks FROM url");
            $total = 0;
            while($count = mysqli_fetch_assoc($sql4)){
              $total = $count['clicks'] + $total;
            }
          ?>
          <span>Total Links: <span><?php echo end($res) ?></span> & Total Clicks: <span><?php echo $total ?></span></span>
          <a href="delete.php?delete=all">Clear All</a>
        </div>
        <div class="urls-area">
          <div class="title">
            <li>Shorten URL</li>
            <li>Original URL</li>
            <li>Clicks</li>
            <li>Action</li>
          </div>
          <?php
            while($row = mysqli_fetch_assoc($sql2)){
          ?>
          <div class="data">
            <li>
              <a href="http://localhost/URL-Shortner/<?php echo $row['shorten_url'] ?>">
              <?php
                if(strlen("localhost/URL-Shortner/".$row['shorten_url']) > 50){
                  echo "localhost/URL-Shortner/".substr($row['shorten_url'], 0, 50) . '...';
                }else{
                  echo "localhost/URL-Shortner/".$row['shorten_url'];
                }
              ?>
              </a>
            </li> 
            <li>
              <?php
                if(strlen($row['full_url']) > 60){
                  echo substr($row['full_url'], 0, 60) . '...';
                }else{
                  echo $row['full_url'];
                }
              ?>
            </li> 
            <li><?php echo $row['clicks'] ?></li>
            <li><a href="delete.php?id=<?php echo $row['shorten_url'] ?>">Delete</a></li>
          </div>
          <?php
                }
              ?>
          </div>
          <?php
            }
          ?>
      </div>
    </div>

    <div class="blur-effect"></div>
    <div class="popup-box">
      <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved it.</div>
      <form action="#" autocomplete="off">
        <label>Edit your shorten url</label>
        <input type="text" class="shorten-url" spellcheck="false" required>
        <i class="copy-icon uil uil-copy-alt"></i>
        <button>Save</button>
      </form>
    </div>

    <script src="urljs.js"></script>
  </body>
</html>

