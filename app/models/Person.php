<?php 

class Person extends Eloquent {

	
	public function scopeByFirstName($query, $name)

	{
		return $query->where('name', 'LIKE', "%$name%");
	}

}

