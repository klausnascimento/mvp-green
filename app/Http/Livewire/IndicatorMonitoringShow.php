<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Workflow\Indicator;
use Illuminate\Support\Facades\DB;
use App\Models\Workflow\IndicatorsDatas;
use App\Models\Workflow\AlarmsNotifications;

class IndicatorMonitoringShow extends Component
{
    public $indicator;
    private $dataByMonth;

    //Indicator Monitoring detail
    public $idIndicator;
    public  $indicator_type, $source_type, $source_name, $source_location, $measurement_unit;

    //Indicators Datas
    public $indicator_value, $measurement_datetime;

    //Alarms Notifications
    public $threshold_value, $comparison_operator, $notification_type, $active;

    // Validation Rules
    protected $rules = [
        'indicator_type' =>'required',
        'source_type'=>'required',
        'source_name'=>'required',
        'source_location'=>'required',
        'measurement_unit'=>'required',
    ];

    public function mount(Indicator $indicator)
    {
        $this->indicator = $indicator;
        $this->idIndicator = $this->indicator->id;
        $this->indicator_type = $this->indicator->indicator_type;
        $this->source_type = $this->indicator->source_type;
        $this->source_name = $this->indicator->source_name;
        $this->source_location = $this->indicator->source_location;
        $this->measurement_unit = $this->indicator->measurement_unit;

    }

    public function render()
    {
        $dataByMonth = DB::table('indicators_datas')
                ->select(DB::raw('MONTH(measurement_datetime) as month'), DB::raw('SUM(indicator_value) as sum_value'))
                ->where('indicator_id', $this->idIndicator)
                ->groupBy(DB::raw('MONTH(measurement_datetime)'))
                ->orderBy(DB::raw('MONTH(measurement_datetime)'))
                ->get();

        return view('livewire.indicator-monitoring-show', [
            'indicator' => $this->indicator,
            
            'dataByMonth' => $dataByMonth,
        ]);
    }

    public function updateIndicator()
    {
        // Validate request
        $this->validate();
        // Update line
        Indicator::find($this->idIndicator)->fill([
            'indicator_type'=>$this->indicator_type,
            'source_type'=>$this->source_type,
            'source_name'=>$this->source_name,
            'source_location'=>$this->source_location,
            'measurement_unit'=>$this->measurement_unit,
        ])->save();

        return redirect()->route('indicator-monitoring-show', ['indicator' => $this->idIndicator])->with('success', 'Successfully update indicator');
    }

    public function storeData(){

        $validatedData = $this->validate([
            'indicator_value' => 'required',
            'measurement_datetime' => 'required',
        ]);
 
        IndicatorsDatas::create([
            'indicator_id'=>$this->idIndicator, 
            'indicator_value'=>$this->indicator_value,
            'measurement_datetime'=>$this->measurement_datetime, 
        ]);

        return redirect()->route('indicator-monitoring-show', ['indicator' => $this->idIndicator])->with('success', 'New data added successfully');
    }

    public function deleteData($id){
        try{
            IndicatorsDatas::find($id)->delete();
            $this->indicator->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }

    public function storeAlarm(){

        $validatedAlarme = $this->validate([
            'threshold_value' => 'required',
            'comparison_operator' => 'required',
            'notification_type' => 'required',
            'active' => 'required',
        ]);

        AlarmsNotifications::create([
            'indicator_id'=>$this->idIndicator, 
            'threshold_value'=>$this->threshold_value, 
            'comparison_operator'=>$this->comparison_operator,
            'notification_type'=>$this->notification_type, 
            'active'=>$this->active, 
        ]);

        return redirect()->route('indicator-monitoring-show', ['indicator' => $this->idIndicator])->with('success', 'New alarm added successfully');
    }

    public function deleteAlarm($id){
        try{
            AlarmsNotifications::find($id)->delete();
            $this->indicator->refresh();
            session()->flash('success',"Line deleted Successfully !");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Line");
        }
    }
}
