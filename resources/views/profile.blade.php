@extends('layouts.app')


@section('content')

	<div class="container">
	    <div class="span3 well">
	        <center>
	        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://cdn3.iconfinder.com/data/icons/users/100/user_male_1-512.png" name="aboutme" width="140" height="140" class="img-circle"></a>
	        <h3>Israel Arellano</h3>
	        <em>click my face for more</em>
			</center>
	    </div>
	    <!-- Modal -->
	    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	                    <h4 class="modal-title" id="myModalLabel">More About Israel</h4>
	                    </div>
	                <div class="modal-body">
	                    <center>
	                    <img src="https://cdn3.iconfinder.com/data/icons/users/100/user_male_1-512.png" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
	                    <h3 class="media-heading"> Israel Arellano <small>MEX</small></h3>
	                    <span><strong>Skills: </strong></span>
	                        <span class="label label-warning">HTML5/CSS</span>
	                        <span class="label label-info">Laravel 5.4</span>
	                        <span class="label label-info">Microsoft Office</span>
	                        <span class="label label-success">Windows XP, Vista, 7</span>
	                    </center>
	                   	<hr>
	                    <center>
	                    <p class="text-left"><strong>Bio: </strong><br>
	                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
	                    <br>
						<span><strong>Posts: </strong></span>
	                    </center>
	                </div>
	                <div class="modal-footer">
	                    <center>
	                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Israel</button>
	                    </center>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection