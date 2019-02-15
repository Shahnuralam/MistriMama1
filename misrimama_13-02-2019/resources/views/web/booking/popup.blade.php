<form onsubmit="return false" id="bookin-popup-form"> 
    @csrf
<?php if ($models) { ?> 
        <div class="popup-container" >
            <?php


             ?>
            <div id="booking-container" class="jconfirm-box-container jconfirm-animated jconfirm-no-transition"  >
                <div class="jconfirm-box jconfirm-hilight-shake jconfirm-type-success jconfirm-type-animated" role="dialog" aria-labelledby="jconfirm-box23360" tabindex="-1">

                    <div class="jconfirm-title-c">
                        <span class="jconfirm-icon-c"></span>
                        <span class="jconfirm-title">
                            <div id="tab" class="modal-content">
                                <div class="modal-header">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            
                                                {{ Form::select('area', getArea(), $area,['onchange'=>"combomap(this.value)"]) }}
                                                 
                                             
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                             
                                                {{ Form::select('category', $categoryModel, $category,['onchange'=>"comboservice(this.value);getServiceSubService(this.value)"]) }}
                                                 
                                             
                                        </div>
                                    </div>
                                         
                                     
                                </div>


                                
                            </div>
                        </span>
                    </div>

                    <div class="jconfirm-content-pane" >
                        <div class="jconfirm-content" id="jconfirm-box23360">
                            <span style="display: none !important;">Total: </span>
                            <label id="total" style="color:maroon;display: none !important;">0</label>
                            <span style="display: none !important;">  tk</span>
                            <input type="hidden" name="parent_category" value="{{ $models->id }}" >
                            <div id="subcat_container" class="modal-body" style="min-height:400px;">

                                
                                <?php foreach ($models->subCategory as $subCategory) { ?>
                                    <div class="list-group-item radio">
                                        <label >
                                            <h4 class="list-group-item-heading" id="sebservice">
                                                {{  $subCategory->name }}
                                                <button id="addbtn" onclick="bookingSubservice(this,{{  $subCategory->id }},{{  $subCategory->price }})" type="button" class="rounded-ghost-btn pull-right">Add</button>
                                            </h4>
                                            <p class="list-group-item-text desc ">
                                                <span>Price: <strong>৳ {{  $subCategory->min_price }}</strong> to <strong>৳ {{  $subCategory->max_price }}</strong></span>
                                                <br>
                                                {{  $subCategory->description }}
                                            </p>


                                            <br>
                                            <div class="row quantity-scale-div f{{  $subCategory->id }}">
                                                <div class="col-xs-6 ">
                                                    <div class="quantity-scale trend " style="display:none;" id="f{{  $subCategory->id }}">

                                                        <div class="row" style="max-width: 300px;" >
                                                            <div class="col-xs-2">
                                                                <button class=" minusQnty" style="background:#673ab7;color:white;" type="button" onclick="bookingMinus({{  $subCategory->id }},{{  $subCategory->price }})">-
                                                                </button>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                <input class="qnty" name="servicename[{{$subCategory->id}}]" id="n{{  $subCategory->id }}" type="number" min="1" value="0">

                                                            </div>
                                                            <div class="col-xs-2">
                                                                <button class="plusQnty" style="background:#673ab7;color:white;" type="button" onclick="bookingPlus({{  $subCategory->id }},{{  $subCategory->price }})">+</button>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p  class="pull-right appromixate{{  $subCategory->id }}">Appromixate price : N/A </p>
                                                </div>
                                            </div>

                                            <p></p>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                             
                        </div>
                    </div>
                    <div class="jconfirm-buttons">
                        <button onclick="bookingProcess()" type="button" class="btn btn-green booking-btn">Next</button>
                        <button type="button" class="btn btn-default booking-btn" onclick='$.fancybox.close();'>close</button>
                    </div>
                    <div class="jconfirm-clear">
                    </div>
                </div>
            </div>





            <div id="schidule" style="display: none" class="jconfirm-box jconfirm-hilight-shake jconfirm-type-success jconfirm-type-animated" role="dialog" aria-labelledby="jconfirm-box23360" tabindex="-1"  >
                <div class="jconfirm-title-c">
                    <span class="jconfirm-icon-c"></span>
                    <span class="jconfirm-title">
                        <div id="tab" class="modal-content">
                            <div class="modal-header">
                                <center>
                                    <h4 id="t1">Schedule Service</h4>
                                </center>
                            </div>

                        </div>
                    </span>
                </div>
                <div class="jconfirm-content-pane" >
                    <div class="jconfirm-content">
                        <div  class="modal-body" style="min-height:400px;">
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active "><a href="#schedule" aria-controls="home" role="tab" data-toggle="tab">Schedule Date</a></li>
                                    <li class="schdl" role="presentation"><a href="#time" aria-controls="profile" role="tab" data-toggle="tab">Schedule Time</a></li>
                                </ul>

                                <br>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane  active" id="schedule">
                                        <div class="list-group-item radio">

                                            <h4 class="list-group-item-heading"> Schedule Date</h4>
                                            <p class="list-group-item-text desc ">

                                            <div class="date-slider" >

                                                <?php
                                                $start = \Carbon\Carbon::now();
                                                for ($i = 0; $i <= 30; $i++) {
                                                    ?>

                                                    <label class="bookin_date_container">

                                                        <?php $date = $start->copy()->addDays($i) ?>
                                                        {{ date("d M",strtotime($date))   }}
                                                        <input {{ $i== 0 ? 'checked' : '' }} class="bookin_date" type="radio" name="date" value="<?= date('Y-m-d', strtotime($date)) ?>" >
                                                    </label>

                                                <?php } ?>

                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="time">
                                        <div class="list-group-item radio">
                                            <label>
                                                <h4 class="list-group-item-heading"> Select Times </h4>
                                                <p class="list-group-item-text desc ">

                                                    {!! Form::select('time',getSchiduleTime(),null,array( 'class' => 'form-control','style'=>'border-radius: 0px;','onchange'=>'extracharge(this.value)')) !!}
                                                </p>
                                            </label>
                                        </div>


                                        <div class="list-group-item radio extracharge" style="display: none">
                                            <label>
                                                 
                                                <p class="list-group-item-text desc ">
                                                   500 taka Extra for 
                                                </p>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <br>

                                <h4><input type="radio"> Call to fix</h4>

                            </div>

                        </div>
                        <div class="modal-footer2">          
                        </div>


                    </div>
                </div>
                <div class="jconfirm-buttons">


                    <button type="button" class="btn btn-default booking-btn" onclick='$.fancybox.close();'>close</button>
                    <button type="button schdl-active" onclick="schidule_confirm()" class="btn btn-green booking-btn schdl-active">Next</button>
                    <button type="button schdl-active" onclick="" class="btn btn-green booking-btn ">Back</button>
                </div>
                <div class="jconfirm-clear">
                </div>
            </div>


            <script>
                function schidule_confirm(){
                $("#schidule_confirm").show();
                $("#schidule").hide();
                }
            </script>




            <div id="schidule_confirm" style="display: none" class="jconfirm-box jconfirm-hilight-shake jconfirm-type-success jconfirm-type-animated" role="dialog" aria-labelledby="jconfirm-box23360" tabindex="-1"  >
                <!-- <div class="jconfirm-title-c">
                    <span class="jconfirm-icon-c"></span>
                    <span class="jconfirm-title">
                        <div id="tab" class="modal-content">
                            <div class="modal-header">
                                <center>
                                    <h4 id="t1">Schedule Service</h4>
                                </center>
                            </div>

                        </div>
                    </span>
                </div> -->
                <div class="jconfirm-content-pane" >
                    <div class="jconfirm-content ">

                        <div  class="modal-body booking_success" style="min-height:400px;">

                            <?php if (!isset(Auth::user()->id)) { ?>
                                <div class="list-group-item radio">
                                    <div  class="text-center ">
                                        <a>
                                            <img class="log-panel-image" src="http://naharmedicine.com/photos/1/logo (2).png" alt="Mistri Mama">

                                        </a>
                                    </div>
                                    <label id="lngform">
                                        <h4 class="list-group-item-heading"> Login</h4>

                                        <p id="loginresponse"></p>

                                        <input type="text" name="username" class="fadeIn second"   placeholder="login">
                                        <input type="password"   class="fadeIn third" name="password" placeholder="password">

                                        <a class="btn btn-block" onclick="loginUser();">Login</a>


                                        <div class="clear text-center">
                                            <a class="text-center"><b>OR, CONNECT WITH</b></a>
                                        </div>
                                        <div class="social-log-in ">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <a class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i> FACEBOOK</a>
                                                </div>

                                                <div class="col-xs-6">
                                                    <a class="btn btn-google btn-block"><i class="fa fa-google"></i> Google</a>

                                                </div>

                                            </div>
                                        </div>

                                    </label>
                                    <label id="booking-form" style="display:none !important;">
                                        <h4 class="list-group-item-heading">  </h4>

                                        <span class="bookingresponse"></span>

                                        <a class="btn " onclick="submitBook();">Book</a>



                                    </label>
                                </div>
                            <?php } else { ?>

                                <div class="list-group-item radio">
                                    <label>
                                        <h4 class="list-group-item-heading">   </h4>
                                        <p class="list-group-item-text desc ">
                                            <span class="bookingresponse"></span>
                                            <button type="button" onclick="submitBook()" class="btn btn-green booking-btn">Book</button>
                                        </p>


                                        <p></p>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer2">          
                        </div>


                    </div>
                </div>
                <div class="jconfirm-buttons">

                    <button type="button" class="btn btn-default booking-btn" onclick='$.fancybox.close();'>close</button>
                    <button type="button" onclick="" class="btn btn-green booking-btn">Back</button>
                </div>
                <div class="jconfirm-clear">
                </div>
            </div>




        </div>
<?php } else { ?>
    <div class="popup-container">
        <div  class="jconfirm-box-container jconfirm-animated jconfirm-no-transition"  >
            <div class="jconfirm-box jconfirm-hilight-shake jconfirm-type-success jconfirm-type-animated" role="dialog" aria-labelledby="jconfirm-box23360" tabindex="-1"  >
                <div class="jconfirm-title-c">
                    <span class="jconfirm-icon-c"></span>
                    <span class="jconfirm-title">
                        <div id="tab" class="modal-content">
                            <div class="modal-header">
                                <center>
                                    Select Category Fitst
                                </center>
                            </div>

                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


</form>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>




<style>
    .select-area-modal {
        margin: 15px 0px;

    }
    .select-area-modal .col-sm-4{
        max-width: 29.333333%;

    }
    .preview2{
        margin-left: 30px;
    }

    .select-area select {
        max-width: 90%;
        -moz-appearance: none;
        border-left: 4px solid #febf13;
        border-right: 4px solid #febf13;
        border-top: 4px solid #febf13;
        border-bottom: 3px solid #febf13;
        margin-left: -5px;
        vertical-align: middle;
        background: transparent;
        color: gray;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 16px;
        padding: 3px 0;
        position: relative;
        padding-left: 4px;
        margin-left: 30px;

    }






    /*-----------------------*/
    .clear{
        margin: 20px;
        text-transform: uppercase;
    }
    .btn-facebook, .btn-google{
        background: transparent;
        transition: .6s;
        border:1px solid #ddd;
    }
    .btn-facebook:hover{
        background: rgba(237,28,36,.3);
        color:gray ;
    }
    .btn-google:hover{
        background: rgba(237,28,36,.3);;
        color:gray ;
    }
    .fa-facebook,.fa-google{
        transition: .5s;
    }
    .btn-facebook:hover .fa-facebook{
        transform: rotate(360deg);
    }
    .btn-google:hover .fa-google{
        transform: rotate(360deg);
    }
    .fa-facebook{
        color: white;
        background:#475993 ;
        padding:3px 6px;
        border-radius: 50%;
    }
    .fa-google{
        color: white;
        background:orangered ;
        padding:3px 5px;
        border-radius: 50%;
    }
    .log-panel-image{
        height: 140px;
        width: 140px;
        border-radius: 50%;
        border: 1px solid #ddd8ce;

    }

    .quantity-scale-div{
        height:0px;
    }
    .quantity-scale-div p{
        font-size: 12px;
        margin-top: 15px;
        display: none;

    }
    .quantity-scale{
        margin: 15px 0px;

    }
    .quantity-scale input{
        margin-left: -30px;
        max-width: 60px;
        padding: 5px;
        border: 1px solid #673ab7;
    }

    .plusQnty{
        padding: 4px 8px;
        margin-top:0px;
        margin-left: -170px;

    }
    .minusQnty{
        padding: 4px 8px;
        margin-top:0px;
    }
    #subcat h4{
        font-size: 13px;
        margin: 10px 0px;
    }
    .bookin_date{
        display: none
    }
    .bookin_date_container{
        padding: 0px 5px 0px 5px !important;
        background: #FBD232;
        color: #FFF;
        margin-left: 10px;
        text-align: center;
        font-size: 20px;
        font-weight: 800 !important;
        text-align: center;
        transition: .4s;
    }
    .bookin_date_container:hover{
        padding: 0px 5px 0px 5px !important;
        background: #808080;
        color: #FBD232;
        margin-left: 10px;
        text-align: center;
        font-size: 20px;
        font-weight: 800 !important;
        text-align: center;
        transform:skew(12deg);
    }
    .slick-prev, .slick-next {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        display: block;
        width: 20px;
        height: 20px;
        padding: 0;
        -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        cursor: pointer;

        border: none;
        outline: none;

    }
    .slick-next {
        right: -25px;
    }
    .slick-prev {
        left: -15px;
    }
    .booking-btn{
        border-radius: 0;
        float: right;
        margin-left: 5px;
        padding: 5px 15px;
    }

    .popup-container{
        max-width: 700px;
        min-width: 700px;
        min-height: 500px;
    }
    .list-group-item label{
        width: 100%
    }
    .qnty{
        padding: 7px 15px;
        width: 100%;
    }

    .slick-prev:hover:before, .slick-prev:focus:before, .slick-next:hover:before, .slick-next:focus:before {
        opacity: 1;
    }
    .slick-next:before {
        content: '→';
    }
    .slick-prev:before, .slick-next:before {
        font-family: 'slick';
        font-size: 20px;
        line-height: 1;
        opacity: .75;
        color: white;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .slick-prev:hover:before, .slick-prev:focus:before, .slick-next:hover:before, .slick-next:focus:before {
        opacity: 1;
    }

    .slick-prev:before {
        content: '←';
    }
    .slick-prev:before, .slick-next:before {
        font-family: 'slick';
        font-size: 20px;
        line-height: 1;
        opacity: .75;
        color: white;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>

<script>
    function extracharge(val){
         
        $(".extracharge").hide();
        if(val > 19){
            $(".extracharge").show();
        }
    }
    function getServiceSubService(){
        $.ajax({
            type: "POST",
            url: '{{ url("get-sub-catarory") }}',
            
            data: $("#bookin-popup-form").serialize(),
            //dataType : 'JSON',
            success:function(data){
                $("#subcat_container").html(data);
            }
        });
    }
    function submitBook(){
        $.ajax({
            type: "POST",
            url: '{{ url("booking-store") }}',
            data: $("#bookin-popup-form").serialize(),
            dataType : 'JSON',
            success:function(data){
                if (data.status == 0){
                $("#bookingresponse").html(data.message)
                } else{
                $(".booking_success").html(data.message)
                }
            }
        });
    }
    function loginUser(){
        $.ajax({
        type: "POST",
                url: '{{ url("booking-login") }}',
                data: $("#bookin-popup-form").serialize(),
                dataType : 'JSON',
                success:function(data){
                if (data.status == 0){
                $("#loginresponse").html(data.message)
                } else{
                $("#booking-form").show();
                $("#lngform").remove();
                }

                }
        });
    }
    function bookingProcess(){
        $('#booking-container').hide();
        $('#schidule').show();
        $(".date-slider").slick({
        infinite: false,
                slidesToShow: 10,
                slidesToScroll: 10
        });
    }


    function bookingSubservice(t, id, v){
        var x = $(t);
        if (x.text() == 'Add'){
            x.text('Added');
            x.css('background', '#ed1c24').css('color', 'white');
            //This code is for smooth animation
            $(".f" + id).animate({'height':'50px'}, 500);
            $("#f" + id).fadeIn('slow');
            $(".f" + id + "> hr").fadeIn('slow');
            $(".appromixate" + id).fadeIn('slow');
            bookingPlus(id, v);
        }else{
            x.text('Add');
            x.css('background', 'transparent').css('color', '#4a90e2');
        //This code is for smooth animation
            $(".f" + id).animate({'height':'0px'}, 500);
            $("#f" + id).fadeOut('slow');
            $(".appromixate" + id).fadeOut('slow');
            $(".f" + id + "> hr").fadeOut('slow');
            $("hr").fadeOut('slow');
            var n = $('#n' + id).val();
            n = parseInt(n);
            v = v * n;
            total = total - v;
            $('#n' + id).val('0');
            $('#total').html(total);
        }
    }

    function bookingPlus(id, v){
        var n = $('#n' + id).val();
        n = parseInt(n);
        n++;
        $('#n' + id).val(n);
        total = total + v;
        $('#total').html(total);
    }
    function bookingMinus(id, v){
        var n = $('#n' + id).val();
        n = parseInt(n);
        if (n > 1){
            total = total - v;
            $('#total').html(total);
            n--;
            var n = $('#n' + id).val(n);
        }
    }

    $(document).ready(function () {
        $(".schdl-active").css({'display':'none'})
    });
    $(".schdl").click(function () {
        $(".schdl-active").fadeIn('slow');
    });
</script>
