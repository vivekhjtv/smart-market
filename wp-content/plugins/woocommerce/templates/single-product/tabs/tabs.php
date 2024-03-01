<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>
	
	<div class="enquiry-form">
		<h4>
			<svg class ="enquiry-icon" height="439pt" viewBox="0 0 439.57422 439" width="439pt" xmlns="http://www.w3.org/2000/svg">
			<path d="m428.882812 376.707031-67.875-67.867187c-2.589843-2.597656-6.03125-4.027344-9.695312-4.027344 0 0-.003906 0-.007812 0-3.664063 0-7.109376 1.429688-9.699219 4.019531l-9.695313 9.695313-19.710937-19.714844c18.492187-21.519531 28.660156-48.589844 28.660156-77.265625 0-31.742187-12.359375-61.589844-34.808594-84.035156-6.878906-6.875-14.511719-12.679688-22.617187-17.597657v-92.199218c0-15.125-12.304688-27.425782-27.429688-27.425782h-168.398437l-2.671875 2.710938c-.003906.003906-.011719.007812-.015625.011719l-82.289063 83.527343-2.394531 2.476563-.23046875.234375v.007812l-.00390625.003907v25.980469l.00390625-.003907v296.476563c0 15.125 12.30468775 27.429687 27.42968775 27.429687h228.570312c15.125 0 27.429688-12.304687 27.429688-27.429687v-88.527344c5.542968-3.363281 10.84375-7.15625 15.835937-11.445312l19.710938 19.714843-9.695313 9.695313c-5.347656 5.347656-5.347656 14.046875 0 19.394531l67.878906 67.882813c6.90625 6.910156 16.089844 10.714843 25.863282 10.714843 9.765625 0 18.949218-3.804687 25.855468-10.714843 14.253907-14.257813 14.253907-37.464844 0-51.722657zm-106.308593-155.160156c0 26.867187-10.457031 52.125-29.453125 71.113281-18.996094 19.003906-44.25 29.457032-71.117188 29.457032-26.863281 0-52.117187-10.453126-71.109375-29.457032-18.996093-18.988281-29.460937-44.246094-29.460937-71.113281 0-26.859375 10.464844-52.117187 29.460937-71.105469 18.992188-19 44.246094-29.457031 71.109375-29.457031 26.867188 0 52.121094 10.457031 71.117188 29.457031 18.996094 18.988282 29.453125 44.246094 29.453125 71.105469zm-244.058594-185.78125c.820313-.835937 1.582031-1.605469 2.390625-2.425781.464844-.472656.921875-.9375 1.382812-1.40625v42.738281c0 5.042969-4.101562 9.140625-9.144531 9.140625h-42.046875c14.828125-15 32.164063-32.566406 47.417969-48.046875zm186.628906 375.949219c0 5.046875-4.101562 9.144531-9.140625 9.144531h-228.570312c-5.039063 0-9.144532-4.097656-9.144532-9.144531v-309.613282h54.855469c15.128907 0 27.429688-12.304687 27.429688-27.429687v-56.097656h155.429687c5.039063 0 9.140625 4.097656 9.140625 9.140625v83.125c-13.578125-5.289063-28.128906-8.140625-43.140625-8.140625-31.746094 0-61.59375 12.363281-84.039062 34.8125-22.453125 22.445312-34.816406 52.292969-34.816406 84.035156 0 31.75 12.363281 61.597656 34.816406 84.042969 22.445312 22.445312 52.292968 34.8125 84.039062 34.8125 15.011719 0 29.5625-2.855469 43.140625-8.140625zm150.8125 3.785156c-6.917969 6.921875-18.957031 6.902344-25.863281 0l-64.648438-64.652344 25.859376-25.855468 64.652343 64.644531c7.125 7.132812 7.125 18.730469 0 25.863281zm0 0"></path>
			<path d="m45.714844 137.429688h18.285156v18.285156h-18.285156zm0 0"></path>
			<path d="m45.714844 192.289062h18.285156v18.285157h-18.285156zm0 0"></path>
			<path d="m45.714844 247.144531h18.285156v18.285157h-18.285156zm0 0"></path>
			<path d="m45.714844 302h18.285156v18.289062h-18.285156zm0 0"></path>
			<path d="m45.714844 356.859375h18.285156v18.285156h-18.285156zm0 0"></path>
			</svg>
			<a id="trigger-enquiry">Enquiry about product?</a>
		</h4>
	</div>
	 
	
			
	<div class="enquiry-modal">
		<div class="enquiry-content">
			<span class="close-button close-btn dt-sc-btn close-icon"></span>
			<span class="enquiry-content-inner">    
			<h4>Let us know abour your query!</h4>
			<form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">
			<!--<label for="ContactFormName">Name</label> -->
			<input type="text" id="ContactFormName" name="contact[Name]" placeholder="Name">
			<!--       <label for="ContactFormEmail">Email</label> -->
			<input type="text" id="ContactFormEmail" name="contact[Email]" placeholder="Email">
			<!--       <label for="ContactFormPhone">Phone</label> -->
			<input type="text" id="ContactFormPhone" name="contact[Phone]" placeholder="Phone">
			<!--       <label for="ContactFormPhone">Message</label> -->
			<textarea rows="7" type="textarea" id="ContactFormMsg" name="contact[Msg]" placeholder="Subject" style="height=150px"></textarea>
			<!--       <label>Communication mode that you prepare</label> -->
			<div class="enquiry-choose">
				<input type="radio" id="ContactViaEmail" name="contact[By]" value="Email">
				<label for="ContactViaEmail">Mail</label>
				<input type="radio" id="contactFormViaPhone" name="contact[By]" value="Phone">
				<label for="contactFormViaPhone">Phone</label>
				<input type="radio" id="contactFormViaBoth" name="contact[By]" value="Both">
				<label for="contactFormViaBoth">Both</label>
			</div>
			<button type="submit" class="dt-sc-btn submitbtn">Send</button>
			</form>

			</span>
		</div>
	</div>
	<script>
		const EnquiryModal = document.querySelector(".enquiry-modal");
		const EnquiryTrigger = document.querySelector("#trigger-enquiry");
		const Enquiryclose = document.querySelector(".enquiry-modal .close-button");

		function toggleModal() {
			EnquiryModal.classList.toggle("show-enquiry");
		}
		function windowOnClick(event) {
			if (event.target === EnquiryModal) {
			toggleModal();
			}
		}

		EnquiryTrigger.addEventListener("click", toggleModal);
		Enquiryclose.addEventListener("click", toggleModal);
		window.addEventListener("click", windowOnClick);
	</script>

	<style>
			.enquiry-modal {
				position: fixed;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				background-color: rgba(0, 0, 0, 0.5);
				opacity: 0;
				display: none;
				transform: scale(1.1);
				transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
			}
			.enquiry-content {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				background-color: white;
				padding:30px;
				width: 500px;
				max-height: 90%;
				max-width: 90%;
				overflow: auto;
				border-radius: 5px;
				}

			.enquiry-content h4 { margin: 0 0 20px; }

			.enquiry-content .contact-form { display: grid;
				gap: 30px;
				grid-template-columns: 1fr; }

			.enquiry-content .enquiry-choose {
				display: flex;
				align-items: center;
				justify-content: flex-start;
				flex-wrap: wrap;
			}

			.enquiry-content .enquiry-choose input { margin-right: 5px; }
			.enquiry-content .enquiry-choose input:not(:first-child) { margin-left: 15px; }


			.enquiry-content .btn {
				margin: 0;
			}

			.enquiry-content table {
				table-layout: auto;
				margin: 0;
			}
			.enquiry-content .close-button {
				position: absolute;
				right: 10px;
				top: 10px;
			}
			.show-enquiry {
				z-index: 12;
				opacity: 1;
				display: block;
				transform: scale(1.0);
				transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
			}
			.trigger-enquiry {
				margin: -10px 0px 5px 140px;
				display: flex;
				line-height: 1.5;
			}
			.trigger-enquiry svg{ 
				margin-right:5px;
			}

			@media only screen and (max-width: 749px) {
				.enquiry-content, .size-chart-content table { width: 100% ; }
				.size-chart-content th, .size-chart-content td { padding: 10px;}
			}
	</style>

<?php endif; ?>
