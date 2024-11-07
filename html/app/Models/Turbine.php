<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turbine extends Model
{
    use HasFactory;

    protected $connection = 'historian';
    // protected $table = 'turbine_farm'; // Probably not important... right?
    protected $primaryKey = 'turbinefID';

    // Create some accessors for easier querying
    public function getIDAttribute()
    {
        return $this->turbinefID;
    }

    public function getStatusAttribute()
    {
        return $this->turbineStatus;
    }

    public function getOutputAttribute()
    {
        // It's possible that Historian will return non-0 data when down or fault.
        // Account for it and override output provided in DB
        if ($this->status == 'fault' || $this->status == 'down') {
            return 0;
        }

        return $this->turbineGeneration;
    }

    public function getOutputPercentAttribute()
    {
        // 375 is the max kWh output a single farm can produce
        return round((($this->output / 375) * 100), 2);
    }

    public function getNameAttribute()
    {
        $names = [
            1 => 'Breezy McSpin',
            2 => 'Gusty Gusto',
            3 => 'Windy Wonder',
            4 => 'Stormy Spinner',
        ];

        return $names[$this->id];
    }

    public function getBorderAttribute()
    {
        $class = [
            'up' => 'border-primary',
            'down' => 'border-zinc-500',
            'fault' => 'border-red-600',
        ];

        return $class[$this->status];
    }

    public function getImageAttribute()
    {

        return 'reignDude.gif';

        $image = [
            'up' => 'turbineUp.gif',
            'down' => 'turbineDown.gif',
            'fault' => 'turbineFault.gif'
        ];

        return $image[$this->status];
    }
}
