<?php
    date_default_timezone_set("Asia/Yerevan");

?>

<footer class="py-3 my-4 myFoot">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 myUl">
      <li class="nav-item"><a href="https://www.facebook.com/qristine.matevosyan.12"target = "blank" style =  "text-decoration:none" class="nav-link px-2 text-body-secondary"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Գլխավոր</a></li>
      <li class="nav-item"><a href ="mermasin.php" class="nav-link px-2 text-body-secondary">Մեր Մասին</a></li>
      <li class="nav-item"><a href="pag2.php" class="nav-link px-2 text-body-secondary cake">Տորթեր</a>
        <ul class = outcake>
            <li class = cake><a href="bentoner.php" style =  "text-decoration:none">Բենտոներ</a>
        </ul>
    </li>
      <li class="nav-item"><a href="jelener.php" class="nav-link px-2 text-body-secondary">Ժելեներ</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Թխվածքներ</a></li>
      <li class="nav-item"><a href="https://www.instagram.com/qristinematevosyan7954"target = "blank" style =  "text-decoration:none" class="nav-link px-2 text-body-secondary"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <!-- <li class="nav-item"><img src="img/mag.jpg.png" style = "width:80px;height:50px;border-radius:15px"></li> -->

    </ul>
    <div class="wrapper">
    <div class="display">
        <div id="time" style =color:white><?php echo "Հայաստանի ".date("H:i:s")." Ժամանակով"    ?>
            <script>
                setInterval(() => {
                const ti = document.querySelector(".display #time");
                let date = new Date();
                let hours = date.getHours();
                let minutes = date.getMinutes();
                let seconds = date.getSeconds();
                  ti.innerHTML = "Հայաստանի "  +   hours + ":" + minutes +":"+seconds + " Ժամանակով";
                },1000);
            </script>
        </div>
    </div>
    <span></span>
    <span></span>
</div>
    <p class="text-center text-body-secondary" style = "color:white !important">© <?php echo  Date("Y")?> Magazin/\Sweet, Inc</p>
    <?php
     $date = Date("d/m/Y");
     echo "<h1 style = 'color:white;text-align:center;font-size:20px'>Այսօրվա $date Ամսաթիվը</h1>"
    ?>
  </footer>
</body>
  <script src="Js/js.js"></script>
  <script src="Js/js2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>