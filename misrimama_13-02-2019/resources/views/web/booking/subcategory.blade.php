 
        <div id="subcat" class="modal-body" style="min-height:400px;">

            <span style="display: none !important;">Total: </span>
            <label id="total" style="color:maroon;display: none !important;">0</label>
            <span style="display: none !important;">  tk</span>
            <input type="hidden" name="parent_category" value="{{ $models->id }}" >
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
   