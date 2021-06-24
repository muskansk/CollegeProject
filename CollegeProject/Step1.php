<html>

<head>
  <title>Details</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
  <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
  <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.23712" type="text/javascript"></script>

  <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.23712" rel="stylesheet" type="text/css" />
  <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.23712" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.23712" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8" />
  <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.23712" />
  <style type="text/css">
    .form-label-left {
      width: 150px;
    }

    .form-line {
      padding-top: 12px;
      padding-bottom: 12px;
    }

    .form-label-right {
      width: 150px;
    }

    .form-all {
      width: 650px;
      color: #555 !important;
      font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
      font-size: 14px;
    }

    .form-radio-item label,
    .form-checkbox-item label,
    .form-grading-label,
    .form-header {
      color: #555;
    }
  </style>

  <style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
    /*PREFERENCES STYLE*/
    .form-all {
      font-family: Lucida Grande, sans-serif;
    }

    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Lucida Grande, sans-serif;
    }

    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Lucida Grande, sans-serif;
    }

    .form-header-group {
      font-family: Lucida Grande, sans-serif;
    }

    .form-label {
      font-family: Lucida Grande, sans-serif;
    }

    .form-label.form-label-auto {

      display: inline-block;
      float: left;
      text-align: left;

    }

    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }

    .form-all {
      max-width: 650px;
      width: 100%;
    }

    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 150px;
    }

    .form-all {
      font-size: 14px
    }

    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }

    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }

    .supernova .form-all,
    .form-all {
      background-color: #fff;
    }

    .form-all {
      color: #555;
    }

    .form-header-group .form-header {
      color: #555;
    }

    .form-header-group .form-subHeader {
      color: #555;
    }

    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }

    .form-sub-label {
      color: #6f6f6f;
    }

    .supernova {
      background-color: undefined;
    }

    .supernova body {
      background: transparent;
    }

    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }

    .supernova {
      background-image: none;
    }

    #stage {
      background-image: none;
    }

    .form-all {
      background-image: none;
    }

    .ie-8 .form-all:before {
      display: none;
    }

    .ie-8 {
      margin-top: auto;
      margin-top: initial;
    }

    /*PREFERENCES STYLE*/
    /*__INSPECT_SEPERATOR__*/
    .form-label.form-label-auto {

      display: inline-block;
      float: left;
      text-align: left;

    }

    /* Injected CSS Code */
  </style>
</head>


<?php 
// session_start();
@$status = $_GET['status'];
echo $status;
?>


<form class="" action="Step1mainfunc.php" method="POST" name="">
  <input type="hidden" name="formID" value="210631635958460" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Left">
            <div class="header-logo">
              <img src="VSIT logo.jpg " alt="" width="160" align="left" class="header-logo-left" />
            </div>
            <div class="header-text httar htvam">
              <h1 id="header_1" class="form-header" data-component="header" align="right">
                Course Dairy
              </h1>
            </div>
          </div>
        </div>
      </li>
 
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="first_3">
          Full Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="name" class="form-input jf-required">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="fname" name="fname" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>

            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
              <input type="text" id="mname" name="mname" class="form-textbox" size="10" value="" data-component="middle" aria-labelledby="label_3 sublabel_3_middle" required="" />
              <label class="form-sub-label" for="middle_3" id="sublabel_3_middle" style="min-height:13px" aria-hidden="false"> Middle Name </label>
            </span>

            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="lname" name="lname" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_phone" id="id_222">
        <label class="form-label form-label-left form-label-auto" id="label_222" for="input_222_area">
          VSIT ID
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_222" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="">
            <input type="text" name="id">
              
            </span>
          </div>
        </div>
      </li>



      <li class="form-line jf-required" data-type="control_phone" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6_area">
          Phone Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="Pno" name="Pno" class="form-textbox validate[required]" value="" data-component="phone" aria-labelledby="label_6 sublabel_6_phone" required="" />
              <label class="form-sub-label" for="input_6_phone" id="sublabel_6_phone" style="min-height:13px" aria-hidden="falSSSse"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_email" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
          Personal E-mail ID
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="Pemail" name="Pemail" class="form-textbox validate[required, Email]" size="30" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4" required="" />
            <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> name.surname@vsit.edu.in </label>
          </span>
        </div>
      </li> 
      
      <li class="form-line" data-type="control_phone" id="id_68">
        <label class="form-label form-label-left form-label-auto" id="label_68" for="input_68_area">
          Office Tel. no
        </label>
        <div id="cid_68" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="Officetel" name="Officetel" class="form-textbox" value="" data-component="phone" aria-labelledby="label_68 sublabel_68_phone" />
              <label class="form-sub-label" for="input_68_phone" id="sublabel_68_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_email" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
          Office E-mail ID
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="Officeemail" name="Officeemail" class="form-textbox validate[required, Email]" size="30" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4" required="" />
            <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> name.surname@vsit.edu.in </label>
          </span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_textbox" id="id_33">
        <label class="form-label form-label-left form-label-auto" id="label_33" for="input_33">
          Name of the Cluster
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_33" class="form-input jf-required">
          <input type="text" id="NOC" name="NOC" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" placeholder=" " data-component="textbox" aria-labelledby="label_33" required="" />
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_textbox" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Cluster Mentor
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <input type="text" id="CM" name="CM" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" placeholder=" " data-component="textbox" aria-labelledby="label_25" required="" />
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_textbox" id="id_27">
        <label class="form-label form-label-left form-label-auto" id="label_27" for="input_27">
          Department
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input jf-required">
          <input type="text" id="CDept" name="CDept" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_27" required="" />
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_textbox" id="id_70">
        <label class="form-label form-label-left form-label-auto" id="label_70" for="input_70">
          Designation
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_70" class="form-input jf-required">
          <input type="text" id="CDesignation" name="CDesignation" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="label_70" required="" />
        </div>
      </li>

      <li class="form-line" data-type="control_phone" id="id_86">
        <label class="form-label form-label-left form-label-auto" id="label_86" for="input_86_area">
          Phone Number /<br> Mobile Number
        </label>
        <div id="cid_86" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="CPno" name="CPno" class="form-textbox" value="" data-component="phone" aria-labelledby="label_86 sublabel_86_phone" />
              <label class="form-sub-label" for="input_86_phone" id="sublabel_86_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>


      <li class="form-line" data-type="control_textbox" id="id_71">
        <label class="form-label form-label-left form-label-auto" id="label_71" for="input_71">
          Academic Cluster Mentor
        </label>
        <div id="cid_71" class="form-input">
          <input type="text" id="ACM" name="ACM" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_71" />
        </div>
      </li>

      <li class="form-line" data-type="control_textbox" id="id_72">
        <label class="form-label form-label-left form-label-auto" id="label_72" for="input_72">
          Institute
        </label>
        <div id="cid_72" class="form-input">
          <input type="text" id="institute" name="institute" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_72" />
        </div>
      </li>

      <li class="form-line" data-type="control_textbox" id="id_73">
        <label class="form-label form-label-left form-label-auto" id="label_73" for="input_73">
          Department
        </label>
        <div id="cid_73" class="form-input">
          <input type="text" id="ACMdept" name="ACMdept" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_73" />
        </div>
      </li>

      <li class="form-line" data-type="control_textbox" id="id_74">
        <label class="form-label form-label-left form-label-auto" id="label_74" for="input_74">
          Designation
        </label>
        <div id="cid_74" class="form-input">
          <input type="text" id="ACMdesignation" name="ACMdesignation" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_74" />
        </div>
      </li>

      <li class="form-line" data-type="control_phone" id="id_85">
        <label class="form-label form-label-left form-label-auto" id="label_85" for="input_85_area">
          Office Tel No.
        </label>
        <div id="cid_85" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="ACMOfficeno" name="ACMOfficeno" class="form-textbox" value="" data-component="phone" aria-labelledby="label_85 sublabel_85_phone" />
              <label class="form-sub-label" for="input_85_phone" id="sublabel_85_phone" style="min-height:13px" aria-hidden="false">
                Phone Number
              </label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line" data-type="control_phone" id="id_86">
        <label class="form-label form-label-left form-label-auto" id="label_86" for="input_86_area">
          Phone Number
        </label>
        <div id="cid_86" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="ACMPhoneno" name="ACMPhoneno" class="form-textbox" value="" data-component="phone" aria-labelledby="label_86 sublabel_86_phone" />
              <label class="form-sub-label" for="input_86_phone" id="sublabel_86_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
          </div>
        </div>
      </li> 


      <li class="form-line" data-type="control_textbox" id="id_75">
        <label class="form-label form-label-left form-label-auto" id="label_75" for="input_75"> 
          Industrial Cluster Mentor </label>
        <div id="cid_75" class="form-input">
          <input type="text" id="companymentor" name="companymentor" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_75" />
        </div>
      </li>

       <li class="form-line" data-type="control_textbox" id="id_76">
        <label class="form-label form-label-left form-label-auto" id="label_76" for="input_76">
          Industrial/Company Name
        </label>
        <div id="cid_76" class="form-input">
          <input type="text" id="companyname" name="companyname" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_76" />
        </div>
      </li>

     
      <li class="form-line" data-type="control_textbox" id="id_77">
        <label class="form-label form-label-left form-label-auto" id="label_77" for="input_77">
          Department
        </label>
        <div id="cid_77" class="form-input">
          <input type="text" id="companydept" name="companydept" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_77" />
        </div>
      </li>
 
      <li class="form-line" data-type="control_textbox" id="id_78">
        <label class="form-label form-label-left form-label-auto" id="label_78" for="input_78">
          Designation
        </label>
        <div id="cid_78" class="form-input">
          <input type="text" id="companydesignation" name="companydesignation" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_78" />
        </div>
      </li> 

    <li class="form-line" data-type="control_textarea" id="id_82">
        <label class="form-label form-label-left form-label-auto" id="label_82" for="input_82">
          Office Address
        </label>
        <div id="cid_82" class="form-input">
          <textarea id="companyadd" class="form-textarea" name="companyadd" cols="40" rows="6" data-component="textarea" aria-labelledby="label_82"></textarea>
        </div>
      </li>

     <li class="form-line" data-type="control_phone" id="id_83">
        <label class="form-label form-label-left form-label-auto" id="label_83" for="input_83_area">
          Office Tel. No.
        </label>
        <div id="cid_83" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="companyofficeno" name="companyofficeno" class="form-textbox" value="" data-component="phone" aria-labelledby="label_83 sublabel_83_phone" />
              <label class="form-sub-label" for="input_83_phone" id="sublabel_83_phone" style="min-height:13px" aria-hidden="false">
                Phone Number
              </label>
            </span>
          </div>
        </div>
      </li>

     <li class="form-line" data-type="control_phone" id="id_84">
        <label class="form-label form-label-left form-label-auto" id="label_84" for="input_84_area">
          Mobile Number
        </label>
        <div id="cid_84" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="companypno" name="companypno" class="form-textbox" value="" data-component="phone" aria-labelledby="label_84 sublabel_84_phone" />
              <label class="form-sub-label" for="input_84_phone" id="sublabel_84_phone" style="min-height:13px" aria-hidden="false">
                Phone Number
              </label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line" data-type="control_button" id="id_67">
        <div id="cid_67" class="form-input-wide">
          <div style="text-align:left" data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_reset_67" type="reset" class="form-submit-reset jf-form-buttons" data-component="button">
              Clear Form
            </button>
            <span>

            </span>
            <input id="submit" name="submit" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" value="Next Page..." data-content="">

          </div>
        </div>
      </li>

    </ul>
  </div>
</form>
</html>