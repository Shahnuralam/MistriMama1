@extends('layouts.web')
@section('css')
    <style>

        label.error,
        .required {
            font-size: 12px;
            color: red;
        }
        .intro {
            margin: 0 0 10px;
            text-align: center;
        }
        #wrapper {
            width: 500px;
            margin: 0 auto;
            position: relative;
        }

        form {
            border-radius: 10px;
            border: 3px solid #ccc;
            box-shadow: 0px 2px 5px 0px #444;
            background: #fff;
            position: relative;
            padding: 10px;
            overflow: hidden;
        }
        label {
            margin-bottom: 5px;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0 0 10px;
            width: 100%;
        }
        input, textarea, label, select {
            display: block;
            outline: none;
        }
        input, textarea, select {
            margin-bottom: 10px;
        }
        input, textarea {
            background: -moz-linear-gradient(center top , #F2F2F2, #FFFFFF) repeat scroll 0 0 transparent;
            border: 1px solid #DEDEDE;
            border-radius: 5px 5px 5px 5px;
            color: #403D3A;
            font-size: 16px;
            padding: 1px 6px;
            -webkit-input-placeholder
        }
        textarea {
            width: 100%;
            height: 140px;
            resize: none;
            box-sizing: border-box;
            -webkit-box-sizing:border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;

        }
        input {
            width: 200px;
            height: 26px;
        }
        ::-webkit-input-placeholder {
            color: #ccc;
        }
        :-moz-placeholder {
            color: #ccc;
        }


        .simple-form-button {
            -moz-border-bottom-colors: none;
            -moz-border-image: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background: -moz-linear-gradient(center top , #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
            background: -webkit-linear-gradient(center top , #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
            border-color: #E2E2E2 #DDDDDD #CCCCCC;
            border-left: 1px solid #DDDDDD;
            border-radius: 5px 5px 5px 5px;
            border-right: 1px solid #DDDDDD;
            border-style: solid;
            border-width: 1px 1px 2px;
            color: #000000;
            cursor: pointer;
            font-size: 9pt;
            margin: 0;
            padding: 8px 18px;
            width: auto;
            height: auto;
        }
        .submit-button {
            background: -moz-linear-gradient(center top , #FFFFFF, #2a8db4) repeat scroll 0 0 transparent;
            float: right;
            display: none;
        }

        .form-controls {
            clear: both;
        }

        .previous-fieldset {
            display: none;
            float: left;
        }
        .next-fieldset {
            float: right;
        },
        a.next-fieldset,
        a.previous-fieldset {
            color: #ccc;
        }

        .clear {
            clear: both;
        }
        .progress {
            border-bottom: 1px solid #EEECE9;
            border-top: 1px solid #FFFFFF;
            height: 20px;
        }

        .progress-bar {
            height: 15px;  /* Can be anything */
            position: relative;
            background: #e2e2e2;
            -moz-border-radius: 25px;
            -webkit-border-radius: 25px;
            border-radius: 25px;
            padding: 5px;
            -webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
            -moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
            box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
            margin: 10px 0;
            overflow: hidden;
        }

        .progress-bar .progress-bg{
            display: block;
            height: 100%;
            -webkit-border-top-right-radius:    20px;
            -webkit-border-bottom-right-radius: 20px;
            -moz-border-radius-topright:        20px;
            -moz-border-radius-bottomright:     20px;
            border-top-right-radius:            20px;
            border-bottom-right-radius:         20px;
            -webkit-border-top-left-radius:     20px;
            -webkit-border-bottom-left-radius:  20px;
            -moz-border-radius-topleft:         20px;
            -moz-border-radius-bottomleft:      20px;
            border-top-left-radius:             20px;
            border-bottom-left-radius:          20px;
            background-color: rgb(43,194,83);
            background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(43,194,83)),
                    color-stop(1, rgb(84,240,84))
            );
            background-image: -webkit-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            background-image: -moz-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            background-image: -ms-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            background-image: -o-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            -webkit-box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
            -moz-box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
            overflow: hidden;
            width: 0%;
        }

        .progress-bar .progress-text {
            position: absolute;
            left: 50%;
            top: 2px;
            z-index: 10;
        }
    </style>
@endsection
@section('content')
    <section class="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>About us</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form class="testform" id="testform" method="post">
                    <fieldset class="personal-data">
                        <label for="name">Full Name: <span class="required">*</span></label>
                        <input type="text" id="name" name="name" placeholder="John Smith" />

                        <label for="email-address">Email: <span class="required">*</span></label>
                        <input type="email" name="email" id="email" placeholder="example@email.com" />

                        <label for="phone">Phone:</label>
                        <input type="tel" name="phone" id="phone" placeholder="000-000-000" />
                    </fieldset>

                    <fieldset class="address-data-inputs">
                        <label for="house-id">Building Number:</label>
                        <input type="text" id="house-id" name="house-id" placeholder="1" />

                        <label for="street">Street: <span class="required">*</span></label>
                        <input type="text" id="street" name="street" placeholder="The Street" />

                        <label for="town">Town:</label>
                        <input type="text" id="town" name="town" placeholder="A Town"/>

                        <label for="county">County:</label>
                        <input type="text" id="county" name="county" placeholder="San Luis Obispo"/>

                        <label for="postal-code">Postal Code:</label>
                        <input type="text" id="postal-code" name="postal-code" placeholder="93401" />
                    </fieldset>
                    <fieldset class="address-data-inputs">
                        <label for="house-id">Building2:</label>
                        <input type="text" id="house-id" name="houseid" placeholder="1" />

                        <label for="street">Street: <span class="required">*</span></label>
                        <input type="text" id="street" name="street" placeholder="The Street" />

                        <label for="town">Town:</label>
                        <input type="text" id="town" name="town" placeholder="A Town"/>

                        <label for="county">County:</label>
                        <input type="text" id="county" name="county" placeholder="San Luis Obispo"/>

                        <label for="postal-code">Postal Code:</label>
                        <input type="text" id="postal-code" name="postal-code" placeholder="93401" />
                    </fieldset>

                    <fieldset class="message-details">
                        <label for="comments">Comments:</label>
                        <textarea name="comments" id="comments"></textarea>
                    </fieldset>
                    <div class="clear"></div>
                </form>

            </div>
        </div>
    </div>
    <section id="wrapper12" Form Plugin Demos</h1>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{'assets/simpleform.min.js'}}"></script>

    <script type="text/javascript">
        $(".testform").simpleform({
            speed : 500,
            transition : 'fade',
            progressBar : true,
            showProgressText : true,
            validate: true
        });


        function validateForm(formID, Obj){

            switch(formID){
                case 'testform' :
                    Obj.validate({
                        rules: {
                            email: {
                                required: true,
                                email: true
                            },
                            name: {
                                required: true
                            },
                            houseid: {
                                required: true
                            },
                            street: {
                                required: true
                            }
                        },
                        messages: {
                            email: {
                                required: "Please enter an email address",
                                email: "Not a valid email address"
                            },
                            name: {
                                required: "Please enter your name"
                            },
                            street: {
                                required: "Please enter street name"
                            }
                        }
                    });
                    return Obj.valid();
                    break;

            }
        }
    </script>


    </section>
@endsection