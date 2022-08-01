<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePresenceRequest extends FormRequest
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
        // Memberikan validation rules untuk parameter StorePresenceRequest
        return [
            'users_id' => 'integer',
            'date' => 'required',
            'time_in' => 'nullable',
            'time_out' => 'nullable',
            'status' => 'nullable',
        ];
    }

    public function validationData()
    {   
        // Memberikan validasi untuk pengisian data yang akan dimasukkan ke tabel Prensences
        $this->request->add([
            'users_id' => Auth::user()->id,
        ]);
        if ($this->get('BtnIn') == 'in') {
            $this->request->add([
                'time_in' => date('H:i'),
            ]);
            if ($this->time_in >= '10:00') {
                $this->request->add([
                    'status' => 'Telat',
                ]);
            }
            if ($this->time_in < '10:00') {
                $this->request->add([
                    'status' => 'Masuk Pagi',
                ]);
            }
        } elseif ($this->get('BtnOut') == 'out') {
            $this->request->add([
                'time_out' => date('H:i'),
            ]);
            if ($this->time_out < '17:00'){
                $this->request->add([
                    'status' => 'Pulang Cepat'
                ]);
            } 
        }

        $this->request->add([
            'date' => date('Y-m-d'),
        ]);

        return $this->all();
    }
}
