<?php

class Comment extends Eloquent {

	protected $table = 'comments';

	protected $fillable = array('comment', 'userid', 'postid');

	}


