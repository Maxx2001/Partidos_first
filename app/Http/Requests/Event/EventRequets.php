<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequets extends FormRequest
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
        return [
            'eventname' => 'required|max:255',
            'location' => 'required|max:255',
            'date' => 'required|max:255',
            'start_time' => 'required|max:255',
            'end_time' => 'nullable|after:time_start',
        ];
    }
}
