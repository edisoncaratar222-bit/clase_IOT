class Station extends Model {
  use SoftDeletes; protected $guarded = [];
  public function city(){ return $this->belongsTo(City::class, 'id_city'); }
  public function sensorData(){ return $this->hasMany(SensorData::class, 'id_station'); }
}
