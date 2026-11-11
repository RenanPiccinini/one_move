<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PageController extends Controller
{
    public function circuito()
    {
        $stages = Stage::orderBy('stage_number')->get();

        return view('pages.circuito', compact('stages'));
    }

    public function calendario()
    {
        return redirect()->to(url('/#calendario'));
    }

    public function kits()
    {
        return redirect()->to(url('/#calendario'));
    }

    public function percursos(Request $request)
    {
        $stages = Stage::orderBy('stage_number')->get();
        $selectedCity = $request->get('cidade', 'brasilia');
        $selectedStage = Stage::where('slug', $selectedCity)->first() ?? $stages->first();
        $selectedDistance = $request->get('distancia', '10K');

        return view('pages.percursos', compact('stages', 'selectedStage', 'selectedDistance'));
    }

    public function resultados(Request $request)
    {
        $bib = $request->get('peito');
        $stages = Stage::orderBy('stage_number')->get();

        return view('pages.resultados', compact('bib', 'stages'));
    }

    public function regulamentos()
    {
        $stages = Stage::orderBy('stage_number')->get();

        return view('pages.regulamentos', compact('stages'));
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function patrocinadores()
    {
        return view('pages.patrocinadores');
    }

    /**
     * Render the official partners showcase page.
     */
    public function parceirosOficiais(): View
    {
        $partners = $this->officialPartners();

        return view('pages.parceiros', compact('partners'));
    }

    /**
     * Get the curated list of official circuit partners.
     *
     * @return list<array{
     *     name: string,
     *     category: string,
     *     category_label: string,
     *     badge: string,
     *     description: string,
     *     image: string,
     *     surface_hex: string,
     *     is_dark_surface: bool,
     *     crop_vertical_padding: bool
     * }>
     */
    private function officialPartners(): array
    {
        $partners = [
            [
                'name' => 'Apex Group',
                'category' => 'tecnologia-gestao',
                'category_label' => 'Tecnologia & Gestão',
                'badge' => 'Soluções Financeiras',
                'description' => 'Soluções financeiras estratégicas para impulsionar empresas e grandes projetos.',
                'image' => 'images/parceiros/apex_group.jpeg',
                'surface_hex' => '#000000',
                'is_dark_surface' => true,
                'crop_vertical_padding' => false,
            ],
            [
                'name' => 'Chipower',
                'category' => 'tecnologia-gestao',
                'category_label' => 'Tecnologia & Gestão',
                'badge' => 'Cronometragem',
                'description' => 'Sistema de cronometragem esportiva de alta precisão para resultados oficiais.',
                'image' => 'images/parceiros/chip_power.jpeg',
                'surface_hex' => '#FFFFFF',
                'is_dark_surface' => false,
                'crop_vertical_padding' => false,
            ],
            [
                'name' => 'FAtDF',
                'category' => 'esporte-saude',
                'category_label' => 'Esporte & Saúde',
                'badge' => 'Federação Oficial',
                'description' => 'Federação de Atletismo do Distrito Federal — chancela técnica e rigor oficial.',
                'image' => 'images/parceiros/Fat_DF.png',
                'surface_hex' => '#FFFFFF',
                'is_dark_surface' => false,
                'crop_vertical_padding' => true,
            ],
            [
                'name' => 'Greenfisio',
                'category' => 'esporte-saude',
                'category_label' => 'Esporte & Saúde',
                'badge' => 'Fisioterapia',
                'description' => 'Fisioterapia especializada em prevenção, recovery e alta performance esportiva.',
                'image' => 'images/parceiros/greenfisio.png',
                'surface_hex' => '#436E54',
                'is_dark_surface' => true,
                'crop_vertical_padding' => false,
            ],
            [
                'name' => 'Pátio Brasil Shopping',
                'category' => 'experiencia-lifestyle',
                'category_label' => 'Experiência & Lifestyle',
                'badge' => 'Shopping Oficial',
                'description' => 'Ponto de encontro, experiências e conexão com os atletas no centro de Brasília.',
                'image' => 'images/parceiros/patio_brasil.jpeg',
                'surface_hex' => '#FFFFFF',
                'is_dark_surface' => false,
                'crop_vertical_padding' => false,
            ],
            [
                'name' => 'PDS Digital Solutions',
                'category' => 'tecnologia-gestao',
                'category_label' => 'Tecnologia & Gestão',
                'badge' => 'Tecnologia & Web',
                'description' => 'Piccinini Digital Solutions — criação de landing pages, sites e sistemas personalizados.',
                'image' => 'images/parceiros/pds.jpeg',
                'surface_hex' => '#F7F7F7',
                'is_dark_surface' => false,
                'crop_vertical_padding' => false,
            ],
            [
                'name' => 'Sport Life',
                'category' => 'experiencia-lifestyle',
                'category_label' => 'Experiência & Lifestyle',
                'badge' => 'Tiro Esportivo',
                'description' => 'Foco, precisão técnica e disciplina aplicados ao esporte de alto rendimento.',
                'image' => 'images/parceiros/sport_life.jpeg',
                'surface_hex' => '#FFFFFF',
                'is_dark_surface' => false,
                'crop_vertical_padding' => false,
            ],
            [
                'name' => 'Ultra Academia',
                'category' => 'esporte-saude',
                'category_label' => 'Esporte & Saúde',
                'badge' => 'Academia Oficial',
                'description' => 'Preparação física, condicionamento e rotina de treino integrada ao movimento.',
                'image' => 'images/parceiros/ultra_academia.jpeg',
                'surface_hex' => '#F7F7F7',
                'is_dark_surface' => false,
                'crop_vertical_padding' => false,
            ],
        ];

        usort(
            $partners,
            static fn (array $first, array $second): int => strcmp(
                Str::lower(Str::ascii($first['name'])),
                Str::lower(Str::ascii($second['name']))
            )
        );

        return $partners;
    }
}
