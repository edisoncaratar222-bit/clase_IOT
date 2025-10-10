class SensorData extends Model {
  use SoftDeletes; protected $guarded = [];
  protected $casts = ['created_at'=>'datetime','updated_at'=>'datetime'];
  public function station(){ return $this->belongsTo(Station::class, 'id_station'); }
  public function sensor(){ return $this->belongsTo(Sensor::class, 'id_sensor'); }
}
