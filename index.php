<?php


get_header(); ?>       

    <!-- --------------------------------body------------------------------ -->
    <main id="main" class="main">
      <!-- -----------section one----------- -->
      <div class="main-section-one animate__animated animate__fadeInUp">
        <div>
          <div>رایان پرداز کاوش</div>
          <div>بیش از دو دهه سابقه در زمینه تولید نرم افزار</div>
          <div>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
            ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،
            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای
            زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
            متخصصان را می طلبد.
          </div>
          <div>
            <button>دریافت مشاوره از کاوش</button>
          </div>
        </div>
        <div><img src="<?php echo get_template_directory_uri();?>/images/sec-one-image.png" alt="kavosh" /></div>
      </div>

      <!-- -----------section two----------- -->
      <div class="main-section-two">
        <div class="wow animate__animated animate__fadeInRight">
          <img src="<?php echo get_template_directory_uri();?>/images/sec-two-image.png" alt="kavosh" />
        </div>
        <div class="wow animate__animated animate__fadeInLeft">
          <div>چرا رایان پرداز کاوش؟</div>
          <ul>
            <li
              >داشتن بیش از دو دهه سابقه در زمینه تولید نرم افزار های سفارش مشتری
              و سامانه های اداری</li
            >
            <li
              >تجارت گرانبها در پروژه های تولیدی، توسعه، نصب و راه اندازی،
              پشتیبانی و راهبری، و مشاوره های تخصصی</li
            >
            <li>قیمت مناسب محصولات و خدمات</li>
            <li>به کارگیری ابزار هوشمند و توسه یافته مختص شرکت</li>
            <li>استفاده از جدیدترین فناوری های حوزه آی تی و نرم افزار</li>
            <li>تیم قوی حرفه ای و با تجربه در حوزه نرم افزار و آی تی</li>
            <li>تیم توانمند مدیریتی و حسابداری</li>
            <li>واحد منابع انسانی توانمند</li>
            <li>مشتریان بزرگ بانکی، نهادها، سازمان های دولتی و غیر دولتی</li>
            <li>پاسخگویی تمامی نیازهای نرم افزاری در کوتاهترین زمان ممکن</li>
            <li
              >پایش مستمر سامانه های نرم افزاری ارائه شده در صورت تمایل
              مشتریان</li
            >
          </ul>
        </div>
      </div>

      <!-- -----------section three----------- -->
      <div id="products" class="main-section-three">
        <div>محصولات رایان پردازش کاوش</div>
        <div>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              
            <?php
			        while ( have_posts() ) {
			        the_post();
			        $post_link = get_permalink();
		        ?>	
              <div class="swiper-slide animate__animated animate__fadeIn">
                <div style="background: #ee964f">
				          <?php
					          the_post_thumbnail();
				          ?>
				        </div>
				        <div>
					        <?php the_title(); ?>
				        </div>
				        <div>
					        <?php the_excerpt(); ?>
				        </div>
                <div class="swiper-slide-hover-cover">
                  <a href="<?php the_permalink(); ?>">مشاهده جزییات</a>
                </div>
              </div>
		        <?php } ?>
            </div>
            <button class="swiper-button-next">
              <img src="<?php echo get_template_directory_uri();?>/images/next-btn-icon.png" alt="" />
            </button>
            <button class="swiper-button-prev">
              <img src="<?php echo get_template_directory_uri();?>/images/prev-btn-icon.png" alt="" />
            </button>
            <div class="swiper-pagination"></div>
          </div>
          <div class="wow animate__animated animate__fadeInUpBig"></div>
        </div>
<!-- 		  			            	<div class='home-all-products-btn'>
					<a href='https://cadostore.ir/products/'>مشاهده همه ی محصولات</a>
				</div> -->
      </div>

      <!-- -----------section four----------- -->
      <div class="main-section-four">
        <img class="wow animate__animated animate__fadeInRight" src="<?php echo get_template_directory_uri();?>/images/banner.png" alt="kavoush ads" />
      </div>

      <!-- -----------section five----------- -->
      <div id="services" class="main-section-five">
        <div>خدمات رایان پردازش کاوش</div>
        <div>
          <div class="wow animate__animated animate__fadeInRight">
            <img src="<?php echo get_template_directory_uri();?>/images/service-1.png" alt="kavosh service" />
            <div>
              ارائه دهنده کلیه خدمات تولید، طراحی، نصب و راه اندازی سفارش مشتری،
              خدمات آموزش، خدمات پشتیبانی و راهبری از سامانه ها و سیستم های
              ارائه شده به مشتریان.
            </div>
          </div>
          <div class="wow animate__animated animate__zoomIn">
            <img src="<?php echo get_template_directory_uri();?>/images/service-2.png" alt="kavosh service" />
            <div>
              ارائه دهنده خدمات مشاوره ای و تهیه REP پروژهای نرم افزاری، سیستم
              های اداری، مالی، حقوقی، بانکی و غیره
            </div>
          </div>
          <div class="wow animate__animated animate__fadeInLeft">
            <img src="<?php echo get_template_directory_uri();?>/images/service-3.png" alt="kavosh service" />
            <div>
              طراحی، اجرا، نظارت و مشاوره در پروژه های نرم افزاری و سخت افزاری و
              شبکه های کامپوتری و سایت های اینترنتی
            </div>
          </div>
          <img src="<?php echo get_template_directory_uri();?>/images/services-bg.svg" alt="kavosh landing bg" />
        </div>
      </div>

      <!-- -------------section six-------------- -->
      <div id="consulting" class="main-section-six">
        <div>به راحتی از ما آموزش و مشاوره دریافت کنید</div>
        <div>
          <div class="wow animate__animated animate__fadeInRight">
            <img src="<?php echo get_template_directory_uri();?>/images/educate-1.png" alt="kavosh educating system" />
          </div>
          <div class="wow animate__animated animate__fadeInLeft">
            <img src="<?php echo get_template_directory_uri();?>/images/educate-2.png" alt="kavosh educating system" />
          </div>
          <div class="wow animate__animated animate__fadeInUp">
            <img src="<?php echo get_template_directory_uri();?>/images/educate-3.png" alt="kavosh educating system" />
          </div>
          <div class="wow animate__animated animate__fadeInUp">
            <img src="<?php echo get_template_directory_uri();?>/images/educate-4.png" alt="kavosh educating system" />
          </div>
        </div>
      </div>

      <!-- -------------section seven-------------- -->
      <div id="techs" class="main-section-seven wow animate__animated animate__fadeInUp">
        <div>تکنولوژی های مورد استفاده در رایان پردازش کاوش</div>
        <div>
          <div class="swiper mySwiper techSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-1.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-2.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-3.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-4.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-5.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-1.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-2.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-3.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-4.png" alt="kavosh technologies">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/tech-5.png" alt="kavosh technologies">
              </div>
              </div>
            </div>
            <div class="swiper-pagination-tech"></div>
          </div>
        </div>
      </div>

       <!-- -------------section eight-------------- -->
       <div id="customers" class="main-section-eight wow animate__animated animate__fadeInUp">
        <div>
          <span>کسب و کارهایی که به ما اعتماد کرده اند</span>
          <span>بیش از ۴۰ مجموعه ی بزرگ و کوچک در ایران به رایان پردازش کاوش اطمینان کرده اند</span>
        </div>
        <div>
          <div class="swiper mySwiper techSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-1.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-2.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-3.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-4.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-5.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-1.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-2.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-3.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-4.png" alt="kavosh customers">
              </div>
              <div class="swiper-slide-tech swiper-slide">
                <img src="<?php echo get_template_directory_uri();?>/images/customer-5.png" alt="kavosh customers">
              </div>
              </div>
            </div>
            <div class="swiper-pagination-tech"></div>
          </div>
        </div>
      </div>

       <!-- -------------section nine-------------- -->
       <div class="main-section-nine">
          <div class="wow animate__animated animate__fadeInRight">
            <img src="<?php echo get_template_directory_uri();?>/images/history-circle.png" alt="kavosh history">
            <div>۲۰ سال فعالیت با افتخار</div>
            <ul>
            <li>۱۳۸۱ متولد شدیم : رایان پرداز کاوش با تیمی متشکل از دانش آموختگان دانشگاه تهران</li>
            <li>۱۳۸۵ تولید اولین محصول : با تولید سامانه ... به دنیای محصولات نرم افزاری گام نهادیم</li>
            <li>۱۳۸۶ با ... به میان شما آمدیم : برای اولین بار با محصول ... که در بستر و وب پیاده سازی شده بود و با نام تجاری ... تولید و روانه بازار نرم افزار شد. </li>
            <li>مرهون اعتماد شما، پرتوان برای نیازمندیهای شما و دلگرم به رضایت شما هستیم</li>
          </ul>
          </div>
          <div class="wow animate__animated animate__fadeInLeft">
            <img src="<?php echo get_template_directory_uri();?>/images/history-image.png" alt="kavosh history">
          </div>
       </div>

       <!-- -------------section ten-------------- -->
       <div id="contact" class="main-section-ten">
        <div class="wow animate__animated animate__fadeInRight">
          <img src="<?php echo get_template_directory_uri();?>/images/contact-image.png" alt="contact kavosh">
          <div>با ارسال یادداشت برای کاوش میتوانید به راحتی با ما در ارتباط باشید و مشاوره دریافت کنید.</div>
        </div>
        <div class="wow animate__animated animate__fadeInLeft">
			

          <form method="post" role="form">
            <div>با ما در تماس باشید</div>
            <div class="form-field-mv">
              <span>نام و نام خانوادگی</span>
              <input id="name" name="name" type="text" required>
            </div>
            <div class="form-field-mv">
              <span>ایمیل</span>
              <input  id="email" name="email" type="email" required>
            </div>
            <div class="form-field-mv filed-mv-last">
              <span>یادداشت شما برای کاوش</span>
              <input  id="desc" name="desc" type="text" required>
            </div>
            <input id="home-submit-form" value="ثبت" name="submitbtn" type="submit">
		</form>
		
        </div>
     </div>
    </main>

<?php get_footer(); ?>