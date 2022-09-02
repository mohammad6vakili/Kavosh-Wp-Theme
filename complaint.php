<?php
  /**
   * Template Name:Complaint
   */
  
get_header(); ?>

<!-- -------------------------------complaint----------------------------- -->
    <div class="collabrate">
        <form method="post" role="form" class="collabrate-container">
            <div class="animate__animated animate__fadeIn">
                ثبت شکایات و انتقادات
            </div>
            <div class="animate__animated animate__fadeIn">
                رایان پرداز کاوش بر پایه احترام به نظرات، انتقادات و انتظارات مشتریان فعالیت می نماید. لذا مشتریان می
                توانند در این قسمت
                نسبت به درج و ثبت شکایات، انتقادات و نظرات خود اقدام فرمایند.
                <br>
                رایان پرداز کاوش به عنوان مجری سیستم های ایزو ۱۰۰۰۴ (رضایت مندی مشتریان) و ایزو ۱۰۰۰۲ (رسیدگی به شکایت
                مشتریان) به نظرات
                مشتریان توجه ویژه داشته و آماده شنیدن و پاسخگویی به شکایات و نظرات مشتریان به منظور دستیابی به بهبود
                مستمر و تعالی
                سازمانی می باشد.
                <span style="color: #ed7d23;font-weight: 900;">صمیمانه مشتاق گفتگو با شما هستیم.</span>
            </div>
            <!-- ---------------section three--------------- -->
            <div class="about-section-three">
                <img src="<?php echo get_template_directory_uri();?>/images/services-bg.svg" alt="background" />
                <div class="about-contact-bg-right"></div>
                <a class="comCom" class="wow animate__animated animate__fadeInUp" href="mailto:support@rpkavosh.ir">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/images/email-icon.svg" alt="address" />
                    </div>
                    <div>
                        <span>پشتیبانی</span>
                        <span>support@rpkavosh.ir</span>
                    </div>
                </a>
                <a class="comCom" class="wow animate__animated animate__fadeInLeft" href="tel:+982188580480">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/images/phone-icon.svg" alt="address" />
                    </div>
                    <div>
                        <span>تلفن</span>
                        <span>
                            ۰۲۱-۸۸۵۸۰۴۸۰
                        </span>
                    </div>
                </a>
                <div class="about-contact-bg-left"></div>
            </div>
            <!-- personal section -->
            <div class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp">
                <div class="collabrate-feilds-wrapper-label"></div>
                <div class="collabrate-feilds-wrapper-title">فرم ثبت اطلاعات</div>
                <div class="collabrate-fileds-container">
                    <!-- name -->
                    <div class="collabrate-form-field collabrate-form-field-50">
                        <span>نام و نام خانوادگی</span>
                        <input id="comName" name="comName" required type="text" />
                    </div>
                    <!-- name -->
                    <div class="collabrate-form-field collabrate-form-field-50">
                        <span>نام شرکت / سازمان</span>
                        <input id="comOrg" name="comOrg" required type="text" />
                    </div>
                    <!-- number -->
                    <div class="collabrate-form-field collabrate-form-field-50">
                        <span>شماره موبایل</span>
                        <input id="comMobile" name="comMobile" required type="tel" />
                    </div>
                    <!-- number -->
                    <div class="collabrate-form-field collabrate-form-field-50">
                        <span>شماره تماس</span>
                        <input id="comNumber" name="comNumber" required type="tel" />
                    </div>
                    <!-- email -->
                    <div class="collabrate-form-field collabrate-form-field-50">
                        <span>ایمیل</span>
                        <input id="comEmail" name="comEmail" required type="email" />
                    </div>
                    <!-- desc -->
                    <div class="collabrate-form-field collabrate-form-field-100">
                        <span>متن شکایت / انتقاد / انتظار</span>
                        <textarea id="comDesc" name="comDesc" required></textarea>
                    </div>
                </div>
            </div>

            <!-- submit -->
            <div class="collabrate-submit-wrapper wow animate__animated animate__fadeInUp">
                <input id="com-home-submit-form" name="comSubmitbtn" type="submit" value="ارسال اطلاعات" />
            </div>
        </form>
    </div>

<?php get_footer(); ?>