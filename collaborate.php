<?php
  /**
   * Template Name:Collaborate
   */
  
get_header(); ?>       

<!-- ----------------------------------------collabrate---------------------------------------------- -->

<div class="collabrate">
      <form method="post" role="form" class="collabrate-container">
        <div class="animate__animated animate__fadeIn">
          همکاری با رایان پردازش کاوش
        </div>
        <div class="animate__animated animate__fadeIn">
          لطفا برای همکاری با کاوش اطلاعات زیر را تکمیل کنید و برای ما ارسال
          کنید.
        </div>
        <!-- personal section -->
        <div
          class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp"
        >
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
        <div
          class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp"
        >
          <div class="collabrate-feilds-wrapper-label"></div>
          <div class="collabrate-feilds-wrapper-title">بارگذاری مدارک</div>
          <div class="collabrate-fileds-container">
            <!-- file -->
            <div class="collabrate-form-field collabrate-form-field-50">
              <span>مدارک</span>
              <label id="fileContainer">
                <label for="fusk" id="uploadFileButton" type="button"
                  >انتخاب فایل مدرک</label
                >
              </label>
              <span>حداکثر حجم مجاز فایل ۵ مگابایت است</span>
              <input 
                id="fusk"
                name="fusk"
                type="file"
                style="display: none"
             />
            </div>
          </div>
        </div>

        <!-- description -->
        <div
          class="collabrate-feilds-wrapper wow animate__animated animate__fadeInUp"
        >
          <div class="collabrate-feilds-wrapper-label"></div>
          <div class="collabrate-feilds-wrapper-title">توضیحات تکمیلی</div>
          <div class="collabrate-fileds-container">
            <!-- desc -->
            <div class="collabrate-form-field collabrate-form-field-100">
              <span>توضیحات</span>
              <textarea id="colDesc" name="colDesc" required></textarea>
            </div>
          </div>
        </div>

        <!-- submit -->
        <div
          class="collabrate-submit-wrapper wow animate__animated animate__fadeInUp"
        >
          <input
            id="col-home-submit-form"
            name="colSubmitbtn"
            type="submit"
            value="ارسال اطلاعات"
          />
        </div>
      </form>
    </div>

<?php get_footer(); ?>