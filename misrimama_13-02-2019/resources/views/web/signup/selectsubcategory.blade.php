<table class="table table-hover"  >
    <thead>
    <tr>
    	<th></th>
        <th>Service Name</th>
        <th>Service Price</th>
        <th>SP Amount</th>
        <th>Mistri Mama Commission</th>
        <th>Action</th>
    </tr>
    </thead>
    
<?php foreach($cat as $sCategory){

	foreach($sCategory->subCategory as $cat){
 ?>

    <tr class="participantRow">
    	<td>
    		<input type="checkbox" name="s_category[]" value="{{ $cat->id }}" class="sub_category_check">
    	</td>
        <td>
         	<input value='{{ $cat->name }}' type="text" readonly="readonly" class="form-control ">
        </td>    
        <td><input name="s_price[]" type="text" readonly="readonly" class="form-control s_price  sub_category_price">
        
        <td><input name="s_desp[]"  type="text" readonly="readonly" class="form-control s_desp">
    	<td><input name="s_comm[]"  type="text" readonly="readonly" class="form-control s_comm">
        </td>

        <td><button class="btn btn-danger remove remove_sub_category" type="button">Remove</button></td>
    </tr>
<?php } } ?>

    <tr id="addButtonRow" style="display: none">
        <td colspan="5"><center><button class="btn btn-large btn-success add" type="button">Add</button></center></td>
    </tr>
</table>


 