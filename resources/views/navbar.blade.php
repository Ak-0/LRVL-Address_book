<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<div class="navbar navbar-default " style="display: flex;padding: 10px;list-style-type:none;border-bottom: 2px solid black;>
	<ul class="nav navbar-nav">  
		<li><div class="navbar-header">Lrvl-Address Book Demo</div></li>
		<li class="{{Request::path() == 'address' ? 'active' : ''}}"><a style="padding:10px;margin-left:10px;" href="{{asset('address')}}">Home</a></li>
		<li class="{{Request::path() == 'add_address' ? 'active' : ''}}"><a style="padding:10px;margin-left:10px;" href="{{asset('add_address')}}">Add</a></li>
	</ul>
</div>
