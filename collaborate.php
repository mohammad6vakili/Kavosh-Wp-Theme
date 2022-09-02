<?php
  /**
   * Template Name:Collaborate
   */
  
get_header(); ?>

<!-- -------------------------------collabrate----------------------------- -->
  <div class="collabrate">
    <form method="post" role="form" class="collabrate-container">
      <div class="animate__animated animate__fadeIn">
        همکاری با رایان پرداز کاوش
      </div>
      <div class="animate__animated animate__fadeIn">
        خانواده رایان پرداز کاوش با بیش از 100 نفر عضو نگاه ویژه ای به جذب نیروهای مستعد در سراسر کشور دارد. افراد سخت
        کوشی که
        با پشتکار بالا کار می کنند و میل به موفقیت دارند، مسیر توسعه، رشد و تعالی خود را در رایان پرداز کاوش پیدا خواهند
        کرد. ما
        تلاش می کنیم تا در یک محیط پویا، جوان و صمیمانه فرصت رشد و فراگیری را فراهم کنیم. همچنین سیستم جذب نیرو بصورت
        دورکار،
        پایش مستمر نیروها این بستر را فراهم می سازد تا از دورافتاده ترین مناطق کشور عزیزمان استعداد های ناب و خالص کشف و
        به عرصه
        سیستم نرم افزاری کشور معرفی گردند.
        شما میتوانید با ارسال مشخصات و رزومه ی خود به رایان پرداز کاوش بپیوندید یا به صورت مستقیم از طریق ایمیل <a
          style="color: #ed7d23;text-decoration: none;" href="mailto:HR@rpkavosh.ir">HR@rpkavosh.ir</a> با واحد منابع
        انسانی در ارتباط باشید.
      </div>
      <!-- personal section -->
      <div class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp">
        <div class="collabrate-feilds-wrapper-label"></div>
        <div class="collabrate-feilds-wrapper-title">اطلاعات فردی</div>
        <div class="collabrate-fileds-container">
          <!-- name -->
          <div class="collabrate-form-field collabrate-form-field-50">
            <span>نام و نام خانوادگی</span>
            <input id="colName" name="colName" required type="text" />
          </div>
          <!-- number -->
          <div class="collabrate-form-field collabrate-form-field-50">
            <span>تلفن</span>
            <input id="colNumber" name="colNumber" required type="tel" />
          </div>
          <!-- email -->
          <div class="collabrate-form-field collabrate-form-field-50">
            <span>ایمیل</span>
            <input id="colEmail" name="colEmail" required type="email" />
          </div>
        </div>
      </div>

      <!-- file upload section -->
      <div class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp">
        <div class="collabrate-feilds-wrapper-label"></div>
        <div class="collabrate-feilds-wrapper-title">بارگذاری رزومه</div>
        <div class="collabrate-fileds-container">
          <!-- file -->
          <div class="collabrate-form-field collabrate-form-field-50">
            <span>رزومه</span>
            <label id="fileContainer">
              <label for="fusk" id="uploadFileButton" type="button">انتخاب فایل رزومه</label>
            </label>
            <span>حداکثر حجم مجاز فایل ۵ مگابایت است</span>
            <input id="fusk" type="file" name="fusk" style="display: none" />
          </div>
        </div>
      </div>

      <!-- description -->
      <div class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp">
        <div class="collabrate-feilds-wrapper-label"></div>
        <div class="collabrate-feilds-wrapper-title">توضیحات تکمیلی</div>
        <div class="collabrate-fileds-container">
          <!-- desc -->
          <div class="collabrate-form-field collabrate-form-field-100">
            <span>یادداشت شما برای رایان پرداز کاوش</span>
            <textarea id="colDesc" name="colDesc" required></textarea>
          </div>
        </div>
      </div>

      <!-- submit -->
      <div class="collabrate-submit-wrapper wow animate__animated animate__fadeInUp">
        <input id="col-home-submit-form" name="colSubmitbtn" type="submit" value="ارسال اطلاعات" />
      </div>
    </form>
  </div>

<?php get_footer(); ?>