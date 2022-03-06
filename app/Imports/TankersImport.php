<?php

namespace App\Imports;

use App\Models\Tanker;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class TankersImport implements ToModel, WithValidation, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $type;
        switch($row['sector']) {
            case 'Rigid':
                $type = 'Rigid';
                break;
            case 'ADR Vac':
                $type = 'Vacuum';
                break;
            case 'Milk':
                $type = 'Milk';
                break;
            case 'Waste Vac':
                $type = 'Waste';
                break;
            case 'Food GP':
                $type = 'Food';
                break;
            default:
                $type = 'General';
        }        

        $tanker = Tanker::updateOrCreate(
            [
                'fleet_num' => $row['fleet_number'],
            ],
            [
            'fleet_num' => $row['fleet_number'],
            'make' => '',
            'equipment' => '',
            'replacement_value' => 0,            
            'chassis_num' => '',
            'serial_num' => $row['serial_number'],
            'tank_type' => $row['tank_type'],
            'sector' => $row['sector'],
            'type' => $type,
        ]);

        if($tanker->type == "Rigid")
        {            
            $tanker->ext_splat_right = $this->splat_side2_initializer('');
            $tanker->ext_splat_left = $this->splat_side1_initializer('');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('');                                                
            $tanker->int_splat = $this->splat_internal_initializer('');
        }
        else if($tanker->type == "Non-Rigid")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('');
            $tanker->ext_splat_left = $this->splat_side1_initializer('');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('');                                                
            $tanker->int_splat = $this->splat_internal_initializer('');
        }
        else if($tanker->type == "Food")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-food');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-food');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-food');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-food');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-food');            
        }
        else if($tanker->type == "Milk")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-milk');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-milk');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-milk');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-milk');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-milk');            
        }
        else if($tanker->type == "General")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-petrol');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-petrol');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-petrol');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-petrol');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-petrol');            
        }
        else if($tanker->type == "Vacuum")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-vacuum');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-vacuum');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-vacuum');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-vacuum');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-vacuum');            
        }
        else if($tanker->type == "Waste")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-waste');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-waste');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-waste');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-waste');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-waste');            
        }
        $tanker->save();

        return $tanker;
    }

    public function rules(): array {
        return [
            '*.fleet_number' => ['required', 'max:255', 'string'],
            '*.serial_number' => ['required'],
            '*.tank_type' => ['required', 'max:255', 'string'],
            '*.sector' => ['required', 'max:255', 'string']
        ];
    }

    public function splat_side2_initializer($tanker_type)
    {
        $src = "./img/splat-side-2".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-side-2'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_side1_initializer($tanker_type)
    {
        $src = "./img/splat-side-1".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-side-1'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_rear_initializer($tanker_type)
    {
        $src = "./img/splat-rear".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-rear'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_front_initializer($tanker_type)
    {
        $src = "./img/splat-side-front".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-side-front'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_internal_initializer($tanker_type)
    {
        $src = "./img/splat-internal".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-internal'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
}
