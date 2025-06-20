<?php

namespace App\services\Student;

use Illuminate\Support\Facades\Http;

class StudentApiService {
    protected $client;

    //Inyectamos siempre en el constructor
    public function __construct() {
        $this->client = Http::baseUrl(config('services.mi_api.base_uri'));
    }

    public function obtenerTodosEstudiantes() {
        return $this->client->get('/students')->json();
    }

    public function obtenerEstudiante(string $id){
        return $this->client->get('/students/' . $id)->json();
    }

    public function crearEstudiante(array $data){
        return $this->client->post('/students', $data)->json();
    }

    public function actualizarEstudiante(array $data, string $id){
        return $this->client->put('/students/' . $id, $data)->json();
    }

    public function eliminarEstudiante(string $id){
        return $this->client->delete('/students/' . $id)->json();
    }
}
