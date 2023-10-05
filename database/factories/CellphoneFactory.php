<?php

namespace Database\Factories;

use App\Models\Cellphone;
use Illuminate\Database\Eloquent\Factories\Factory;


class CellphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'referencia' => $this->faker->unique()->word(),
            'marca' => $this->faker->randomElement([
                'Apple',
                'Honor',
                'Huawei',
                'Motorola',
                'Nokia',
                'Oppo',
                'Samsung',
                'Vivo',
                'Xiaomi'
            ]),
            'tamano_pantalla' => $this->faker->randomFloat(1, 6, 8),
            'resolucion' => $this->faker->randomElement([
                '750x1334',
                '720x1280',
                '480x800',
                '2560x1600',
                '2560x1440',
                '1440x2560',
                '1334x750',
                '1080x1920'
            ]),
            'marca_procesador' => $this->faker->randomElement([
                'Apple',
                'Geekbench',
                'Google tensor',
                'HiSilicon',
                'Intel',
                'MediaTek',
                'Qualcomm',
                'Samsung Exynos',
                'Snapdragon',
                'Spreadtrum',
                'Unisoc'
            ]),
            'velocidad_procesador' => $this->faker->randomFloat(1, 1, 3),
            'memoria_ram' => $this->faker->randomElement(['2', '3', '4', '6', '8', '12', '16', '32']),
            'memoria_interna' => $this->faker->randomElement(['32', '64', '128', '256', '512', '1024', '2048']),
            'precio' => $this->faker->randomFloat(2, 450000.00, 4000000.00),
            'descuento' => $this->faker->randomFloat(4, 0, 0.5)
        ];
    }
}
