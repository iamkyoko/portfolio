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
            WealthPark Business is a workflow management system for property management companies. I joined the company as the first mobile product designer, and developed new features and product improvements for the native mobile app. 
            <br><br>
            When I joined the team, more than two years had passed since the app was released. Yet, there was no design data or design system within the company, so I started defining and organizing design elements as each project progressed.
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
            2段階認証で対応する電話番号の定義や認証コードに利用する外部サービスの挙動など、細かな技術仕様を理解するため、プロダクトマネージャー・エンジニアチームとの話し合いを重ねつつデザインを進めました。
         </p>
			<p>
            I led design for two major projects for login-UX when the company partnered with a well-known Japanese PM company (B) who asked us to implement both 2FA and SSO for their end users (C).
            <br><br>
            To determine our design requirements, I met the product manager and engineers regularly. Together, we learned and defined the necessary technical specs, such as the definition of 2FA phone numbers, and the behavior of external services for authentication codes.
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
            利用ユーザーの大半はデジタルネイティブではない世代という想定のもと、深く考えずにサクサク進むフローを意識しました。
         </p>
			<p>
            While the product manager led the specification of the main functions and scenarios, designers handled feedback on the login area and added specifications for a smoother experience as "UX/UI spec”.
            <br><br>
            Assuming that the majority of users will be non-digital natives, I tried to create a flow that allows users to proceed using only their intuition.
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
               During the 2FA project, I tried to simplify the process by creating a different set of designs for iOS and Android to meet a tight deadline. However, this did not work out as well as I hoped: later in the QA phase, it turned out that the engineers had some misconceptions.
               <br><br>
               To avoid such misconceptions in the SSO project, I made sure to create a design for the entire flow for both iOS and Android. I checked progress with the engineers on a weekly basis and stayed in sync throughout the process.
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
            Although the mobile team was quite small, we had members from around the world. Most importantly, due to the absence of a dedicated designer for a long time, I hosted a weekly meeting called "Fika" to familiarize the team with designers.
            <br><br>
            For every mobile-related project, I utilized these meetings to explain the design, do feasibility checks, and answer questions from engineers. Fika continues to serve as the communication foundation between engineers and designers for the mobile product.
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
