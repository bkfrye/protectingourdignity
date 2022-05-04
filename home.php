<?php
get_header();

$sticky = get_option( 'sticky_posts' );
	$args = array(
			'posts_per_page' => 1,
			'post__in' => $sticky,
			'ignore_sticky_posts' => 1
	);
	$query = new WP_Query( $args );

	if ( isset( $sticky[0] ) ) :
?>

<div id="news">
	<?php if (is_paged()) : ''; else :?>
	<section class="news-hero">
		<div class="news-hero-container" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>)">
			<div class="news-hero-image" ></div>
			<div class="news-hero-content">
				<h1>News</h1>
				<?php
					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
						echo '<h3>' . get_the_title() . '</h3>';

						the_excerpt();

						echo '<div class="news-btn"><a href="' . get_the_permalink() . '">Learn More <span><svg width="18.545" height="18.545" viewBox="0 0 18.545 18.545"><path d="M14.668,10.233a.864.864,0,0,1,1.217,0L20.138,14.5a.859.859,0,0,1,.027,1.186l-4.19,4.2a.859.859,0,1,1-1.217-1.213l3.562-3.615-3.651-3.615A.85.85,0,0,1,14.668,10.233Z" transform="translate(-7.415 -5.295)"/><path d="M3.375,12.648a9.273,9.273,0,1,0,9.273-9.273A9.271,9.271,0,0,0,3.375,12.648Zm1.427,0A7.843,7.843,0,0,1,18.193,7.1,7.843,7.843,0,1,1,7.1,18.193,7.779,7.779,0,0,1,4.8,12.648Z" transform="translate(-3.375 -3.375)"/></svg></span></a></div>';
					endwhile;
					endif;
					wp_reset_postdata();
				?>
				<!-- end add in loop -->
			</div>
		</div>
	</section>
	<?php endif; ?>
<?php endif; ?>

<div id="main-content" class="news">
	<div class="left-leaf">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104.447 273.422"><path d="M-3011.521 13003.284c.465-.308.936-.605 1.412-.89l-.013.007c.907-.541 1.828-1.059 2.768-1.523s1.89-.9 2.853-1.3 1.933-.75 2.916-1.062c.491-.157.983-.3 1.477-.438.246-.065.495-.135.74-.19l.373-.092.19-.039.229-.049q.373-.073.747-.138l.026.459.013.229.007.2.013.494c.01.331.01.662.013.993 0 .658-.02 1.32-.046 1.985a55.3 55.3 0 0 1-.3 3.983 47.453 47.453 0 0 1-1.572 7.953 31.957 31.957 0 0 1-3.3 7.593c-.36.6-.76 1.177-1.169 1.743l-.629.832c-.1.141-.213.271-.324.406l-.331.4-.331.4-.347.393-.347.391-.174.193-.18.189-.718.754-.75.724a34.575 34.575 0 0 1-3.246 2.716Zm40.036-6.065a8.824 8.824 0 0 0-.652-.616 29 29 0 0 1-6.565-11.245 30.027 30.027 0 0 1-1.392-8.727l.013-1.114v-.278l.016-.278.03-.557.03-.557c.013-.184.033-.37.049-.554l.049-.557c.02-.184.033-.367.062-.551l.144-1.1c.056-.367.121-.73.18-1.1l.046-.272c.016-.091.039-.183.056-.274l.112-.544.115-.541.128-.537.118-.475.056-.236.065-.232.262-.94c.193-.615.38-1.234.6-1.841.429-1.215.907-2.41 1.451-3.567l-.007.01c.452-.953.927-1.9 1.445-2.811s1.062-1.8 1.638-2.669 1.183-1.7 1.821-2.513c.321-.406.645-.8.979-1.189.17-.193.337-.387.508-.573l.262-.285.131-.138.164-.17c.18-.18.36-.357.54-.53l.279.363.141.184.118.164.288.4c.19.269.377.541.563.815q.55.822 1.074 1.671a55.678 55.678 0 0 1 1.975 3.476 47.084 47.084 0 0 1 3.141 7.472 31.794 31.794 0 0 1 1.513 8.138c.039.7.03 1.4.007 2.1l-.056 1.042a7.565 7.565 0 0 1-.042.521l-.049.518-.049.521-.069.518-.069.518-.033.259-.046.255-.174 1.029-.216 1.016a35.139 35.139 0 0 1-2.26 6.771 35.641 35.641 0 0 1-3.5 6.044 17.083 17.083 0 0 1-1.2 1.51 3.114 3.114 0 0 1-.5.462 1.717 1.717 0 0 0-.226.206c-.1.108-.256.272-.495.521a4.448 4.448 0 0 1-.97.881.723.723 0 0 0-.364.193.905.905 0 0 1-.252.147c-.144.135-.226.2-.226.2s-.036-.029-.095-.085a.054.054 0 0 1-.023 0c-.079-.017-.056.065-.03.147a.288.288 0 0 1 .02.128s0 0-.007 0a4.056 4.056 0 0 1-.622-.544Zm-.655-.616.016.017Zm-39.381-45.012.324.056c.635.128 1.271.252 1.9.406 1.255.3 2.493.655 3.7 1.074l-.017-.006c1 .35 1.985.721 2.948 1.14s1.906.868 2.827 1.35a37.406 37.406 0 0 1 3.973 2.402c.21.147.419.295.626.445l.308.229.151.117.187.142c.2.163.393.324.583.487l-.331.314-.17.154-.147.138-.37.327c-.249.22-.5.433-.753.646-.508.423-1.025.836-1.546 1.242a56.724 56.724 0 0 1-3.25 2.328 47.1 47.1 0 0 1-7.1 3.908 35.323 35.323 0 0 1-3.836 1.421Zm91.292-3.479c-.419-.029-.852-.075-.894-.056h.011-.014a29.024 29.024 0 0 1-12.258-4.393 30.192 30.192 0 0 1-6.676-5.792l-.708-.861-.177-.217-.164-.223-.337-.445-.334-.445c-.108-.15-.213-.3-.318-.459l-.318-.455c-.1-.154-.213-.3-.308-.462l-.6-.94c-.193-.314-.377-.635-.567-.956l-.141-.236c-.046-.081-.088-.163-.131-.245l-.265-.488-.262-.488-.246-.494-.216-.436-.108-.22-.1-.223-.4-.885c-.249-.6-.5-1.192-.724-1.8a39.132 39.132 0 0 1-1.182-3.669v.016a41.863 41.863 0 0 1-1.162-6.182 37.454 37.454 0 0 1-.219-3.095c-.016-.512-.02-1.025-.016-1.54.007-.256.01-.511.023-.767.007-.128.01-.256.02-.383l.01-.19.016-.236c.02-.252.046-.507.075-.756l.446.1.226.052.193.05.482.121q.476.123.953.265a53.218 53.218 0 0 1 5.648 1.979 47 47 0 0 1 7.21 3.705 31.94 31.94 0 0 1 6.391 5.258c.475.515.92 1.058 1.353 1.605l.629.832.3.426.3.429.3.433.279.438.278.442.141.22.131.223.524.9.491.92a35.079 35.079 0 0 1 2.621 6.637 35.758 35.758 0 0 1 1.206 6.879 16.265 16.265 0 0 1 .052 1.927 3.415 3.415 0 0 1-.085.675 2.016 2.016 0 0 0-.043.3c-.006.154-.02.374-.042.718a4.288 4.288 0 0 1-.177 1.3.742.742 0 0 0-.154.381.947.947 0 0 1-.1.274c-.026.2-.046.3-.046.3l-.124-.006a.042.042 0 0 1-.016.016c-.115.065.144.147.17.22a.669.669 0 0 1-.23.02 5.463 5.463 0 0 1-.618-.018Zm-.883-.054Zm-78.868-17.551a35.372 35.372 0 0 1-6.876-1.215 16.8 16.8 0 0 1-1.828-.612 3.275 3.275 0 0 1-.606-.312 2.122 2.122 0 0 0-.269-.145 53.77 53.77 0 0 1-.658-.284 4.379 4.379 0 0 1-1.16-.609c-.056-.059-.036-.083-.144-.166v-2.576a29.194 29.194 0 0 1 8.088-9.546 30.1 30.1 0 0 1 7.721-4.291l1.055-.37.262-.092.269-.082.531-.16.534-.164c.18-.049.36-.095.541-.141l.537-.145c.18-.045.357-.095.537-.131l1.088-.242c.364-.072.73-.138 1.094-.206l.272-.05c.092-.016.183-.025.272-.039l.55-.082.551-.082.55-.059.481-.056.246-.026.239-.02.969-.075c.649-.026 1.294-.062 1.939-.062a38.208 38.208 0 0 1 3.849.145h-.013a42.952 42.952 0 0 1 6.208 1.026 37.944 37.944 0 0 1 4.436 1.367c.239.092.478.184.711.281l.354.147.177.079.216.095c.232.1.458.216.685.327l-.246.387-.124.19-.115.17-.279.406c-.187.272-.38.541-.573.806-.39.537-.8 1.062-1.205 1.583a52.666 52.666 0 0 1-2.588 3.046 47.351 47.351 0 0 1-5.946 5.51 31.932 31.932 0 0 1-7.128 4.2c-.645.275-1.307.508-1.972.724l-1 .3c-.167.056-.337.095-.5.138l-.5.134-.5.132-.511.111-.508.111-.256.056-.259.049-1.022.184-1.032.147a34.546 34.546 0 0 1-4.481.289q-1.344 0-2.664-.099Zm8.491-41.478a3.813 3.813 0 0 1-.334-.77 8.747 8.747 0 0 0-.314-.839c0 .007 0 .014.007.021l-.01-.023a29.023 29.023 0 0 1-.966-12.981c.112-.776.259-1.55.436-2.319a30.4 30.4 0 0 1 2.136-6.133l.5-1 .128-.249.134-.242.272-.488.269-.487c.095-.161.19-.314.288-.476l.288-.478c.095-.157.19-.314.3-.469l.613-.931c.209-.3.429-.6.642-.9l.164-.226c.052-.075.112-.147.167-.22l.341-.442.337-.436.354-.429.308-.374.157-.187.161-.184.649-.727c.442-.469.884-.943 1.35-1.393a37.918 37.918 0 0 1 2.869-2.568l-.013.007c.825-.662 1.664-1.3 2.529-1.9a40.414 40.414 0 0 1 5.383-3.139c.465-.226.93-.438 1.4-.642.236-.1.472-.2.708-.292.121-.046.239-.095.36-.138l.18-.068.219-.082c.239-.082.482-.164.721-.239l.089.449.046.226.036.2.082.487c.052.328.1.655.147.983a53.8 53.8 0 0 1 .485 5.962 47.406 47.406 0 0 1-.449 8.091 31.92 31.92 0 0 1-2.208 7.977 23.157 23.157 0 0 1-.914 1.89l-.508.911c-.082.153-.174.3-.265.452l-.269.445-.275.445-.288.433-.288.436-.144.216-.151.213-.609.846-.639.818a34.855 34.855 0 0 1-5 5.094 35.2 35.2 0 0 1-5.792 3.9 16.939 16.939 0 0 1-1.74.832 3.3 3.3 0 0 1-.652.2 1.459 1.459 0 0 0-.292.085l-.675.252a4.654 4.654 0 0 1-1.255.367.715.715 0 0 0-.413.013.686.686 0 0 1-.229.023.331.331 0 0 0-.062 0c-.19.056-.295.082-.295.082l-.046-.118a.031.031 0 0 1-.02-.007c-.069-.049-.082.036-.095.118a.22.22 0 0 1-.039.124Zm-.642-1.588Zm62.386-5.654-1.084-.262-.272-.069-.265-.078-.537-.151-.537-.153c-.177-.056-.351-.118-.528-.174l-.527-.177a9.623 9.623 0 0 1-.527-.181l-1.042-.387c-.344-.141-.685-.284-1.029-.426l-.255-.107c-.085-.036-.167-.075-.252-.111l-.5-.233-.5-.232-.495-.249-.436-.216-.216-.111-.213-.114-.855-.466c-.557-.331-1.12-.651-1.661-1a38.887 38.887 0 0 1-3.148-2.218l.01.007c-.832-.655-1.644-1.327-2.417-2.038s-1.52-1.441-2.234-2.2-1.392-1.536-2.037-2.339c-.321-.4-.635-.809-.937-1.222-.151-.209-.3-.412-.445-.625-.072-.105-.144-.21-.216-.318l-.1-.16-.128-.2c-.137-.213-.269-.43-.4-.646l.419-.19.21-.095.187-.079.455-.189c.308-.125.613-.246.921-.363a55.712 55.712 0 0 1 5.699-1.816 47.551 47.551 0 0 1 7.99-1.382 31.9 31.9 0 0 1 8.268.356c.688.121 1.369.285 2.044.466l1.006.288c.167.042.331.1.5.157l.491.164.5.167.488.183.488.184.242.092.242.1.96.4.943.439a35.216 35.216 0 0 1 6.09 3.725 35.815 35.815 0 0 1 5.1 4.766 17.236 17.236 0 0 1 1.2 1.511 3.419 3.419 0 0 1 .337.59 1.528 1.528 0 0 0 .147.269c.085.124.207.308.4.6a4.546 4.546 0 0 1 .642 1.144.661.661 0 0 0 .1.4.991.991 0 0 1 .088.278c.1.174.144.269.144.269s-.036.029-.1.075a.04.04 0 0 1 0 .02c-.033.075.052.069.138.065a.267.267 0 0 1 .131.01s0 0 0 .007a4.2 4.2 0 0 1-.678.494c-.351.233-.724.452-.747.5a29.006 29.006 0 0 1-12.431 3.865q-1.172.1-2.358.1a30.335 30.335 0 0 1-6.474-.713Zm21.266-3.272-.02.013Zm-102.1-34.241-.023-.229-.02-.2-.039-.494a45.627 45.627 0 0 1-.062-.989 56.89 56.89 0 0 1-.059-1.985q-.025-1.989.092-4a47.93 47.93 0 0 1 1.1-7.773l.059-.249a32.011 32.011 0 0 1 2.893-7.754c.331-.616.7-1.215 1.078-1.8l.583-.864c.1-.147.2-.285.3-.426l.308-.42.311-.419.324-.409.327-.406.161-.2.17-.2.681-.789.708-.764a34.99 34.99 0 0 1 5.425-4.638 35.539 35.539 0 0 1 6.109-3.381 17.3 17.3 0 0 1 1.8-.678 3.19 3.19 0 0 1 .668-.138 1.718 1.718 0 0 0 .3-.06l.691-.193a4.469 4.469 0 0 1 1.287-.255.7.7 0 0 0 .409.02.959.959 0 0 1 .292 0c.2-.036.3-.052.3-.052l.039.117.016.01c.1.089.1-.183.154-.229h.007a3.938 3.938 0 0 1 .265.8 7.489 7.489 0 0 0 .239.864 28.985 28.985 0 0 1-.167 13.019 29.988 29.988 0 0 1-3.3 8.2l-.586.95-.147.239-.157.229-.311.462-.311.462c-.108.15-.219.3-.328.448l-.328.449c-.111.15-.219.3-.337.445l-.694.871c-.236.282-.478.563-.718.845l-.183.21c-.059.072-.125.138-.187.206l-.377.41-.374.4-.39.4-.341.348-.17.174-.18.167-.7.665c-.485.432-.966.868-1.468 1.271a38 38 0 0 1-3.083 2.31l.013-.007c-.881.587-1.772 1.15-2.686 1.668s-1.841 1-2.781 1.447-1.89.852-2.853 1.212c-.481.184-.966.357-1.451.518-.246.079-.488.157-.734.229l-.367.108-.187.049-.226.063a29.35 29.35 0 0 1-.74.177Zm59.006-14.367c-.092 0-.184 0-.275-.007l-.557-.017-.554-.013-.553-.04-.485-.029-.242-.017-.242-.022-.966-.095c-.642-.086-1.287-.157-1.923-.272a39.396 39.396 0 0 1-3.764-.812l.013.007c-1.019-.281-2.031-.583-3.02-.934s-1.962-.733-2.916-1.153-1.884-.868-2.791-1.355c-.452-.243-.9-.5-1.34-.757a29.375 29.375 0 0 1-.655-.4l-.321-.206-.161-.1-.2-.132c-.21-.147-.413-.295-.616-.442l.311-.337.157-.17.138-.145.347-.354.7-.694q.717-.688 1.458-1.35 1.489-1.323 3.079-2.549a47.509 47.509 0 0 1 6.813-4.393 32.064 32.064 0 0 1 7.75-2.906 25.998 25.998 0 0 1 2.064-.366l1.038-.128c.17-.023.347-.033.518-.049l.521-.043.521-.039.521-.023.521-.022.262-.01h1.3l1.042.036a35.277 35.277 0 0 1 7.059 1.048 35.723 35.723 0 0 1 6.561 2.395 17.044 17.044 0 0 1 1.694.918 3.533 3.533 0 0 1 .544.412 1.643 1.643 0 0 0 .239.187c.125.086.311.207.6.4a4.264 4.264 0 0 1 1.035.8.712.712 0 0 0 .256.324.811.811 0 0 1 .187.223c.16.121.239.19.239.19l-.065.107a.02.02 0 0 1 0 .021c0 .081.079.042.154 0a.237.237 0 0 1 .125-.039v.006a3.984 3.984 0 0 1-.426.721 8.851 8.851 0 0 0-.495.747 29.058 29.058 0 0 1-9.935 8.415 30.1 30.1 0 0 1-8.35 2.886l-1.1.181-.275.046-.275.032-.557.065-.55.069c-.187.02-.37.032-.557.049l-.554.043c-.183.016-.367.035-.553.039l-1.114.049c-.37.007-.74.007-1.111.014Zm-9.548-1.317Zm34.759-10.574a.01.01 0 0 0 0 .007Zm.008-.012v.009Zm0-.008v.008Zm-57.329-11.9Zm-.007-.026.007.026a.075.075 0 0 1-.001-.031Zm-14.564-23.582a16.741 16.741 0 0 1-1.906-.284 3.389 3.389 0 0 1-.652-.2 1.448 1.448 0 0 0-.288-.092l-.7-.167a4.464 4.464 0 0 1-1.248-.4.705.705 0 0 0-.347-.216 1.062 1.062 0 0 1-.256-.145c-.19-.062-.288-.1-.288-.1s.006-.046.026-.125a.05.05 0 0 1-.013-.02c-.046-.124-.17.118-.246.131a2.489 2.489 0 0 1 .1-.6c.016-.071.036-.15.056-.229.1-.41.223-.826.21-.872a29.018 29.018 0 0 1 6.457-11.308 29.906 29.906 0 0 1 6.859-5.568l.973-.547.242-.138.249-.125.495-.252.5-.252c.167-.082.337-.157.5-.236l.5-.232c.17-.079.337-.157.511-.223l1.029-.43c.344-.134.694-.259 1.042-.39l.259-.095c.085-.033.174-.062.262-.089l.527-.177.527-.174.531-.157.465-.137.233-.065.239-.062.94-.242c.632-.138 1.261-.289 1.9-.4a38.894 38.894 0 0 1 3.816-.523h-.013c1.052-.089 2.106-.151 3.158-.157s2.093.016 3.132.081 2.067.174 3.086.325a31.266 31.266 0 0 1 2.27.406c.128.025.252.056.377.085l.183.046.229.052c.249.069.491.135.734.207l-.177.422-.092.213-.079.184-.206.449c-.137.3-.278.6-.426.9-.292.593-.6 1.179-.907 1.766a56.095 56.095 0 0 1-2.021 3.449 47.818 47.818 0 0 1-4.9 6.457 31.865 31.865 0 0 1-6.289 5.378c-.586.38-1.2.725-1.815 1.055l-.93.473c-.154.081-.314.15-.472.223l-.475.219-.475.217-.482.2-.481.2-.239.1-.246.092-.979.359-.989.321a34.963 34.963 0 0 1-6.994 1.429 34.436 34.436 0 0 1-6.98-.015Zm-5.564-3.3v.009a.026.026 0 0 1 .006-.017Zm0-.018a.065.065 0 0 0-.005.015Z" transform="translate(3011.521 -12757.184)" style="fill:#83ac91"/></svg>
	</div>
	<div class="right-leaf">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.079 286.505"><path d="M-2982.654 13029.912h-.429a31.37 31.37 0 0 1-.759-.036l.079-.451.039-.226.039-.2.095-.484a54.169 54.169 0 0 1 1.898-6.707 47.135 47.135 0 0 1 3.321-7.395 31.86 31.86 0 0 1 4.918-6.659c.418-.429.857-.836 1.305-1.233v21.832c-.554.161-1.11.312-1.669.444-1.021.241-2.045.454-3.069.621a38.415 38.415 0 0 1-4.616.478c-.259.007-.514.017-.769.017h-.271Zm-36.885-45.386a36.028 36.028 0 0 1-6.93-.856 17.2 17.2 0 0 1-1.859-.514 3.16 3.16 0 0 1-.622-.282 1.871 1.871 0 0 0-.275-.127c-.141-.053-.35-.128-.674-.249a4.48 4.48 0 0 1-1.188-.55.718.718 0 0 0-.321-.258 1.033 1.033 0 0 1-.236-.174c-.18-.085-.275-.134-.275-.134s.013-.043.039-.118l-.01-.02c-.03-.131-.183.092-.259.1v-.006a3.894 3.894 0 0 1 .252-.8 8.9 8.9 0 0 0 .314-.838s0 0 0-.007a29.015 29.015 0 0 1 7.787-10.435 30.062 30.062 0 0 1 7.486-4.691l1.034-.422.259-.108.259-.095.527-.19.524-.189c.173-.059.35-.114.53-.17l.53-.17c.173-.056.35-.115.53-.16l1.073-.3c.357-.092.72-.174 1.08-.262l.271-.065c.088-.021.18-.04.271-.056l.543-.111.543-.108.546-.088.481-.079.239-.042.242-.029.965-.125c.645-.062 1.289-.134 1.93-.167 1.289-.078 2.575-.1 3.854-.056h-.016c1.057.043 2.111.111 3.151.229s2.081.271 3.1.464 2.029.426 3.023.7c.5.138.991.281 1.479.436.242.081.484.16.726.245.121.042.239.085.36.131l.18.065.219.085c.239.095.471.189.7.291l-.229.4-.115.2-.1.171-.258.425c-.174.278-.35.56-.533.835a53.361 53.361 0 0 1-3.544 4.82 47.3 47.3 0 0 1-5.647 5.811 31.847 31.847 0 0 1-6.9 4.574c-.628.3-1.276.573-1.927.825l-.982.356c-.164.063-.33.111-.5.163l-.494.161-.5.156-.5.138-.5.138-.252.072-.252.059-1.014.238-1.021.2a35.211 35.211 0 0 1-6.362.574q-.375-.002-.752-.011Zm47.352-4.6a3.93 3.93 0 0 1-.438-.714 8.84 8.84 0 0 0-.426-.786v-.006a29.084 29.084 0 0 1-2.768-12.725 29.977 29.977 0 0 1 1.374-8.727l.356-1.057.088-.266.1-.258.2-.521.2-.521c.072-.173.147-.34.219-.514l.219-.511c.075-.17.147-.34.229-.507l.478-1 .209-.408v28.273c-.026.057 0 .2-.036.245Zm-59.4-.223c0 .007 0 .01-.007.017Zm58.536-1.275a.073.073 0 0 1 .009.019Zm0 0Zm-23.833-36.522-.095-.212-.079-.184-.19-.458c-.128-.3-.245-.612-.366-.92a55.73 55.73 0 0 1-1.813-5.699 46.923 46.923 0 0 1-1.381-7.987 31.781 31.781 0 0 1 .354-8.268c.121-.69.288-1.371.468-2.046l.288-1c.046-.17.1-.334.157-.5l.164-.5.167-.494.183-.487.183-.49.092-.242.1-.239.406-.962.438-.945a35.059 35.059 0 0 1 3.723-6.086 35.707 35.707 0 0 1 4.767-5.1 16.691 16.691 0 0 1 1.508-1.2 3.439 3.439 0 0 1 .592-.34 1.514 1.514 0 0 0 .265-.147c.127-.082.311-.206.6-.4a4.527 4.527 0 0 1 1.142-.642.235.235 0 0 1 .065-.007c.052 0 .1 0 .334-.1a.861.861 0 0 1 .278-.089c.173-.1.268-.146.268-.146l.072.1a.07.07 0 0 1 .023 0c.075.033.069-.053.065-.138a.207.207 0 0 1 .01-.131 3.863 3.863 0 0 1 .5.675 7.719 7.719 0 0 0 .5.749 29.057 29.057 0 0 1 3.864 12.434c.065.782.095 1.567.095 2.358a30.355 30.355 0 0 1-.7 6.456l-.262 1.083-.069.271-.079.269-.154.533-.154.536c-.056.177-.115.354-.174.53l-.173.527c-.059.177-.115.354-.183.526l-.389 1.044c-.137.344-.281.684-.422 1.027l-.108.255a4.827 4.827 0 0 1-.115.252l-.232.508-.229.5-.249.5-.216.435-.111.216-.118.213-.465.854c-.327.56-.651 1.122-1 1.662a38.768 38.768 0 0 1-2.218 3.147l.01-.01a40.839 40.839 0 0 1-4.238 4.649 38.067 38.067 0 0 1-3.563 2.977c-.206.15-.412.3-.622.441l-.317.22-.16.1-.2.131c-.216.134-.432.265-.648.4Zm-43.547-4.934-1.044-.056c-.173-.007-.347-.026-.52-.043l-.517-.046-.52-.052-.517-.069-.517-.068-.259-.032-.258-.046-1.024-.177-1.021-.216a35.075 35.075 0 0 1-6.77-2.258 35.582 35.582 0 0 1-6.043-3.5 17.487 17.487 0 0 1-1.512-1.2 3.337 3.337 0 0 1-.461-.5 1.64 1.64 0 0 0-.2-.226c-.111-.1-.272-.255-.524-.494a4.439 4.439 0 0 1-.88-.969.7.7 0 0 0-.193-.363.883.883 0 0 1-.147-.252c-.137-.146-.2-.229-.2-.229s.03-.036.085-.095a.05.05 0 0 1 0-.023c.013-.082-.072-.059-.154-.032a.291.291 0 0 1-.124.022v-.007a3.952 3.952 0 0 1 .546-.635 7.782 7.782 0 0 0 .615-.654 29.009 29.009 0 0 1 11.243-6.56 29.934 29.934 0 0 1 8.723-1.395l1.119.014h.278l.278.017.556.029.556.029c.187.014.37.033.556.049l.553.05c.183.02.37.032.553.062l1.1.141c.366.06.729.125 1.1.184l.275.049c.092.014.18.033.272.053l.543.111.543.114.537.131.474.114.236.06.236.062.936.262c.618.2 1.24.383 1.842.6 1.217.432 2.411.913 3.57 1.452l-.013-.006c.955.451 1.9.926 2.814 1.442s1.8 1.063 2.67 1.64 1.7 1.185 2.513 1.822c.4.321.8.645 1.188.979.193.17.386.337.576.511.095.085.187.17.281.258l.137.135.17.163c.18.177.357.36.533.54l-.366.278-.183.138-.16.121-.406.287a44.991 44.991 0 0 1-2.484 1.636 54.32 54.32 0 0 1-3.475 1.976 47.527 47.527 0 0 1-7.473 3.145 31.839 31.839 0 0 1-8.137 1.512c-.339.02-.68.026-1.021.026-.37.005-.729-.003-1.087-.014Zm-22.176-12.205-.008.01Zm.008-.01-.008.01Zm79.5-27.478Zm-.013-.023.013.023a.055.055 0 0 1-.016-.026Zm-47.892-12.342h-.2l-.5-.01c-.327-.014-.657-.026-.988-.043a54.318 54.318 0 0 1-5.945-.661 47.178 47.178 0 0 1-7.859-1.985 31.976 31.976 0 0 1-7.408-3.687 25.424 25.424 0 0 1-1.679-1.26l-.8-.671c-.134-.111-.259-.229-.389-.347l-.386-.351-.383-.354-.373-.366-.37-.366-.187-.184-.18-.189-.713-.759-.684-.786a34.892 34.892 0 0 1-4.048-5.876 35.638 35.638 0 0 1-2.722-6.43 16.542 16.542 0 0 1-.484-1.868 3.15 3.15 0 0 1-.069-.678 1.559 1.559 0 0 0-.026-.3l-.121-.71a4.454 4.454 0 0 1-.121-1.306.674.674 0 0 0 .065-.405 1.055 1.055 0 0 1 .033-.291l-.023-.3s.042-.01.124-.022a.059.059 0 0 1 .013-.02c.095-.092-.173-.111-.216-.177a3.79 3.79 0 0 1 .818-.18 7.785 7.785 0 0 0 .883-.15 29.063 29.063 0 0 1 12.934 1.524 30.171 30.171 0 0 1 7.8 4.14l.884.68.222.174.209.18.428.357.426.359c.141.121.275.249.416.373l.412.373c.134.124.272.249.4.383l.795.778c.259.266.51.537.769.806l.19.2c.062.065.121.138.183.206l.366.416.366.419.35.425.311.377.15.189.151.193.589.771c.376.527.759 1.048 1.109 1.591a38.544 38.544 0 0 1 1.976 3.308l-.006-.013c.494.936.962 1.881 1.377 2.843s.8 1.935 1.148 2.919a37.543 37.543 0 0 1 1.27 4.465c.052.252.108.5.154.753.023.127.046.252.065.379l.033.187.039.232c.036.252.069.5.095.753h-.458Zm24.409-5.006q-1.561-.019-3.1-.16-.771-.069-1.531-.174a30.783 30.783 0 0 1-.759-.114c-.128-.02-.252-.043-.376-.062l-.19-.036-.232-.045c-.249-.053-.5-.108-.74-.167l.154-.429.079-.216.072-.19.18-.461a44.73 44.73 0 0 1 1.194-2.725 54.208 54.208 0 0 1 1.836-3.55 47.165 47.165 0 0 1 4.555-6.705 32.043 32.043 0 0 1 6-5.7 26.361 26.361 0 0 1 1.757-1.148l.9-.52c.15-.089.3-.167.461-.246l.461-.242.461-.242.471-.226.471-.223.236-.11.242-.105.956-.408.972-.377a35.038 35.038 0 0 1 6.907-1.79 35.528 35.528 0 0 1 6.973-.362 16.079 16.079 0 0 1 1.921.187 3.031 3.031 0 0 1 .661.166 1.685 1.685 0 0 0 .294.076c.147.029.366.068.7.131a4.42 4.42 0 0 1 1.27.333.691.691 0 0 0 .36.2.9.9 0 0 1 .262.131c.193.049.294.081.294.081l-.02.128a.023.023 0 0 1 .013.017c.052.121.164-.124.239-.141a.073.073 0 0 1 .007.039 5.821 5.821 0 0 1-.118.792 8.778 8.778 0 0 0-.16.88 29 29 0 0 1-5.86 11.629 29.988 29.988 0 0 1-6.557 5.923l-.942.595-.236.151-.242.137-.484.278-.481.278c-.164.088-.331.173-.494.259l-.491.262c-.164.085-.327.173-.5.252l-1 .478c-.337.153-.677.3-1.018.444l-.255.111c-.085.036-.17.069-.255.1l-.517.2-.517.2-.523.187-.458.16-.232.082-.229.072-.929.291c-.622.17-1.247.354-1.875.5-1.253.3-2.516.55-3.782.724h.013a41.684 41.684 0 0 1-3.144.32q-1.326.083-2.645.085Zm34.143-23.716a.084.084 0 0 1 0-.017v.021Zm0 0Zm0-.022a.048.048 0 0 1 0 .006Zm-93.489-2a.053.053 0 0 1-.021 0Zm0 0Zm45.958-12.623-.177-.151-.15-.127-.373-.331a63.236 63.236 0 0 1-.733-.667 55.53 55.53 0 0 1-4.126-4.325 47.315 47.315 0 0 1-4.744-6.574 31.983 31.983 0 0 1-3.3-7.588 24.535 24.535 0 0 1-.478-2.041l-.18-1.031c-.033-.17-.052-.343-.079-.517l-.069-.517-.069-.518-.049-.521-.049-.52-.023-.259-.016-.259-.059-1.04-.02-1.041a35.125 35.125 0 0 1 .681-7.1 35.49 35.49 0 0 1 2.045-6.679 17.021 17.021 0 0 1 .828-1.74 3.329 3.329 0 0 1 .386-.563 1.785 1.785 0 0 0 .173-.248c.075-.131.19-.324.363-.622a4.6 4.6 0 0 1 .746-1.076c.088-.065.095 0 .311-.269a.988.988 0 0 1 .213-.2 9.17 9.17 0 0 1 .177-.248l.111.062a.051.051 0 0 1 .02-.006c.082 0 .042-.075 0-.15a.264.264 0 0 1-.049-.121 3.984 3.984 0 0 1 .743.387c.363.219.727.454.776.458a29.036 29.036 0 0 1 8.926 9.479 30.12 30.12 0 0 1 3.318 8.189l.239 1.09.059.271.049.275.095.55.1.549c.026.181.049.367.075.55l.075.554c.026.183.049.366.065.549l.108 1.109c.026.37.046.739.069 1.109l.016.275c.006.095.006.186.01.281l.013.553.01.553v.553l-.007.488v.245l-.01.242-.046.972c-.049.645-.092 1.292-.173 1.931a38.655 38.655 0 0 1-.612 3.8v-.013c-.226 1.033-.474 2.061-.772 3.065s-.628 2-.995 2.971a37.387 37.387 0 0 1-1.898 4.237c-.121.226-.239.452-.366.671-.062.114-.124.226-.19.337l-.1.164-.121.2c-.134.217-.272.429-.409.639Zm39.061-11.105a39.36 39.36 0 0 1-3.848-.213h.013c-1.05-.118-2.1-.259-3.128-.449s-2.052-.418-3.059-.68-2-.563-2.968-.907a28.399 28.399 0 0 1-1.443-.539c-.236-.1-.474-.19-.707-.292-.121-.052-.239-.1-.353-.153l-.174-.082-.213-.1a23.938 23.938 0 0 1-.68-.341l.255-.379.128-.193.115-.164.288-.405q.29-.4.589-.795a53.962 53.962 0 0 1 3.871-4.561 47.2 47.2 0 0 1 6.04-5.4 31.746 31.746 0 0 1 7.2-4.08 25.192 25.192 0 0 1 1.979-.69l1-.284c.167-.053.337-.092.507-.131l.507-.124.507-.121.51-.105.51-.1.259-.053.255-.043.8-.131v20.544c-.168.04-.336.082-.507.115l-1.09.223c-.366.065-.733.125-1.1.184l-.275.046c-.092.017-.183.026-.275.039l-.55.068-.55.072-.55.053-.488.042-.242.023-.242.016-.972.056c-.527.017-1.051.037-1.575.037l-.342-.006Zm-46.233-35.046-.02-.014a.08.08 0 0 1 .02.014Zm24.687-7.163-.065-.219-.052-.193-.125-.48c-.082-.321-.157-.642-.232-.962a55.329 55.329 0 0 1-1.006-5.896 47.375 47.375 0 0 1-.255-8.1 31.935 31.935 0 0 1 1.5-8.138c.216-.664.475-1.318.746-1.963l.425-.952c.069-.16.147-.314.226-.468l.232-.468.232-.469.249-.458.252-.458.124-.229.134-.226.53-.9.566-.874a35.164 35.164 0 0 1 4.535-5.507 35.446 35.446 0 0 1 5.432-4.391 16.674 16.674 0 0 1 1.662-.982 3.2 3.2 0 0 1 .632-.252 1.713 1.713 0 0 0 .285-.107c.137-.065.334-.164.645-.311a4.581 4.581 0 0 1 1.224-.479.192.192 0 0 1 .065 0c.052.01.1.02.344-.053a.888.888 0 0 1 .288-.046c.187-.075.285-.107.285-.107s.023.039.059.111a.049.049 0 0 1 .02.006c.115.069.062-.2.111-.255a3.725 3.725 0 0 1 .4.736c.18.383.347.782.386.809a.022.022 0 0 0 0-.008v.011a28.686 28.686 0 0 1 2.156 11.043c0 .605-.02 1.207-.056 1.81a30.03 30.03 0 0 1-1.829 8.645l-.409 1.037-.1.258-.115.256-.226.507-.226.507c-.082.171-.167.334-.245.5l-.246.5c-.085.167-.167.333-.255.494l-.53.981c-.183.32-.376.638-.566.955l-.141.239c-.046.081-.1.157-.147.235l-.3.468-.3.465-.314.455-.275.4-.141.2-.144.2-.583.779c-.4.507-.8 1.021-1.22 1.5a38.366 38.366 0 0 1-2.637 2.811l.013-.01c-.766.732-1.544 1.442-2.356 2.107s-1.639 1.3-2.487 1.91-1.715 1.165-2.6 1.691c-.442.262-.89.518-1.338.76-.229.117-.455.238-.684.354-.115.056-.226.114-.344.166l-.174.086-.213.1q-.348.157-.7.3Zm27.432-2.847.013-.229.013-.2.036-.494c.03-.327.062-.658.095-.985.072-.657.157-1.315.249-1.97q.289-1.973.723-3.933a48.586 48.586 0 0 1 1.757-6.093v14c-.195.035-.39.069-.586.1-.252.039-.5.079-.759.111-.128.02-.252.036-.38.053l-.193.02-.232.026q-.383.034-.756.059Zm-7.564-39.426Zm-.01-.022a.081.081 0 0 1 .005.012Z" transform="translate(3068.149 -12743.909)" style="fill:#83ac91;stroke:transparent;stroke-miterlimit:10"/></svg>
	</div>
	<h2>Check out our latest news</h2>
	<?php 

		$current_page = get_query_var('paged');
		$current_page = max( 1, $current_page );

		$per_page = 9;
		$offset_start = 0;
		$offset = ( $current_page - 1 ) * $per_page + $offset_start;

		$post_list = new WP_Query(array(
				'post_status' => 'publish',
				'orderby' => 'publish_date',
				'posts_per_page' => $per_page,
				'paged'          => $current_page,
				'offset'         => $offset,
				'ignore_sticky_posts' => 1
		));

		$total_rows = max( 0, $post_list->found_posts - $offset_start );
		$total_pages = ceil( $total_rows / $per_page );


		if ( $post_list->have_posts() ) :
			echo '<div class="news-list">';
			while ( $post_list->have_posts() ):
				$post_list->the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			echo '</div>';
		endif;
	?>

	<div class="pagination">
		<div class="pagination-wrapper">
			<?php echo paginate_links( array(
				'total'   => $total_pages,
				'current' => $current_page,
				'prev_text' => __( '<', 'foundation' ),
				'next_text' => __( '>', 'foundation' ),
			)); 
			wp_reset_postdata();
			?>
		</div>
	</div>

	<svg id="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1921 264.746"><path d="m-1569.915 14117.5.476.036c-5.391.193-11.192.2-17.233.08-6.048-.135-12.333-.5-18.716-.872-6.379-.4-12.857-.793-19.265-1.312s-12.751-1.007-18.876-1.494c-30.813-2.33-61.6-5.267-92.255-9.108-15.35-1.756-30.621-4.039-45.92-6.136-15.238-2.429-30.519-4.617-45.68-7.4l.382.116-11.4-1.978h.309c-5.87-1.01-11.7-2.181-17.539-3.358l-17.506-3.5c-11.639-2.436-23.224-5.063-34.823-7.626-11.125-2.74-22.437-5.337-33.412-8.187v-48.715c14.664 3.769 29.3 7.464 43.757 10.712 11.29 2.649 22.729 4.914 34.085 7.4 11.446 2.229 22.882 4.5 34.372 6.608 46.007 8.313 92.633 14.754 139.6 19.56l-.5-.12c77.773 8.03 156.557 11.6 235.54 12.231 79.009.567 158.229-1.832 237.351-5.855 103.3-5.264 206.683-13.914 310.144-23.718 103.479-9.8 207.046-20.864 311.125-30.442 52.052-4.744 104.228-9.132 156.64-12.432s105.046-5.595 157.978-5.663c52.914.058 106.195 2.024 159.4 9.287 13.293 1.828 26.568 3.962 39.8 6.543l4.965.927 4.944 1.087 9.887 2.177c1.636.371 3.315.709 4.918 1.105l4.733 1.21 9.473 2.425 18.945 4.853q1.421.374 2.846.736v45.477q-11.35-3.179-22.78-6.2c-10.258-2.61-20.592-5.4-30.784-7.873l-15.136-3.352-15.361-2.887c-20.6-3.6-41.605-6.248-62.815-8.243-21.235-1.916-42.7-3.075-64.233-3.85q-32.355-.955-64.953-.651c-86.944.938-174.539 7.434-262.115 15.238-87.235 7.841-174.575 17.28-262.1 26.295-87.526 9.04-175.273 17.757-263.333 24.707-115.3 9.058-231.319 15.267-347.457 15.268q-68.734.004-137.478-3.106Zm-130.552-100.808-5.005-.534-78-9.578c-32.616-4.767-100.438-14.762-157.9-23.758v-58.475c69.451 11.826 154.263 24.383 247.819 34.28 227.151 24.034 554.023 36.924 821.256-38.148 124.747-35.045 283.165-55.8 470.855-61.688 115.944-3.639 243.363-1.658 380.069 5.883v58.653c-347.493-19.148-629.772-1.212-821.187 52.56-124.817 35.066-271.414 55.076-435.716 59.479q-35.048.943-71.2.941c-110.435.005-228.145-6.564-350.992-19.607Z" transform="translate(1941.873 -13856.374)" style="fill:#005a39;stroke:transparent;stroke-miterlimit:10;opacity:.48"/></svg>
</div>

<?php get_footer(); ?>