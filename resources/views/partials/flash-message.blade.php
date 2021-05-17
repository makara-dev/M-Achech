@if (session('success'))
<div class="alert alert-success alert-block text-center" >
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="font-20">{{ session('success') }}</strong>
</div>
@endif
  
@if (session('error'))
<div class="alert alert-danger alert-block text-center" >
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="font-20">{{ session('error') }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif