<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Author extends Model
{
    public $name;
    public $author_id;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'book_id'], 'required'],
        ];
    }
}