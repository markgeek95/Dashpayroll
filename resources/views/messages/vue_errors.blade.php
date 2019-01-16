<div class="alert bg-danger" v-if="errors.length">
    <strong class="text-red">
	    	<i class="icon fa fa-ban fa-lg"></i>
	    Whoops! looks like something went wrong.
	</strong>
    <ul v-for="error in errors" style="padding-left: 15px">
        <li>@{{ error }}</li>
    </ul>
</div>

