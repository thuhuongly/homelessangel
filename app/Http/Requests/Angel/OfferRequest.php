<?php namespace App\Http\Requests\Angel;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'type' => 'required|min:3',
			'category' => 'required|min:3',
			'description' => 'required|min:3',
            'amount' => 'required|numeric',
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
