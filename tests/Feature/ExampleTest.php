<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_regulamentos_page_loads_and_has_clean_structure(): void
    {
        $this->seed();

        $response = $this->get('/regulamentos');

        $response->assertStatus(200);
        $response->assertSee('REGULAMENTO ON MOVE - BRASÍLIA');
        $response->assertSee('Data Oficial');
        $response->assertSee('Cidade & Local', false);
        $response->assertSee('Percursos');
        $response->assertSee('Organização');
        $response->assertDontSee('3.500 Atletas');
        $response->assertDontSee('Quórum mín');
        $response->assertDontSee('Íntegra dos Artigos e Capítulos Oficiais');
    }

    public function test_calendario_and_etapas_redirect_to_home_calendar_section(): void
    {
        $response = $this->get('/calendario');
        $response->assertRedirect(url('/#calendario'));

        $responseEtapas = $this->get('/etapas');
        $responseEtapas->assertRedirect(url('/#calendario'));
    }
}
