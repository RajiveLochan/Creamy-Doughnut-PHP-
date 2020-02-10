<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="scripts/script.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Mina|Work+Sans|Montserrat');

        .form_container {
            position: absolute;
            height: auto;
            width: 380px;
            display: block;
            z-index: 0;
            margin: 0 auto;
            top: 50px;
            right: 0;
            left: 0;
            padding: 5px;
            border: 5px solid #d94e67;
        }

        .submit_forms {
            position: relative;
            width: 70%;
            height: inherit;
            margin: 0 auto;
            right: 0;
            left: 0;
            border: 3px solid #d94e67;
        }

        .errorReporter {
            position: relative;
            width: 252px;
            height: 30px;
            display: none;
            -webkit-border-radius: 0 0 5px 5px;
            -moz-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
            margin: 0 auto;
            background-color: #ff1133;
            border: 1px solid #ff1133;
        }

        .errorIcon {
            position: absolute;
            width: 18px;
            height: 18px;
            margin: 5px;
            border: solid 1px #ffffff;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            color: #ffffff;
        }

        .errorIcon i {
            position: absolute;
            left: 8px;
            top: 2px;
        }

        .errorIcon i::after {
            content: '';
            position: absolute;
            background-color: #ffffff;
            width: 2px;
            height: 2px;
            top: 10px;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
        }

        .errorIcon i::before {
            content: '';
            position: absolute;
            background-color: #ffffff;
            width: 2px;
            height: 8px;
        }

        .errorText {
            position: relative;
            top: 5px;
            left: 30px;
            font-family: 'Work Sans', sans-serif;
            font-size: 10px;
            color: #ffffff;
        }

        .errorLabel {
            position: relative;
            bottom: 5px;
            font-family: 'Work Sans', sans-serif;
            font-size: 10px;
            color: #ff0000;
        }

        #addProduct_error_reporter {
            width: 80%;
            height: auto;
            margin: 0 10%;
            padding: 2px;
        }

        #addProduct_error_reporter #addProduct_error {
            position: relative;
            padding: 0;
            bottom: 0;
            font-size: 14px;
            text-align: left;
        }

        .formElements {
            position: relative;
            width: 250px;
            height: 30px;
            display: block;
            font-family: 'Work Sans', sans-serif;
            margin: 0 auto;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            border: 1px solid #cccccc;
        }

        #productDescription, #productDescriptionModify {
            font-size: 10px;
            border-width: 1px;
            width: 248px;
            height: 60px;
            resize: none;
        }

        .error {
            -webkit-border-radius: 3px 3px 0 0;
            -moz-border-radius: 3px 3px 0 0;
            border-radius: 3px 3px 0 0;
            border: 1px solid #ff1133;
        }

        .labels {
            display: inline-block;
            margin-top: 10px;
            margin-left: 8px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 14px;
        }

        .labels strong {
            color: #ff0000;
        }

        .rdb_labels {
            position: relative;
            line-height: 12px;
            cursor: pointer;
            display: block;
            margin-left: 10px;
            margin-top: 5px;
            padding: 2px 1em 0 20px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .rdb_labels input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radioCheckmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 14px;
            width: 14px;
            background-color: #cccccc;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .rdb_labels:hover input ~ .radioCheckmark {
            background-color: #5a5353;
        }

        .rdb_labels input:checked ~ .radioCheckmark {
            background-color: #d94e67;
        }

        .radioCheckmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .rdb_labels input:checked ~ .radioCheckmark:after {
            display: block;
        }

        .rdb_labels .radioCheckmark:after {
            top: 4px;
            left: 4px;
            width: 6px;
            height: 6px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background: white;
        }

        ::-webkit-input-placeholder {
            padding-left: 5px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
        }

        ::-moz-placeholder {
            padding-left: 5px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
        }

        :-moz-placeholder {
            padding-left: 5px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
        }

        :-ms-input-placeholder {
            padding-left: 5px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
        }

        ::-ms-input-placeholder {
            padding-left: 5px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
        }

        ::placeholder {
            padding-left: 5px;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 10px;
        }

        .rd_buttons {
            position: relative;
            display: inline;
            float: left;
            clear: both;
            margin-left: 8px;
        }

        input[type="radio"]:checked + label {
            font-weight: bold;
        }

        .submitButton {
            width: 200px;
            height: 40px;
            display: block;
            font-family: 'Work Sans', sans-serif;
            font-size: 18px;
            color: rgba(0, 0, 0, 0.7);
            cursor: pointer;
            margin: 10px auto;
            background: -webkit-gradient(linear, left top, left bottom, from(#d94e67), to(#ffffff));
            background: -webkit-linear-gradient(top, #d94e67, #ffffff);
            background: -moz-linear-gradient(top, #d94e67, #ffffff);
            background: -o-linear-gradient(top, #d94e67, #ffffff);
            background: linear-gradient(to bottom, #d94e67, #ffffff);
            border: 2px solid #d94e67;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .submitButton:hover {
            color: rgba(0, 0, 0, 1);
            -webkit-background-size: 100% 200%;
            -moz-background-size: 100% 200%;
            -o-background-size: 100% 200%;
            background-size: 100% 200%;
        }

        .uploadButton {
            width: 250px;
            height: 30px;
            display: block;
            cursor: pointer;
            color: #d94e67;
            background: #ffffff;
            border: 1px solid #d94e67;
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            -webkit-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .uploadButton:hover {
            background-color: #d94e67;
            color: #ffffff;
        }

        #productImageUploadDiv, #productImageModifyUploadDiv {
            position: relative;
            width: 250px;
            height: 30px;
            margin: 0 auto;
        }

        #productImageButton, #productImageModifyButton {
            position: absolute;
            top: 0;
            left: 0;
        }

        input.hiddenInput {
            position: relative;
            cursor: pointer;
        }

        html {
            height: 100%;

        }

        body {
            position: relative;
            margin: 0;
            padding-bottom: 6rem;
            min-height: 100%;
            font-family: "Helvetica Neue", Arial, sans-serif;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 10000000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 40px;
        }

        .dialog {
            background-color: #fefefe;
            margin: 1% auto 5% auto;
            padding: 0;
            border: 0;
            width: 80%;
            height: auto;
        }

        #productImagePreview {
            width: 100%;
            height: auto;
        }

        #previewImageAnchorDiv, #previewImageModifyAnchorDiv {
            width: 250px;
            height: 20px;
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        #previewImageProgress, #previewImageModifyProgress {
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #previewImageAnchor, #previewImageModifyAnchor {
            display: none;
            color: #1600ff;
            cursor: pointer;
            text-decoration: underline;
        }

        #previewImageAnchor:hover, #previewImageModifyAnchor:hover {
            opacity: 0.7;
        }

        .load_icon {
            color: #000;
            position: relative;
            margin-left: 7px;
            margin-top: 7px;
            width: 4px;
            height: 4px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: solid 1px currentColor;
            -webkit-animation: loadAnimate 1s linear 0s infinite alternate;
            -moz-animation: loadAnimate 1s linear 0s infinite alternate;
            -o-animation: loadAnimate 1s linear 0s infinite alternate;
            animation: loadAnimate 1s linear 0s infinite alternate;
        }

        .load_icon::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -8px;
            width: 4px;
            height: 4px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: solid 1px currentColor;
            -webkit-animation: loadAnimateBefore 500ms linear 0s infinite alternate;
            -moz-animation: loadAnimateBefore 500ms linear 0s infinite alternate;
            -o-animation: loadAnimateBefore 500ms linear 0s infinite alternate;
            animation: loadAnimateBefore 500ms linear 0s infinite alternate;
        }

        .load_icon::after {
            content: '';
            position: absolute;
            top: -1px;
            left: 6px;
            width: 4px;
            height: 4px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: solid 1px currentColor;
            -webkit-animation: loadAnimateAfter 500ms linear 0s infinite alternate;
            -moz-animation: loadAnimateAfter 500ms linear 0s infinite alternate;
            -o-animation: loadAnimateAfter 500ms linear 0s infinite alternate;
            animation: loadAnimateAfter 500ms linear 0s infinite alternate;
        }

        .load_icon,
        .load_icon::before,
        .load_icon::after {
            -webkit-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        @-webkit-keyframes loadAnimate {
            from {
                left: 0;
            }
            to {
                left: 230px;
            }
        }

        @-moz-keyframes loadAnimate {
            from {
                left: 0;
            }
            to {
                left: 230px;
            }
        }

        @-o-keyframes loadAnimate {
            from {
                left: 0;
            }
            to {
                left: 230px;
            }
        }

        @keyframes loadAnimate {
            from {
                left: 0;
            }
            to {
                left: 230px;
            }
        }

        @-webkit-keyframes loadAnimateBefore {
            from {
                left: -20px;
            }
            to {
                left: 15px;
            }
        }

        @-moz-keyframes loadAnimateBefore {
            from {
                left: -20px;
            }
            to {
                left: 15px;
            }
        }

        @-o-keyframes loadAnimateBefore {
            from {
                left: -20px;
            }
            to {
                left: 15px;
            }
        }

        @keyframes loadAnimateBefore {
            from {
                left: -20px;
            }
            to {
                left: 15px;
            }
        }

        @-webkit-keyframes loadAnimateAfter {
            from {
                left: 15px;
            }
            to {
                left: -20px;
            }
        }

        @-moz-keyframes loadAnimateAfter {
            from {
                left: 15px;
            }
            to {
                left: -20px;
            }
        }

        @-o-keyframes loadAnimateAfter {
            from {
                left: 15px;
            }
            to {
                left: -20px;
            }
        }

        @keyframes loadAnimateAfter {
            from {
                left: 15px;
            }
            to {
                left: -20px;
            }
        }

        .close {
            position: absolute;
            right: 10%;
            top: 40px;
            float: right;
            color: #000;
            font-size: 55px;
            z-index: 1;
            font-weight: bold;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        .animate {
            -webkit-animation: animatezoom 1s;
            -moz-animation: animatezoom 1s;
            -o-animation: animatezoom 1s;
            animation: animatezoom 1s;
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @-moz-keyframes animatezoom {
            from {
                -moz-transform: scale(0);
                transform: scale(0)
            }
            to {
                -moz-transform: scale(1);
                transform: scale(1)
            }
        }

        @-o-keyframes animatezoom {
            from {
                -o-transform: scale(0);
                transform: scale(0)
            }
            to {
                -o-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                -o-transform: scale(0);
                transform: scale(0)
            }
            to {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1)
            }
        }

        #bottom_toast {
            position: fixed;
            visibility: hidden;
            min-width: 400px;
            margin-left: -220px;
            background-color: #ffffff;
            border: 2px solid #d94e67;
            color: #d94e67;
            text-align: center;
            font-family: 'Montserrat', 'verdana', sans-serif;
            font-size: 14px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            padding: 16px;
            z-index: 10;
            left: 50%;
            bottom: 30px;
        }

        #bottom_toast.visible {
            visibility: visible;
            -webkit-animation: fadein 500ms, fadeout 500ms 2500ms;
            -moz-animation: fadein 500ms, fadeout 500ms 2500ms;
            -o-animation: fadein 500ms, fadeout 500ms 2500ms;
            animation: fadein 500ms, fadeout 500ms 2500ms;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-moz-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-o-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @-moz-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @-o-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @import url('https://fonts.googleapis.com/css?family=Mina|Work+Sans|Montserrat');

        .page_container {
            position: absolute;
            width: 100%;
            height: auto;
            right: 0;
            left: 0;
            margin: 0 auto;
            top: 30px;
        }

        .menu_stepper {
            position: absolute;
            display: block;
            height: 50px;
            width: 400px;
            margin: 0 auto;
            right: 0;
            left: 0;
        }

        .tab_buttons {
            position: relative;
            width: 50%;
            height: 50px;
            float: left;
            background-color: #ffffff;
            color: #d94e67;
            border: 1px #d94e67 solid;
        }

        .tab_buttons:hover {
            opacity: 0.7;
        }

        .tab_buttons.current {
            background-color: #d94e67;
            color: #ffffff;
            border-style: none;
        }

        .tabcontent {
            position: absolute;
            width: 400px;
            height: auto;
            display: none;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            max-width: 400px;
            background-color: transparent;
        }
    </style>
</head>

<body>
<div class="page_container">
    <div class="menu_stepper">
        <input id="add_products_button" class="tab_buttons" value="Add Products" type="button"
               onclick="Opentab('add_product_div', 'add_products_button');">
        <input id="modify_products_button" class="tab_buttons" value="Modify Products" type="button"
               onclick="Opentab('modify_product_div', 'modify_products_button');">
    </div>
    <div id="add_product_div" class="tabcontent">
        <div id="add_products">
            <div class="form_container" id="product_form">
                <h3>Add Products</h3>
                <form id="add_product_form" name="add_product_form" class="submit_forms" method="post" action=""
                      onsubmit="postForm(this); return false;" enctype="multipart/form-data">
                    <div id="addProduct_error_reporter"><span id="addProduct_error"
                                                              class="errorReporter"></span></div>
                    <label for="productTitle" class="labels">Product Name<strong>*</strong></label>
                    <input id="productTitle" name="productTitle" class="formElements"
                           placeholder="50 characters maximum"
                           title="Product title here" type="text" onkeydown="return FilterTitle(event);" required>
                    <div class="errorReporter" id="productTitleError">
                        <div class="errorIcon"><i></i></div>
                        <span class="errorText" id="errorText_Title"></span>
                    </div>
                    <label for="productPrice" class="labels">Product Price<strong>*</strong></label>
                    <input id="productPrice" name="productPrice" class="formElements" type="text"
                           placeholder="Price in LKR"
                           title="Product price in here" onkeydown="return FilterPrice(event);" required>
                    <div class="errorReporter" id="productPriceError">
                        <div class="errorIcon"><i></i></div>
                        <span class="errorText" id="errorText_Price"></span>
                    </div>
                    <label for="productTypeDiv" class="labels">Product Type<strong>*</strong></label>
                    <span class="errorLabel" id="errorComboLabel"></span>
                    <div id="productTypeDiv">
                        <label for="typeDoughnuts" class="rdb_labels">
                            Doughnuts
                            <input id="typeDoughnuts" name="productType" value="Doughnuts" class="rd_buttons"
                                   type="radio">
                            <span class="radioCheckmark"></span>
                        </label>
                        <label for="typeCoffee" class="rdb_labels">
                            Coffee
                            <input id="typeCoffee" name="productType" value="Coffee" class="rd_buttons" type="radio">
                            <span class="radioCheckmark"></span>
                        </label>
                    </div>
                    <label for="productDescription" class="labels">Product Description<strong>*</strong></label>
                    <textarea id="productDescription" name="productDescription" class="formElements"
                              placeholder="400 characters maximum" title="Product Description in here" maxlength="400"
                              required></textarea>
                    <div class="errorReporter" id="productDescriptionError">
                        <div class="errorIcon"><i></i></div>
                        <span class="errorText" id="errorText_Description"></span>
                    </div>
                    <label for="productImageUploadDiv" class="labels">Product Image<strong>*</strong></label>
                    <span class="errorLabel" id="errorImageLabel"></span>
                    <div id="productImageUploadDiv" class="productImageUploadDivClass">
                        <input id="productImageUpload" name="productImageUpload" class="hiddenInput" type="file"
                               size="50"
                               accept=".jpg, .png, .jpeg, .gif" hidden>
                        <div id="productImageButton" class="productImageButtonDiv">
                            <button id="imageUploadButton" class="uploadButton" title="Upload Image" type="button">
                                Upload
                                Image
                            </button>
                        </div>
                    </div>
                    <div id="previewImageAnchorDiv">
                        <span id="previewImageProgress"><div class="load_icon"></div></span>
                        <a id="previewImageAnchor" onclick="imagePreview(); return false;">Preview Image</a>
                    </div>
                    <input id="submitAccount" name="submitAccount" class="submitButton" value="Add Product"
                           type="submit"
                           onclick="return formValidation();" title="Add the product to the database">
                </form>
            </div>
        </div>
    </div>
    <div id="modify_product_div" class="tabcontent">
        <div id="modify_products">
            <div class="form_container" id="product_form_modify">
                <h3>Modify Products</h3>
                <form id="modify_product_form" name="modify_product_form" class="submit_forms" method="post" action=""
                      onsubmit="postForm2(this); return false;" enctype="multipart/form-data">
                    <div id="modifyProduct_error_reporter"><span id="modifyProduct_error"
                                                                 class="errorReporter"></span></div>
                    <label for="productTitleModify" class="labels">Search Product Name<strong>*</strong></label>
                    <datalist id="productSuggestions"></datalist>
                    <input id="productTitleModify" name="productTitleModify" class="formElements"
                           placeholder="50 characters maximum"
                           title="Product title here" type="text" onkeydown="return FilterTitle(event);"
                           list="productSuggestions" required>
                    <div class="errorReporter" id="productTitleModifyError">
                        <div class="errorIcon"><i></i></div>
                        <span class="errorText" id="errorText_ModifyTitle"></span>
                    </div>
                    <label for="productPriceModify" class="labels">Product Price<strong>*</strong></label>
                    <input id="productPriceModify" name="productPriceModify" class="formElements" type="text"
                           placeholder="Price in LKR"
                           title="Product price in here" onkeydown="return FilterPrice(event);" required>
                    <div class="errorReporter" id="productPriceModifyError">
                        <div class="errorIcon"><i></i></div>
                        <span class="errorText" id="errorText_ModifyPrice"></span>
                    </div>
                    <label for="productTypeModifyDiv" class="labels">Product Type<strong>*</strong></label>
                    <span class="errorLabel" id="errorComboLabelModify"></span>
                    <div id="productTypeModifyDiv">
                        <label for="typeDoughnutsModify" class="rdb_labels">
                            Doughnuts
                            <input id="typeDoughnutsModify" name="productTypeModify" value="Doughnuts"
                                   class="rd_buttons" type="radio">
                            <span class="radioCheckmark"></span>
                        </label>
                        <label for="typeCoffeeModify" class="rdb_labels">
                            Coffee
                            <input id="typeCoffeeModify" name="productTypeModify" value="Coffee" class="rd_buttons"
                                   type="radio">
                            <span class="radioCheckmark"></span>
                        </label>
                    </div>
                    <label for="productDescriptionModify" class="labels">Product Description<strong>*</strong></label>
                    <textarea id="productDescriptionModify" name="productDescriptionModify" class="formElements"
                              placeholder="400 characters maximum" title="Product Description in here" maxlength="400"
                              required></textarea>
                    <div class="errorReporter" id="productDescriptionModifyError">
                        <div class="errorIcon"><i></i></div>
                        <span class="errorText" id="errorText_ModifyDescription"></span>
                    </div>
                    <label for="productImageModifyUploadDiv" class="labels">Product Image<strong>*</strong></label>
                    <span class="errorLabel" id="errorImageModifyLabel"></span>
                    <div id="productImageModifyUploadDiv" class="productImageUploadDivClass">
                        <input id="productImageModifyUpload" name="productImageModifyUpload" class="hiddenInput"
                               type="file" size="50"
                               accept=".jpg, .png, .jpeg, .gif" hidden>
                        <div id="productImageModifyButton" class="productImageButtonDiv">
                            <button id="imageUploadModifyButton" class="uploadButton" title="Upload Image"
                                    type="button">Upload
                                Image
                            </button>
                        </div>
                    </div>
                    <div id="previewImageModifyAnchorDiv">
                        <span id="previewImageModifyProgress"><div class="load_icon"></div></span>
                        <a id="previewImageModifyAnchor" onclick="imagePreview2(); return false;">Preview Image</a>
                    </div>
                    <input id="submitModifyAccount" name="submitModifyAccount" class="submitButton"
                           value="Modify Product" type="submit"
                           onclick="return formValidation2();" title="Modify product Details">
                </form>
            </div>
        </div>
    </div>
</div>
<div id="bottom_toast"></div>
<div id="productImagePreviewModal" class="modal">
    <span id="closeImagePreview" class="close" title="Close">&times;</span>
    <div class="dialog animate">
        <img id="productImagePreview" src="">
    </div>
</div>
<script>
    function FilterPrice(event) {
        let keyCode = ('which' in event) ? event.which : event.keyCode;
        isNumeric = (keyCode >= 48 && keyCode <= 57) || (keyCode >= 96 && keyCode <= 105) || keyCode === 46 || keyCode === 190 || keyCode === 110;
        modifiers = (event.altKey || event.ctrlKey || keyCode === 8 || (keyCode >= 37 && keyCode <= 40));
        return isNumeric || modifiers;
    }

    function FilterTitle(event) {
        let keyCode = ('which' in event) ? event.which : event.keyCode;
        isNumeric = (keyCode >= 48 && keyCode <= 57) || (keyCode >= 96 && keyCode <= 105);
        modifiers = (event.altKey || event.ctrlKey || event.shiftKey || keyCode === 8 || (keyCode >= 37 && keyCode <= 40));
        return !isNumeric || modifiers;
    }

    function formValidation(o) {
        let title = document.add_product_form.productTitle || o.productTitle;
        let price = document.add_product_form.productPrice || o.productPrice;
        let type = document.add_product_form.productType || o.productType;
        let description = document.add_product_form.productDescription || o.productDescription;
        let image = document.add_product_form.productImageUpload || o.productImageUpload;

        if (emptyField(title, price, type, description, image)) {
            if (validateProductTitle(title)) {
                if (validateProductPrice(price)) {
                    if (checkingMaxLength(description)) {
                        if (checkingRadioButtons(type)) {
                            if (checkImage(image)) {
                                resetFormErrors();
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    function emptyField(title, price, type, description, image) {
        let title_len = trimInput(title.value).length;
        let price_len = trimInput(price.value).length;
        let description_len = trimInput(description.value).length;
        checkingRadioButtons(type);
        checkImage(image);
        if (title_len === 0 || price_len === 0 || description_len === 0) {
            if (title_len === 0) {
                document.getElementById('productTitleError').style.display = "block";
                document.getElementById('errorText_Title').innerHTML = "The marked fields are required";
                document.getElementById('productTitle').classList.add("error");
            } else {
                document.getElementById('productTitleError').style.display = "none";
                document.getElementById('errorText_Title').innerHTML = "";
                document.getElementById('productTitle').classList.remove("error");
            }
            if (price_len === 0) {
                document.getElementById('productPriceError').style.display = "block";
                document.getElementById('errorText_Price').innerHTML = "The marked fields are required";
                document.getElementById('productPrice').classList.add("error");
            } else {
                document.getElementById('productPriceError').style.display = "none";
                document.getElementById('errorText_Price').innerHTML = "";
                document.getElementById('productPrice').classList.remove("error");
            }
            if (description_len === 0) {
                document.getElementById('productDescriptionError').style.display = "block";
                document.getElementById('errorText_Description').innerHTML = "The marked fields are required";
                document.getElementById('productDescription').classList.add("error");
            } else {
                document.getElementById('productDescriptionError').style.display = "none";
                document.getElementById('errorText_Description').innerHTML = "";
                document.getElementById('productDescription').classList.remove("error");
            }
            return false;
        } else {
            resetFormErrors();
            return true;
        }
    }

    function validateProductTitle(title) {
        let format = /^[A-Za-z]|(®™)+$/;
        if (trimInput(title.value).match(format)) {
            document.getElementById('productTitleError').style.display = "none";
            document.getElementById('errorText_Title').innerHTML = "";
            document.getElementById('productTitle').classList.remove("error");
            return true;
        } else {
            document.getElementById('productTitleError').style.display = "block";
            document.getElementById('errorText_Title').innerHTML = "Please use only characters";
            document.getElementById('productTitle').classList.add("error");
            title.focus();
            return false;
        }
    }

    function validateProductPrice(price) {
        let format = /^(([1-9]\d{0,2}(,\d{3})*)|0)?\.\d{1,2}$/;
        //let format = /^[1-9]\d*(((,\d{3}){1})?(\.\d{0,2})?)$/;
        if (price.value.match(format)) {
            document.getElementById('productPriceError').style.display = "none";
            document.getElementById('errorText_Price').innerHTML = "";
            document.getElementById('productPrice').classList.remove("error");
            return true;
        } else {
            document.getElementById('productPriceError').style.display = "block";
            document.getElementById('errorText_Price').innerHTML = "Please enter the price in a correct format";
            document.getElementById('productPrice').classList.add("error");
            price.focus();
            return false;
        }
    }

    function checkingRadioButtons(type) {
        let rdbChecked = false;
        for (let i = 0; i < type.length; i++) {
            let el = type[i];
            if (el.type === 'radio' && el.checked) {
                rdbChecked = true;
            }
        }
        if (rdbChecked === true) {
            document.getElementById('errorComboLabel').innerHTML = "";
            return true;
        } else {
            document.getElementById('errorComboLabel').innerHTML = "Select a product type";
            return false;
        }
    }

    function checkingMaxLength(description) {
        let description_len = trimInput(description.value).length;
        if (description_len > 400) {
            document.getElementById('productDescriptionError').style.display = "block";
            document.getElementById('errorText_Description').innerHTML = "Maximum character length of 400";
            document.getElementById('productDescription').classList.add("error");
            description.focus();
            return false;
        } else {
            document.getElementById('productDescriptionError').style.display = "none";
            document.getElementById('errorText_Description').innerHTML = "";
            document.getElementById('productDescription').classList.remove("error");
            return true;
        }
    }

    function checkImage(image) {
        if (image.value.length === 0) {
            document.getElementById('errorImageLabel').innerHTML = "Select a product image";
            return false;
        } else {
            document.getElementById('errorImageLabel').innerHTML = "";
            return true;
        }
    }

    function resetFormErrors() {
        document.getElementById('errorComboLabel').innerHTML = "";
        document.getElementById('errorImageLabel').innerHTML = "";
        let errorDivs = ['productTitleError', 'productPriceError', 'productDescriptionError'];
        let errorTexts = ['errorText_Title', 'errorText_Price', 'errorText_Description'];
        let elementClasses = ['productTitle', 'productPrice', 'productDescription'];
        for (let i = 0; i < 3; i++) {
            document.getElementById(errorDivs[i]).style.display = "none";
            document.getElementById(errorTexts[i]).innerHTML = "";
            document.getElementById(elementClasses[i]).classList.remove("error");
        }
    }

    function resetForm() {
        let form = document.add_product_form || document.getElementById('add_product_form');
        form.reset();
        document.getElementById('productImagePreview').src = '';
        document.getElementById('imageUploadButton').innerText = 'Upload Image';
        document.getElementById('previewImageAnchor').style.display = 'none';
        document.getElementById('previewImageProgress').style.display = 'none';
    }

    function trimInput(value) {
        return value.replace(/^\s+|\s+$/gm, '');
    }

    window.onload = function () {
        resetForm();
        resetFormErrors();
        resetForm2();
        resetFormErrors2();
        getProductDataList();
        let input = document.getElementById('productImageUpload');
        let uploadButton = document.getElementById('imageUploadButton');
        if (input.type === 'file') {
            input.className = 'hiddenInput';
            input.relatedElement = uploadButton;
            input.onchange = function (event) {
                getImage(event);
            };
            input.onmouseover = function () {
                this.relatedElement.style.color = '#ffffff';
                this.relatedElement.style.backgroundColor = '#d94e67';
            };
            input.onmouseout = function () {
                this.relatedElement.style.color = '#d94e67';
                this.relatedElement.style.backgroundColor = '#ffffff';
            };
            uploadButton.onclick = function () {
                input.click();
            }
        }

        let input2 = document.getElementById('productImageModifyUpload');
        let uploadButton2 = document.getElementById('imageUploadModifyButton');
        if (input2.type === 'file') {
            input2.className = 'hiddenInput';
            input2.relatedElement = uploadButton2;
            input2.onchange = function (event) {
                getImage2(event);
            };
            input2.onmouseover = function () {
                this.relatedElement.style.color = '#ffffff';
                this.relatedElement.style.backgroundColor = '#d94e67';
            };
            input2.onmouseout = function () {
                this.relatedElement.style.color = '#d94e67';
                this.relatedElement.style.backgroundColor = '#ffffff';
            };
            uploadButton2.onclick = function () {
                input2.click();
            }
        }
    };

    function generateFileName(value) {
        return value.length > 20 ? value.substr(0, 20) + '....' : value;
    }

    function getImage(event) {
        if (window.File && window.FileReader) {
            let files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                let file = files[i];
                if (file.type.match('image.*')) {
                    let reader = new FileReader();
                    reader.onloadstart = function () {
                        document.getElementById('previewImageAnchor').style.display = 'none';
                        document.getElementById('previewImageProgress').style.display = 'block';
                    };
                    reader.onprogress = function (event) {

                    };
                    reader.onloadend = function () {
                        loadImage(this.result, file);
                        document.getElementById('imageUploadButton').innerHTML = generateFileName(file.name);
                        console.log(file.name);
                    };
                    reader.readAsDataURL(file);
                }
            }
        } else {
            console.log('The File APIs are not fully supported in this browser.');
        }
    }

    function loadImage(source, file) {
        let image = document.getElementById('productImagePreview');
        image.file = file;
        image.onloadend = function () {
            document.getElementById('previewImageProgress').style.display = 'none';
            document.getElementById('previewImageAnchor').style.display = 'block';
            console.log('Successfully loaded image: ' + file.name + ' of size:' + file.size);
        };
        image.onerror = function () {
            console.log('Error while loading image: ' + file.name);
        };
        image.src = source;
        return image;
    }

    let modal = document.getElementById('productImagePreviewModal');

    function imagePreview() {
        modal.style.display = "block";
        document.getElementById('closeImagePreview').onclick = function () {
            modal.style.display = "none";
        };
    }

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    /*
    let ajaxRequest;  // The ajax request object
    //Cross-Browser Support Code
    function ajaxFunction() {
        try {
            // Opera 8.0+, Firefox, Safari
            ajaxRequest = new XMLHttpRequest();
        } catch (e) {
            // Internet Explorer Browsers
            try {
                ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    // Something went wrong
                    console.log('Browser not supported');
                    return false;
                }
            }
        }
    }
    */

    function postForm(e) {
        if (window.FormData !== undefined) {
            let ajaxRequest = ajaxFunction(); //initializing the ajax object
            let formData = new FormData(e);
            ajaxRequest.onreadystatechange = function () {
                submitResponse(this.responseText);
            };
            ajaxRequest.open('POST', 'includes/addproduct.php', true);
            ajaxRequest.send(formData);
        }
    }

    function submitResponse(responseCode) {
        //code:
        //   1: 'One row affected, submitted successfully'
        //   2: 'Form Data not passed properly'
        //  03: 'Validation Error, empty values'
        //-223: 'Could not copy the image to temporary folder'
        //-113: 'Image not found'
        //  23: 'Validation Error'

        switch (responseCode) {
            case '1':
                showToast('Successfully added the product to the database');
                document.getElementById('addProduct_error_reporter').style.color = '#66ff64';
                document.getElementById('addProduct_error_reporter').innerText = 'Successfully submitted';
                resetForm();
                resetFormErrors();
                break;
            case '2':
                document.getElementById('addProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('addProduct_error_reporter').innerText = 'Form data could not be sent properly';
                break;
            case '03':
                console.log('Validation Error');
                formValidation();
                break;
            case '-223':
                console.log('Unable to copy image');
                document.getElementById('addProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('addProduct_error_reporter').innerText = 'Could not copy the image, please try again';
                break;
            case '-113':
                console.log('Image not found');
                document.getElementById('addProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('addProduct_error_reporter').innerText = 'The image was not found, please upload it again';
                break;
            case '23':
                console.log('Validation Error');
                formValidation();
                break;
            case '-1':
                document.getElementById('addProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('addProduct_error_reporter').innerText = 'Could not insert into the database';
                resetForm();
                resetFormErrors();
                break;
            default:
                console.log('Some unknown error, Error Code: ' + responseCode);
                break;
        }
    }

    //shows a toast message
    function showToast(message) {
        let toast = document.getElementById("bottom_toast");
        toast.innerText = message;
        toast.className = "visible";
        setTimeout(function () {
            toast.className = toast.className.replace("visible", "");
        }, 3000);
    }

</script>
<script>
    function Opentab(tabName, tabId) {
        let i, tabcontent, tabbutton;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tabbutton = document.getElementsByClassName("tab_buttons");
        for (i = 0; i < tabbutton.length; i++) {
            tabbutton[i].className = tabbutton[i].className.replace(" current", "");
        }
        document.getElementById(tabName).style.display = "block";
        document.getElementById(tabId).className += " current";
    }

    // Get the default element and click on it
    document.getElementById("add_products_button").click();
</script>
<script>
    function formValidation2(o) {
        let title = document.modify_product_form.productTitleModify || o.productTitleModify;
        let price = document.modify_product_form.productPriceModify || o.productPriceModify;
        let type = document.modify_product_form.productTypeModify || o.productTypeModify;
        let description = document.modify_product_form.productDescriptionModify || o.productDescriptionModify;
        let image = document.modify_product_form.productImageModifyUpload || o.productImageModifyUpload;

        if (emptyField2(title, price, type, description, image)) {
            if (validateProductTitle2(title)) {
                if (validateProductPrice2(price)) {
                    if (checkingMaxLength2(description)) {
                        if (checkingRadioButtons2(type)) {
                            if (checkImage2(image)) {
                                resetFormErrors2();
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    function emptyField2(title, price, type, description, image) {
        let title_len = trimInput(title.value).length;
        let price_len = trimInput(price.value).length;
        let description_len = trimInput(description.value).length;
        checkingRadioButtons2(type);
        checkImage2(image);
        if (title_len === 0 || price_len === 0 || description_len === 0) {
            if (title_len === 0) {
                document.getElementById('productTitleModifyError').style.display = "block";
                document.getElementById('errorText_ModifyTitle').innerHTML = "The marked fields are required";
                document.getElementById('productTitleModify').classList.add("error");
            } else {
                document.getElementById('productTitleModifyError').style.display = "none";
                document.getElementById('errorText_ModifyTitle').innerHTML = "";
                document.getElementById('productTitleModify').classList.remove("error");
            }
            if (price_len === 0) {
                document.getElementById('productPriceModifyError').style.display = "block";
                document.getElementById('errorText_ModifyPrice').innerHTML = "The marked fields are required";
                document.getElementById('productPriceModify').classList.add("error");
            } else {
                document.getElementById('productPriceModifyError').style.display = "none";
                document.getElementById('errorText_ModifyPrice').innerHTML = "";
                document.getElementById('productPriceModify').classList.remove("error");
            }
            if (description_len === 0) {
                document.getElementById('productDescriptionModifyError').style.display = "block";
                document.getElementById('errorText_ModifyDescription').innerHTML = "The marked fields are required";
                document.getElementById('productDescriptionModify').classList.add("error");
            } else {
                document.getElementById('productDescriptionModifyError').style.display = "none";
                document.getElementById('errorText_ModifyDescription').innerHTML = "";
                document.getElementById('productDescriptionModify').classList.remove("error");
            }
            return false;
        } else {
            resetFormErrors2();
            return true;
        }
    }

    function validateProductTitle2(title) {
        let format = /^[A-Za-z]|(®™)+$/;
        if (trimInput(title.value).match(format)) {
            document.getElementById('productTitleModifyError').style.display = "none";
            document.getElementById('errorText_ModifyTitle').innerHTML = "";
            document.getElementById('productTitleModify').classList.remove("error");
            return true;
        } else {
            document.getElementById('productTitleModifyError').style.display = "block";
            document.getElementById('errorText_ModifyTitle').innerHTML = "Please use only characters";
            document.getElementById('productTitleModify').classList.add("error");
            title.focus();
            return false;
        }
    }

    function validateProductPrice2(price) {
        let format = /^(([1-9]\d{0,2}(,\d{3})*)|0)?\.\d{1,2}$/;
        //let format = /^[1-9]\d*(((,\d{3}){1})?(\.\d{0,2})?)$/;
        if (price.value.match(format)) {
            document.getElementById('productPriceModifyError').style.display = "none";
            document.getElementById('errorText_ModifyPrice').innerHTML = "";
            document.getElementById('productPriceModify').classList.remove("error");
            return true;
        } else {
            document.getElementById('productPriceModifyError').style.display = "block";
            document.getElementById('errorText_ModifyPrice').innerHTML = "Please enter the price in a correct format";
            document.getElementById('productPriceModify').classList.add("error");
            price.focus();
            return false;
        }
    }

    function checkingRadioButtons2(type) {
        let rdbChecked = false;
        for (let i = 0; i < type.length; i++) {
            let el = type[i];
            if (el.type === 'radio' && el.checked) {
                rdbChecked = true;
            }
        }
        if (rdbChecked === true) {
            document.getElementById('errorComboLabelModify').innerHTML = "";
            return true;
        } else {
            document.getElementById('errorComboLabelModify').innerHTML = "Select a product type";
            return false;
        }
    }

    function checkingMaxLength2(description) {
        let description_len = trimInput(description.value).length;
        if (description_len > 400) {
            document.getElementById('productDescriptionModifyError').style.display = "block";
            document.getElementById('errorText_ModifyDescription').innerHTML = "Maximum character length of 400";
            document.getElementById('productDescriptionModify').classList.add("error");
            description.focus();
            return false;
        } else {
            document.getElementById('productDescriptionModifyError').style.display = "none";
            document.getElementById('errorText_ModifyDescription').innerHTML = "";
            document.getElementById('productDescriptionModify').classList.remove("error");
            return true;
        }
    }

    function checkImage2(image) {
        if (image.value.length === 0) {
            document.getElementById('errorImageModifyLabel').innerHTML = "Select a product image";
            return false;
        } else {
            document.getElementById('errorImageModifyLabel').innerHTML = "";
            return true;
        }
    }

    function resetFormErrors2() {
        document.getElementById('errorComboLabelModify').innerHTML = "";
        document.getElementById('errorImageModifyLabel').innerHTML = "";
        let errorDivs = ['productTitleModifyError', 'productPriceModifyError', 'productDescriptionModifyError'];
        let errorTexts = ['errorText_ModifyTitle', 'errorText_ModifyPrice', 'errorText_ModifyDescription'];
        let elementClasses = ['productTitleModify', 'productPriceModify', 'productDescriptionModify'];
        for (let i = 0; i < 3; i++) {
            document.getElementById(errorDivs[i]).style.display = "none";
            document.getElementById(errorTexts[i]).innerHTML = "";
            document.getElementById(elementClasses[i]).classList.remove("error");
        }
    }

    function resetForm2() {
        let form = document.modify_product_form || document.getElementById('modify_product_form');
        form.reset();
        document.getElementById('productImagePreview').src = '';
        document.getElementById('imageUploadModifyButton').innerText = 'Upload Image';
        document.getElementById('previewImageModifyAnchor').style.display = 'none';
        document.getElementById('previewImageModifyProgress').style.display = 'none';
    }

    function getImage2(event) {
        if (window.File && window.FileReader) {
            let files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                let file = files[i];
                if (file.type.match('image.*')) {
                    let reader = new FileReader();
                    reader.onloadstart = function () {
                        document.getElementById('previewImageModifyAnchor').style.display = 'none';
                        document.getElementById('previewImageModifyProgress').style.display = 'block';
                    };
                    reader.onprogress = function (event) {

                    };
                    reader.onloadend = function () {
                        loadImage2(this.result, file);
                        document.getElementById('imageUploadModifyButton').innerHTML = generateFileName(file.name);
                        console.log(file.name);
                    };
                    reader.readAsDataURL(file);
                }
            }
        } else {
            console.log('The File APIs are not fully supported in this browser.');
        }
    }

    function loadImage2(source, file) {
        let image = document.getElementById('productImagePreview');
        image.file = file;
        image.onloadend = function () {
            document.getElementById('previewImageModifyProgress').style.display = 'none';
            document.getElementById('previewImageModifyAnchor').style.display = 'block';
            console.log('Successfully loaded image: ' + file.name + ' of size:' + file.size);
        };
        image.onerror = function () {
            console.log('Error while loading image: ' + file.name);
        };
        image.src = source;
        return image;
    }

    function imagePreview2() {
        modal.style.display = "block";
        document.getElementById('closeImagePreview').onclick = function () {
            modal.style.display = "none";
        };
    }

    function postForm2(e) {
        if (window.FormData !== undefined) {
            let ajaxRequest = ajaxFunction(); //initializing the ajax object
            let formData = new FormData(e);
            ajaxRequest.onreadystatechange = function () {
                submitResponse2(this.responseText);
            };
            ajaxRequest.open('POST', 'addproduct.php', true);
            ajaxRequest.send(formData);
        }
    }

    function submitResponse2(responseCode) {
        //code:
        //   1: 'One row affected, submitted successfully'
        //   2: 'Form Data not passed properly'
        //  03: 'Validation Error, empty values'
        //-223: 'Could not copy the image to temporary folder'
        //-113: 'Image not found'
        //  23: 'Validation Error'

        switch (responseCode) {
            case '1':
                showToast('Successfully modified the product details');
                document.getElementById('modifyProduct_error_reporter').style.color = '#66ff64';
                document.getElementById('modifyProduct_error_reporter').innerText = 'Successfully modified the product data';
                resetForm2();
                resetFormErrors2();
                break;
            case '2':
                document.getElementById('modifyProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('modifyProduct_error_reporter').innerText = 'Form data could not be sent properly';
                break;
            case '03':
                console.log('Validation Error');
                formValidation2();
                break;
            case '-223':
                console.log('Unable to copy image');
                document.getElementById('modifyProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('modifyProduct_error_reporter').innerText = 'Could not copy the image, please try again';
                break;
            case '-113':
                console.log('Image not found');
                document.getElementById('modifyProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('modifyProduct_error_reporter').innerText = 'The image was not found, please upload it again';
                break;
            case '23':
                console.log('Validation Error');
                formValidation2();
                break;
            case '-1':
                document.getElementById('modifyProduct_error_reporter').style.color = '#ff0000';
                document.getElementById('modifyProduct_error_reporter').innerText = 'Could not insert into the database';
                resetForm2();
                resetFormErrors2();
                break;
            default:
                console.log('Some unknown error, Error Code: ' + responseCode);
                break;
        }
    }

    function generateStringOutput(value, length) {
        value = value.replace(/[®™]/gi, '');
        return value.length > length ? value.substr(0, length) + '....' : value;
    }

    function getProductDataList() {
        let url = "includes/products.php?pSuggest=";
        ajaxFormGet(url, function () {
            if (this.readyState === 4 && this.status === 200) {
                //fillCombo(this.responseText);
                loadDataList(this.responseText);
            } else {
                console.log(this.status + ":" + this.readyState);
            }
        });
    }

    function loadDataList(data) {
        let datalist = document.getElementById('productSuggestions');
        if (data !== '-1') {
            let file = JSON.parse(data);
            if (file.length > 0) {
                console.log(file.length);
                for (let i = 0; i < file.length; i++) {
                    datalist.innerHTML += "<option value = '" + generateStringOutput(file[i]["ProductTitle"], 100) + "'></option>";
                }
            } else {
                console.log('Data list empty');
            }
        } else {
            console.log('Result empty');
        }
    }

</script>
</body>

</html>
