<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {

    return $this->get('id') ? $this->updateRules() : 
    $this->storeRules();

  }

  public function storeRules () {

    return [

      'title'     =>  'required|min:10',
      'content'   =>  'required|min:10',

      'image'     =>  'required|'
                      .'mimetypes:text/plain,'
                      .'image/png,'
                      .'image/jpeg,'
                      
    ];
  }

  public function updateRules () {

    return [
      
      'title'     =>  'required|min:10',
      'content'   =>  'required|min:10',

      'image'     =>  'mimetypes:text/plain,'
                      .'image/png,'
                      .'image/jpeg,'
                      
    ];
  }
}
