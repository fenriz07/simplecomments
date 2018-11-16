<?php

namespace Cmantikweb\Simplecomments\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class Base extends FormRequest
{


    protected function failedValidation(Validator $validator)
    {

      $errors = (new ValidationException($validator))->errors();

/*       $format = [
        'status'      => 422,
        'description' => 'Error in validation.',
        'payload'     => $errors,
      ];
 */
      throw new HttpResponseException(back()->withErrors($errors));


      //throw new HttpResponseException(response()->json($format, JsonResponse::HTTP_UNPROCESSABLE_ENTITY));

    }

}
