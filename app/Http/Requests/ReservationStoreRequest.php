<?php

namespace App\Http\Requests;

use App\Rules\DataBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required','max:40'],
            'last_name' => ['required','max:40'],
            'email' => ['required','email'],
            'phone' => ['required','numeric'],
            'res_date' => ['required','date', new DataBetween, new TimeBetween],
            'table_id' => ['required'],
            'guest_number' => ['required'],
        ];
    }
}
