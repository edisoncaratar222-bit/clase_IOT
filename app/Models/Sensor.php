class Sensor extends Model {
  use SoftDeletes; protected $guarded = [];
  public function department(){ return $this->belongsTo(Department::class, 'id_department'); }
  public function data(){ return $this->hasMany(SensorData::class, 'id_sensor'); }
}
