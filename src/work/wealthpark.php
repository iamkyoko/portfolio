<?php include (__DIR__ . "/../inc/header.php"); ?>

<div class="page">

	<div class="project-info max-width">

		<div class="project-intro">
			<p class="project-dot jp">Wealthpark Business</p>
			<div class="project-role-year">
				<p>Product Designer</p>
				<time>2023 ― 2024</time>
			</div>
		</div>

      <h1 class="project-title">Mobile App (and Team) Development.</h1>

		<div class="project-description">
			<p class="jp first-2">
            WealthPark Businessは不動産管理会社向け業務管理システムです。サービスの一部であるオーナー向けプロダクトのモバイル専任の最初のデザイナーとして入社し、自社ネイティブアプリの新規機能の開発・プロダクトの改善を行いました。
            <br><br>
            自分の入社時にはアプリリリースから少なくとも2年以上経過していましたが、今までのデザインデータおよびデザインシステムなどは社内に残っていなかったので各プロジェクトの進行に合わせデザインコンポーネントの定義・整理をしていきました。
			</p>
			<p class="middle-2">
            I was tasked with the design of our FACY app when a previous designer left the company. The intention behind the app was to create a better offline and online shopping experience centered around the customer. We focused on clothing and cosmetics in order to help improve e-commerce options in those markets. 
            <br><br>
            I worked closely with the product manager and was involved in the whole software development process: from building a design system, to organizing components, and defining specifications for new features.
         </p>
		</div>

	</div>

   <figure>
      <img src="../image/wp_mockup.png">
   </figure>

   <!-- Section -->

   <section class="para max-width">
      <p class="project-dot jp">ログイン体験の開発・改善</p>
      <h2 class="section-title">
         2 Factor Authentication / Single Sign On
      </h2>
      <div class="project-description">
			<p class="jp">
            日本国内でも著名な大企業 (B) との契約締結に際し、彼らのエンドユーザー (C) にサービスを提供するための条件として最初に2段階認証、次にシングルサインオンの機能を導入しました。
            <br><br>
            2段階認証で対応する電話番号の定義や認証コードに利用する外部サービスの挙動・SSOのための顧客側アプリとの連携など、細かな技術仕様を理解するため、プロダクトマネージャー・エンジニアチームとの話し合いを重ねつつデザインを進めました。
         </p>
			<p>
            One of the first things I did as a UI designer on the app project was to ensure there would be a “design check” phase at the end of the engineering flow. I managed to convince the engineers to add this step by telling them, “Not everything looks as beautiful on an actual device as it does in a design tool. Think of how amazing you look in the mirror, then look at your passport picture. It's the same person, but a very different look.” 
            <br><br>
            I always made sure to share research and case studies with my team before engaging in a conversation on how to implement new features like favorite items, related items and search features. Doing so really helped us communicate on the same level with objective data on which to base our decisions, instead of just arguing over our subjective opinions. 
			</p>
		</div>
   </section>

   <figure>
      <img src="../image/wp_2fa.png">
      <figcaption>
         <p>
            ID/Password（知識要素）と認証コードの受け取り（所持要素）を合わせた2段階認証。
         </p>
      </figcaption>
   </figure>

   <section class="para max-width">
      <p class="project-dot jp">デザイナー主導での開発・改善</p>
      <h2 class="section-title">
         Designer-led Specifications.
      </h2>
      <div class="project-description">
			<p class="jp">
            主な機能・シナリオに対する仕様をプロダクトマネージャーが主導する傍ら、以前からログイン回りに対して寄せられていたフィードバックへの対応と、よりスムーズな体験のための仕様を「UX/UIスペック」として追加しデザイナー主導で体験の向上・改善を目指しました。
            <br><br>
            利用ユーザーの大半はデジタルネイティブではない世代という想定のもと、認証コードの体験はタップする回数を減らし何もしなくてもサクサク進むフローを意識しました。
         </p>
			<p>
            One of the first things I did as a UI designer on the app project was to ensure there would be a “design check” phase at the end of the engineering flow. I managed to convince the engineers to add this step by telling them, “Not everything looks as beautiful on an actual device as it does in a design tool. Think of how amazing you look in the mirror, then look at your passport picture. It's the same person, but a very different look.” 
            <br><br>
            I always made sure to share research and case studies with my team before engaging in a conversation on how to implement new features like favorite items, related items and search features. Doing so really helped us communicate on the same level with objective data on which to base our decisions, instead of just arguing over our subjective opinions. 
			</p>
		</div>
   </section>

   <figure>
      <img src="../image/wp_2fa_spec_phonenumber.png">
   </figure>

   <figure>
      <img src="../image/wp_2fa_spec_codeinput.png">
   </figure>

   <!-- Section -->

      <section class="para max-width">
         <p class="project-dot jp">デザインハンドオーバー</p>
         <h2 class="section-title">
            Design Handover
         </h2>
         <div class="project-description">
            <p class="jp">
               2FAのデザイン作業中、タイトなデッドラインに間に合わせるためiOSの画面でフローを作成、Androidの画面は一覧のみを提供することで省エネを図ったつもりが、QAの段階でエンジニアの仕様の誤認識が複数発覚するなど、うまくいきませんでした。
               <br><br>
               SSOプロジェクトではその反省を生かし、iOS・Androidともにフローに即したデザインを制作。週次でエンジニアに進捗を確認し、地道に軌道修正を実施しました。
            </p>
            <p>
               As soon as I started working on the app's design, I noticed inconsistencies in color definition and font, as well as design differences between iOS and Android. To fix this long-overlooked problem, in addition to taking over the iOS design creation process, I decided to build from scratch a new Android design.
               <br><br>
               I organized and updated design components for each platform, as well as for common components shared between platforms. Then, I went through the entire build and little by little, in constant communication with the developer team, I filled the gap between our target design and the build.
            </p>
         </div>
      </section>

      <figure>
         <img src="../image/wp_sso_spec_breakdown.png">
         <figcaption>
            <p>
               ページ内でUIの変更・追加があった場合には英語ラベルのデザインを用意し、内容を文章・口頭両方での説明の機会を設けました。
            </p>
         </figcaption>
      </figure>


   <!-- Section -->

   <section class="para max-width">
      <p class="project-dot jp">チームにするための努力</p>
      <h2 class="section-title">
      Being the first and only designer ever
      </h2>
      <div class="project-description">
         <p class="jp">
            モバイルエンジニアチームの規模は小さいものの、多国籍であることや、何よりも長く専任のデザイナーが不在だったことから、デザイナーとコミュニケーションをとることに慣れてもらうために「Fika」と称したミーティングを週次で開催。
            <br><br>
            モバイル関連のプロジェクトが立ち上がるたびに、デザインの説明やFeasibility Check、エンジニアからの質問に回答するなど、モバイルプロダクトにおけるエンジニア・デザイナー間のコミュニケーションの基盤となるミーティングとして運用を続けていました。
			</p>
			<p>
            When it came time to improve usability for our app's top page, there was a gap between how users shop for fashion and our initial concept of using GPS tracking information to “Find a shop within 3km of where you are!” Not to mention most people don't like sharing their location. The concept wasn't realistic.
            <br><br>
            Instead of trying to get personal information from users, we switched to letting users pick the area where they want to shop. Since some areas had lots of available shops and others didn't, we designed a curation tool to manage content and even out the gaps. I was in charge of designing all the widgets.
			</p>
		</div>
   </section>

   <figure>
      <img src="../image/wp_documents.png">
      <figcaption>
         <p>
            エンジニアに向けたデザインについてのオンボーディングミーティングの開催・ドキュメントの作成など、より迅速なチームワークの構築・醸成を目指しました。
         </p>
      </figcaption>
   </figure>

</div>

<?php include (__DIR__ . "/../inc/footer.php");
