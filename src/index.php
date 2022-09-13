<?php include (__DIR__ . "/inc/header.php"); ?>

<div class="home">
	<figure class="dots">
		<div class="d-a"></div>
		<div class="d-b"></div>
		<div class="d-c"></div>
		<div class="d-d"></div>
	</figure>

   <section class="grid">
      <ul class="title">
         <li class="title--title">P<span>o</span><span>r</span><span>t</span>folio</li>
         <li class="title--slash"><span></span></li>
         <li class="title--year"><span>&copy;</span><span>'<?php echo date('y'); ?></span></li></ul>
      <div class="bio">
         <p>
            I'm a web and UI/UX designer with 6+ years experience who is seeking to expand my expertise. I'm curious, passionate, and obsessed with chocolates.
         </p>
         <p class="jp">
            お菓子に目がない東京在住のweb・UI/UXデザイナー。6年目。お仕事探し中。
         </p>
      </div>
      <p class="scroll">
         <span class="arrow">
            <?php include (__DIR__ . "/inc/arrow.html"); ?></span>
         Scroll down</p>
   </section>

   <section class="list" id="list">
      <ul class="list--head">
         <li>SELECTED WORKS <span></span> 2015 / <?php echo date('Y'); ?></li></ul>
      <ul class="list--list">
         <li><a href="work/facyapp.php">Facy App
            <time>'21</time></a></li>
         <li><a href="work/facyadmin.php">Facy Shop Admin
            <time>'21</time></a></li>
         <li><a href="work/facymedia.php">Facy Media
            <time>'20</time></a></li>
         <li><a href="work/nord.php">Cucina Nord Ibaraki
            <time>'17</time></a></li>
         <li><a href="work/ined.php">Inéd
            <time>'17</time></a></li>
         <li><a href="work/ayano.php">Ayano Mashiro
            <time>'17</time></a></li>
         <li><a href="work/fos.php">Flandre Online Store
            <time>'15—'18</time></a></li>
         <li><a href="work/transwork.php">Trans Work
            <time>'16—'18</time></a></li>
         <li><a href="work/lanvin.php">Lanvin en Bleu
            <time>'18—'19</time></a></li>
         <li><a href="work/maquia.php">Maquia Online
            <time>'17—'18</time></a></li>
      </ul>
   </section>

</div>

<?php include (__DIR__ . "/inc/footer.php");
