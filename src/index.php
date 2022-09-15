<?php include (__DIR__ . "/inc/header.php"); ?>

<div class="index">

	<figure class="dots">
		<div class="d-a"></div>
		<div class="d-b"></div>
		<div class="d-c"></div>
		<div class="d-d"></div>
	</figure>

   <section class="home">

      <ul class="title">
         <li class="title--title">P<span>o</span><span>r</span><span>t</span>folio</li>
         <li class="title--slash"><span></span></li>
         <li class="title--year"><span>&copy;</span><span>'<?php echo date('y'); ?></span></li></ul>

      <div class="bio grid">
         <p class="middle-2 jp">
            お菓子とウナギに目がないweb・UI/UXデザイナー。6年目。Webスクールに通うため大学を中退後、渋谷の制作会社にwebデザイナーとして4年間勤務したのち、現在の会社に入社。そこから半年も経たないうちにうっかりUI/UXデザイナーとしてのキャリアをスタート。
            <br>
            チームプレイヤーとして奔走しつつ、モバイル・ウェブアプリケーションなどソフトウェア開発のデザインを手がける。猫派。
         </p>
         <p class="last-2">
            I'm a chocolate and unagi-obsessed Web and UX/UI Designer with over 6 years of experience. I left college to join a web design school and landed my first job at a design studio in Shibuya, where I worked for 4 years. In 2020, I switched to my current position, at first in web design. Within 6 months, I began working as a UI/UX designer.
            <br>
            I love working with teams from different cultures and backgrounds. And cats. I love cats.
         </p>
         <p class="scroll">
         <span class="arrow">
            <?php include (__DIR__ . "/inc/arrow.html"); ?></span>
            Scroll down
         </p>
      </div>
      
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
