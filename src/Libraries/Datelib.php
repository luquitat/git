<?


namespace src\Libraries;

class Datelib{
	public function calcularEdad(string $fecha) : int
	{
		return Carbon::parse($fecha)->DiffInYears(Carbon::now());
	}
}