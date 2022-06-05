<?php
  /**
   * Template Name:About
   */
  
get_header(); ?>       

<!-- ----------------------------------------about---------------------------------------------- -->
    <main id="about" class="about">
      <!-- ---------------section one--------------- -->
      <div class="about-section-one">
        <div class="animate__animated animate__fadeInRight wow">
          <div>درباره رایان پردازش کاوش</div>
          <div>۲۰ سال فعالیت با افتخار</div>
          <div>
            <div>
              ۱۳۸۱ متولد شدیم : رایان پرداز کاوش با تیمی متشکل از دانش آموختگان
              دانشگاه تهران
            </div>
            <div>
              ۱۳۸۵ تولید اولین محصول : با تولید سامانه ... به دنیای محصولات نرم
              افزاری گام نهادیم
            </div>
            <div>
              ۱۳۸۶ با ... به میان شما آمدیم : برای اولین بار با محصول ... که در
              بستر و وب پیاده سازی شده بود و با نام تجاری ... تولید و روانه
              بازار نرم افزار شد.
            </div>
            <div>
              مرهون اعتماد شما، پرتوان برای نیازمندیهای شما و دلگرم به رضایت شما
              هستیم
            </div>
          </div>
        </div>
        <div class="animate__animated animate__bounceIn wow">
          <img src="<?php echo get_template_directory_uri();?>/images/aboutTop.png" alt="about kavosh" />
        </div>
      </div>

      <!-- ---------------section one--------------- -->
      <div class="about-section-two">
        <div class="wow animate__animated animate__fadeInDown">
          تیم رایان پردازش کاوش
        </div>
        <div>
          <div class="wow animate__animated animate__fadeIn">
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
            data-wow-delay=".5s"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
            data-wow-delay="1s"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
            data-wow-delay="1.5s"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
            data-wow-delay=".5s"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
            data-wow-delay="1s"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
          <div
            class="wow animate__animated animate__fadeIn"
            data-wow-delay="1.5s"
          >
            <div><img src="<?php echo get_template_directory_uri();?>/images/avatar.png" alt="avatar" /></div>
            <div>سمانه رضایی</div>
            <div>مدیر محصول</div>
          </div>
        </div>
      </div>

      <!-- ---------------section one--------------- -->
      <div class="about-section-three">
        <img src="<?php echo get_template_directory_uri();?>/images/services-bg.svg" alt="background" />
        <div class="about-contact-bg-right"></div>
        <a href="#mapTitle">
          <div>
            <img src="<?php echo get_template_directory_uri();?>/images/location-icon.svg" alt="address" />
          </div>
          <div>
            <span>آدرس</span>
            <span
              >آدرس : تهران - خیابان قائم مقام فراهانی - بالاتر از خیابان مطهری،
              کوچه شهدا خبرنگار ( دوم سابق ) پلاک ۶، واحد ۲</span
            >
          </div>
        </a>
        <a href="mailto:example@gmail.com">
          <div>
            <img src="<?php echo get_template_directory_uri();?>/images/email-icon.svg" alt="address" />
          </div>
          <div>
            <span>ایمیل</span>
            <span>example@gmail.com</span>
          </div>
        </a>
        <a href="tel:00989390624049">
          <div>
            <img src="<?php echo get_template_directory_uri();?>/images/phone-icon.svg" alt="address" />
          </div>
          <div>
            <span>تلفن</span>
            <span>۸۸۴۰۱۳۸۱-۶-۰۲۱۸۸۵۴۰۴۸</span>
          </div>
        </a>
        <div class="about-contact-bg-left"></div>
      </div>

      <!-- ---------------section four--------------- -->
      <div class="about-section-four">
        <div id="mapTitle">موقعیت ما را پیدا کنید</div>
        <div id="map"></div>
      </div>
    </main>

<?php get_footer(); ?>