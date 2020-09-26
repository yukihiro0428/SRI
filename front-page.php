<?php get_header(); ?>
	<main class="main">
		<div class="swiper-container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
					<div class="swiper-slide fir">
					</div>
					<div class="swiper-slide sec">
					</div>
					<div class="swiper-slide thir">
					</div>
					<div class="swiper-slide four">
					</div>
			</div>
		</div>
		<div class="main-texts">
			<h1 class="main-h1">
				「BUNTAN」契約書管理と「CLOUDSIGN」の連携で<br />紙と電子を一元管理
			</h1>
			<div class="main-logo">
				<p class="main-logo-left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/main-buntan.png" alt="BUNTAN" />
				</p>
				<p class="main-logo-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/main-cross.png" alt="cross" />
				</p>
				<p class="main-logo-right">
					<img src="<?php echo get_template_directory_uri(); ?>/img/main-cloud_sign.png" alt="cloud sign" />
				</p>
			</div>

			<article class="art">
				<h2 class="art-title">
					<span class="art-title-span">NEWS</span>
				</h2>
				<?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
				<ul class="art-content">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li class="art-content-item">
						<a href="<?php the_permalink(); ?>">
							<span class="date"><?php the_time( 'Y.m.d' ); ?></span>
							<span><?php echo wp_trim_words( get_the_title(), 30, '...' ); ?></span>

						</a>
					</li>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
				<?php endif; ?>
			</article>
		</div>
	</main>

	<section class="sec01">
		<h2 class="sec01-title">オフィスにとらわれない働き方を</h2>
		<p class="sec01-small">OFFICE SPACE TRANSFORMATION</p>

		<p class="sec01-text">
			コロナ感染拡大の影響で、オフィスのあり方が変わろうとしています。
		</p>
		<p class="sec01-text">
			テレワーク・交代出勤が推奨され、オフィスでの勤務が必須ではない状況となりました。
		</p>
		<p class="sec01-text">
			オフィスに出社せざるをえない場合においても、オフィス内での“密”を避けるための
		</p>
		<p class="sec01-text">オフィススペース対策が必要となります。</p>
		<p class="sec01-text">
			テレワークを実践しオフィスを閉鎖または縮小するにしても、感染リスクを抑える対策を講じるにしても、
		</p>
		<p class="sec01-text">
			社内にある文書の適切な管理方法を見直さなければなりません。
		</p>
	</section>

	<section class="sec02">
		<h2 class="sec02-title">私たちにできること</h2>
		<ul class="sec02-items">
			<li class="sec02-item">
				<p class="sec02-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec02-seminar.png" alt="seminar" />
				</p>
				<h3 class="sec02-item-lead">セミナー情報</h3>
			</li>
			<li class="sec02-item">
				<p class="sec02-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec02-telework.png" alt="teleword" />
				</p>
				<h3 class="sec02-item-lead">コロナ<br />テレワーク対策</h3>
			</li>
			<li class="sec02-item">
				<p class="sec02-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec02-contract.png" alt="contract" />
				</p>
				<h3 class="sec02-item-lead">契約管理</h3>
			</li>
			<li class="sec02-item">
				<p class="sec02-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec02-transfer.png" alt="transfer" />
				</p>
				<h3 class="sec02-item-lead">移転<br />レイアウト変更</h3>
			</li>
			<li class="sec02-item">
				<p class="sec02-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec02-credit.png" alt="credit" />
				</p>
				<h3 class="sec02-item-lead">信用金庫様向け</h3>
			</li>
		</ul>
	</section>

	<div class="sec03">
		<div class="sec03-logos">
			<div class="sec03-logos-1st">
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo1.png" alt="logo1" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo2.png" alt="logo2" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo3.png" alt="logo3" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo4.png" alt="logo4" /></p>
			</div>
			<div class="sec03-logos-2nd">
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo5.png" alt="logo5" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo6.png" alt="logo6" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo7.png" alt="logo7" /></p>
			</div>
			<div class="sec03-logos-3rd">
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo8.png" alt="logo8" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo9.png" alt="logo9" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo10.png" alt="logo10" /></p>
				<p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/sec03-logo11.png" alt="logo11" /></p>
			</div>
		</div>
	</div>

	<section class="sec04">
		<h2 class="sec04-title">導入事例</h2>

		<p class="sec04-summary">
			多数の企業様からお喜びの声をいただいております
		</p>
		<!-- カスタム投稿の出力　 -->
		<?php
			$args = array(
			'post_type' => 'case_study',
			'posts_per_page' => -1,
			'order' => 'DESC',
		);?>
		<?php $my_query = new WP_Query( $args ); ?>
		<div class="swiper">
			<div class="swiper-container">
				<ul class="swiper-wrapper">
				<!-- //ループ開始 -->
					<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>">
							<h2 class="title"><?php the_title(); ?></h2>
							<h3 class="emphasis"><?php echo esc_html(get_post_type_object(get_post_type())->name); ?></h3>
							<?php the_content(); ?>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		<?php wp_reset_postdata(); ?>
		<a class="sec04-btn" href="">さらに事例を見る</a>
	</section>

	<section class="sec05">
		<div class="sec05-about">
			<h2 class="sec05-about-title">ウェビナー・セミナーのご案内</h2>
			<p class="sec05-about-summary">Seminar Information</p>
		</div>
	</section>

	<section class="sec06">
		<h2 class="sec06-title">ソリューション</h2>
		<p class="sec06-summary">
			私たちはお客様の“最適な”文書管理をご提案します
		</p>
		<ul class="sec06-itemas">
			<li class="sec06-item">
				<a class="sec06-item-link" href="">
					<p class="img">
						<img
							src="<?php echo get_template_directory_uri(); ?>/img/sec06-item-telework.jpg"
							alt="solution_image1"
						/>
					</p>
					<p class="title">テレワーク支援ソリューション</p>
				</a>
			</li>
			<li class="sec06-item">
				<a class="sec06-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec06-item-contract.jpg" alt="solution_image2" />
					</p>
					<p class="title">契約書管理ソリューション</p>
				</a>
			</li>
			<li class="sec06-item">
				<a class="sec06-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec06-item-shinkin_bank.jpg" alt="solution_image3" />
					</p>
					<p class="title">信用金庫様向けソリューション</p>
				</a>
			</li>
			<li class="sec06-item">
				<a class="sec06-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec06-item-room.jpg" alt="solution_image4" />
					</p>
					<p class="title">オフィス移転・レイアウト変更ソリューション</p>
				</a>
			</li>
			<li class="sec06-item">
				<a class="sec06-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec06-item-office.jpg" alt="solution_image5" />
					</p>
					<p class="title">事務代行ソリューション</p>
				</a>
			</li>
			<li class="sec06-item">
				<a class="sec06-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec06-item-system.jpg" alt="solution_image6" />
					</p>
					<p class="title">文書管理システム開発</p>
				</a>
			</li>
		</ul>
	</section>

	<section class="sec07">
		<h2 class="sec07-title">文書管理サービス内容</h2>
		<p class="sec07-summary">
			私たちはお客様の文書管理チームを結成し<br />期待を超え続けることを約束します
		</p>

		<ul class="sec07-items">
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img1.jpg" alt="service_img1" />
					</p>
					<h3 class="title">文書保管 ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon1.png" alt="icon1" /></p>
				</a>
			</li>
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img2.jpg" alt="service_img2" />
					</p>
					<h3 class="title">機密抹消・廃棄 ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon2.png" alt="icon2" /></p>
				</a>
			</li>
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img3.jpg" alt="service_img3" />
					</p>
					<h3 class="title">文書電子化 ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon3.png" alt="icon3" /></p>
				</a>
			</li>
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img4.jpg" alt="service_img4" />
					</p>
					<h3 class="title font">ファイリング・入力 ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon4.png" alt="icon4" /></p>
				</a>
			</li>
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img5.jpg" alt="service_img5" />
					</p>
					<h3 class="title">電送 ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon5.png" alt="icon5" /></p>
				</a>
			</li>
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img6.jpg" alt="service_img6" />
					</p>
					<h3 class="title">コンサルティング ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon6.png" alt="icon6" /></p>
				</a>
			</li>
			<li class="sec07-item">
				<a class="sec07-item-link" href="">
					<p class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_img7.jpg" alt="service_img7" />
					</p>
					<h3 class="title">BUNTAN ≫</h3>
					<p class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/sec07-service_icon7.png" alt="icon7" /></p>
				</a>
			</li>
		</ul>
	</section>
<?php get_footer(); ?>
