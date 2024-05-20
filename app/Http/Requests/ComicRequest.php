<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:50',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio.',
            'title.min' => 'Il titolo deve essere lungo almeno 3 caratteri.',
            'title.max' => 'Il titolo non può essere più lungo di 100 caratteri.',

            'description.required' => 'Il campo descrizione è obbligatorio.',

            'thumb.required' => 'Il campo immagine di anteprima è obbligatorio.',

            'price.required' => 'Il campo prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'Il prezzo deve essere almeno 3.',
            'price.max' => 'Il prezzo non può essere superiore a 10.',

            'series.required' => 'Il campo serie è obbligatorio.',
            'series.min' => 'La serie deve essere lunga almeno 3 caratteri.',
            'series.max' => 'La serie non può essere più lunga di 50 caratteri.',

            'sale_date.required' => 'Il campo data di vendita è obbligatorio.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',

            'type.required' => 'Il campo tipo è obbligatorio.',
            'type.min' => 'Il tipo deve essere lungo almeno 3 caratteri.',
            'type.max' => 'Il tipo non può essere più lungo di 50 caratteri.',

            'artists.required' => 'Il campo artisti è obbligatorio.',

            'writers.required' => 'Il campo scrittori è obbligatorio.',
        ];
    }
}
