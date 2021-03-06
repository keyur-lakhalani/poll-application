<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'choice';

    protected $primaryKey = 'choice_id';

    protected $fillable = ['questions_id', 'choice_text', 'created_by_user'];

    /**
     * Get the question that owns the choice.
     */
    public function get_question()
    {
        return $this->belongsTo('App\Questions');
    }
}

