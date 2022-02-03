<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class BookAuthor extends Model
{
    public $name;
    public $author_id;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['book_id', 'author_id'], 'required'],
        ];
    }
}