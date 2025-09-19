<script src="https://use.fontawesome.com/d9805deba2.js"></script>


<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<div class="navbar navbar-default" style="">
	<ul class="nav navbar-nav">

				<li>
					<div class="navbar-header" STYLE="font-size: 27px;">
							<a  class="{{Request::path() == 'address' ? 'active' : ''}}" style="padding:15px 25px;" href="{{asset('address')}}">
						<i class="fa fa-address-book-o" aria-hidden="true"></i> Address Book Demo
					</a>
					</div>
				</li>

		<li><a class="{{Request::path() == 'add_address' ? 'active' : ''}} links" style="padding:10px;margin-left:10px;" href="/add_address"> New Address</a></li>
	</ul>
</div>
