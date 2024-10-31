<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Material;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        for ($i = 0; $i < 10; $i++) {
            Area::create(['nombre' => 'Area ' . ($i+1)]);
        }
        User::create(['name' => 'Adminsitrador','username' => 'admin','password' => bcrypt('admin'),'area_id' => 1,'role' => 'Jefatura']);
        User::factory(10)->create();

//        "PARTIDA
//PPTARIA."	"DESCRIPCION Y/O JUSTIFICACIÓN
//MATERIAL"	CANT.	"UNIDAD DE
//MEDIDA"	PRECIO UNIT. REF.	TOTAL
//32100	PAPEL BOND T/OFICIO 	6,000	Hojas	0.084	504
//32100	PAPEL BOND T/CARTA 	6,000	Hoja	0.072	432
//32100	Papel bond de color T/Carta 	2,000	Hoja	0.158	316
//32100	Papel bond de color T/Oficio	2,000	Hoja	0.17	340
//32200	Papel carbónico tamaño oficio	6	Block	1.03	6.18
//25600	Papel Graf. Pliego de 80 grs.	10	Pzs.	3.5	35
//32200	Papel Sabana pliego	5	Pieza	0.95	4.75
//32200	PAPEL FOTOGRAFICO TAMAÑO OFICIO 240GRS.	50	Pieza	4.5	225
//32200	Papel Couche Tamaño oficio de 200 grs.	30	Pieza	0.44	13.2
//32200	Cartulina hilada, tamaño oficio	50	Pieza	0.8	40
//32200	Pestañas Multicolor Banderillas	25	Pieza	3	11
//32200	Cartulina de color T/Pliego	10	Hoja	2.95	8
//32200	Cuaderno Cuadriculado de 50 hojas 	2	Pieza	2.96	5.92
//32200	Cuaderno Empastado 100 hojas T/ carta	3	Pieza	18.47	55.41
//32200	Cuaderno Empastado 100 hojas T/oficio	3	Pieza	23.62	70.86
//32200	Cuaderno Espiral 100 hojas T/carta	4	Pieza	18	72
//32200	Cuaderno Espiral 100 hojas T/ Oficio	4	Pieza	23	92
//32200	Sobre Manila T/Doble Oficio	50	Pieza	3	150
//32200	Sobre Manila T/ Oficio	60	Pieza	0.85	51
//32200	Sobre Manila T/Carta	50	Pieza	0.8	40
//32200	Archivador de palanca Cuarto Lomo	8	Pieza	16	128
//32200	Archivador de palanca Medio Lomo	8	Pieza	18	144
//32200	Archivador de palanca Lomo Entero	8	Pieza	18	144
//32200	Folder T/ oficio	30	Pieza	0.95	28.5
//32200	Folder T/ carta	30	Pieza	0.95	28.5
//32200	Flips T/Oficio	30	Pieza	2	60
//32200	Post It Note Tamaño Pequeño	4	Pieza	3.5	14
//32200	Post It Note Tamaño Mediano	4	Pieza	4.5	18
//32200	Post It Note Tamaño Grande	4	Pieza	5.5	22
//32200	Tablero t/oficio	2	Pieza	18	36
//39500	Lápiz color Azul	10	Pieza	2.8	28
//39500	Lápiz color Negro	10	Pieza	1.5	15
//39500	Lápiz color Rojo	10	Pieza	2.5	25
//39500	Lápiz color Verde	10	Pieza	4	40
//39500	Boligrafo Pilot de color Azul	50	Pieza	5.5	275
//39500	Boligrafo Pilot de color Negro	50	Pieza	5.5	275
//39500	Boligrafo Pilot de color Rojo	50	Pieza	5.5	275
//39500	Boligrafo de tinta negro G-05	25	Pieza	10.21	255.25
//39500	Boligrafo de tinta Roja G-05	25	Pieza	9.23	230.75
//39500	Marcador de Alcohol color negro	12	Pieza	3.3	39.6
//39500	Marcador de Alcohol color azul	12	Pieza	3.3	39.6
//39500	Marcador de alcohol color rojo 	12	Pieza	3.14	37.68
//39500	Marcador de alcohol color verde	12	Pieza	2.97	35.64
//39500	Marcador de agua color negro	12	Pieza	3.7	44.4
//39500	Marcador de agua color rojo	12	Pieza	3.7	44.4
//39500	Marcador de agua color azul	12	Pieza	3.7	44.4
//39500	Marcador de agua color verde	12	Pieza	3.7	44.4
//39500	Marcador para CD color negro	6	Pieza	3.5	21
//39500	Marcador para CD color azul	6	Pieza	3.5	21
//39500	Masquín de una pulgada	2	Pieza	9.5	19
//39500	Acofaster(caja 50 unidades)	1	Pieza	0.18	0.18
//39500	Clips N° 8	4	Caja	8.5	34
//39500	Clips N° 4	4	Caja	3.8	15.2
//39500	Goma de Borrar	3	Pieza	1.7	5.1
//39500	Grapas 24/6	8	Cajita	3.5	28
//39500	Sacagrapas	1	Pieza	6	6
//39500	Lapiz borrador	6	Pieza	14.9	89.4
//39500	Radex Liquido	2	Bote	5.5	11
//39500	UHU 21 Gr.	4	Pieza	10	40
//39500	Carpicola de 500 ml	1	Bote	19.9	19.9
//39500	Isocola Liquida	2	Bote	8	16
//39500	Estilete con repuesto	2	Pieza	18	36
//39500	Pisapapel de 25 mm 	25	Pieza	0.6	15
//39500	Pisapapel de 41 mm 	25	Pieza	1.2	30
//39500	Pisapapel de 51 mm 	25	Pieza	2.02	50.5
//39500	Espiral para Anillado Nº 25	70	Pieza	3.59	251.3
//39500	Espiral para Anillado Nº 46	70	Pieza	3.14	219.8
//39500	Espiral para encuadernación p/150 Hojas	70	Pieza	3	210
//39500	Tinta para tampo color Negro	1	Bote	22.55	22.55
//39500	Tinta para tampo color Azul	1	Bote	28	28
//39500	Tinta para tampo color Rojo	1	Bote	28	28
//39500	Tampo Grande Negro	1	Pieza	10.21	10.21
//39500	Tampo Mediano azul	1	Pieza	9	9
//39500	Toner para Impresora HP Laser Jet 12A	2	Pieza	630	1260
//39500	Toner para Impresora HP Laser Jet 85A	2	Pieza	630	1260
//39500	DVD -Princo	200	Pieza	1.5	300
//39500	CD -R Princo	100	Pieza	1.5	150
//39500	Porta CDs	2	Pieza	48.8	97.6
//39500	Cinta de Embalaje 100 yardas transparente	2	Pieza	12	24
//39500	Regla Metalica de 30 cm.	2	Pieza	6	12
//39500	Corrector de Cinta 	4	Pieza	6.5	26
//39500	Resaltador Grande color verde	6	Pieza	3.8	22.8
//39500	Resaltador Grande color amarillo	6	Pieza	3.8	22.8
//39500	Resaltador Grande color Naranja	6	Pieza	3.8	22.8
//39500	Resaltador Mediano color amarillo	6	Pieza	3	18
//39500	Resaltador Mediano color verde	6	Pieza	3	18
//39500	Resaltador Mediano color celeste	6	Pieza	3	18
//39500	Tajador de escritorio	1	Pieza	101.5	101.5
//39500	Cordel 	6	Ovillo	17	102
//39500	Tinta para impresora Epson (4 colores) L4150	12	Pieza	89	1068
//39500	tapas para anillado tamaño oficio	70	Pieza	0.7	49
//22210	Pasajes al interior del País Area Urbana	6	Boletos	25.00	150
//22210	Pasajes al interior del País Area Rural	6	Boletos	18.00	108
//22210	Viáticos para viajes Area Urbana	6	Informe	371.00	2226
//22210	Viáticos para viajes Area Rural	6	Informe	222.00	1332
//25600	Servicio de imprenta, fotocopias, empastados	2,000	Pzs.	0.18	360
//31120	Gastos alimentación y otros 	250	pieza	15.00	3750
//43110	Escritorio en L	1	Unidad	6000.00	6000

        Material::create(['partida' => '32100', 'descripcion' => 'PAPEL BOND T/OFICIO', 'cantidad' => 6000, 'unidad' => 'Hojas', 'precio' => 0.084]);
        Material::create(['partida' => '32100', 'descripcion' => 'PAPEL BOND T/CARTA', 'cantidad' => 6000, 'unidad' => 'Hojas', 'precio' => 0.072]);
        Material::create(['partida' => '32100', 'descripcion' => 'Papel bond de color T/Carta', 'cantidad' => 2000, 'unidad' => 'Hojas', 'precio' => 0.158]);
        Material::create(['partida' => '32100', 'descripcion' => 'Papel bond de color T/Oficio', 'cantidad' => 2000, 'unidad' => 'Hojas', 'precio' => 0.17]);
        Material::create(['partida' => '32200', 'descripcion' => 'Papel carbónico tamaño oficio', 'cantidad' => 6, 'unidad' => 'Block', 'precio' => 1.03]);
        Material::create(['partida' => '25600', 'descripcion' => 'Papel Graf. Pliego de 80 grs.', 'cantidad' => 10, 'unidad' => 'Pzs.', 'precio' => 3.5]);
        Material::create(['partida' => '32200', 'descripcion' => 'Papel Sabana pliego', 'cantidad' => 5, 'unidad' => 'Pieza', 'precio' => 0.95]);
        Material::create(['partida' => '32200', 'descripcion' => 'PAPEL FOTOGRAFICO TAMAÑO OFICIO 240GRS.', 'cantidad' => 50, 'unidad' => 'Pieza', 'precio' => 4.5]);
        Material::create(['partida' => '32200', 'descripcion' => 'Papel Couche Tamaño oficio de 200 grs.', 'cantidad' => 30, 'unidad' => 'Pieza', 'precio' => 0.44]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cartulina hilada, tamaño oficio', 'cantidad' => 50, 'unidad' => 'Pieza', 'precio' => 0.8]);
        Material::create(['partida' => '32200', 'descripcion' => 'Pestañas Multicolor Banderillas', 'cantidad' => 25, 'unidad' => 'Pieza', 'precio' => 3]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cartulina de color T/Pliego', 'cantidad' => 10, 'unidad' => 'Hoja', 'precio' => 2.95]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cuaderno Cuadriculado de 50 hojas', 'cantidad' => 2, 'unidad' => 'Pieza', 'precio' => 2.96]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cuaderno Empastado 100 hojas T/ carta', 'cantidad' => 3, 'unidad' => 'Pieza', 'precio' => 18.47]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cuaderno Empastado 100 hojas T/oficio', 'cantidad' => 3, 'unidad' => 'Pieza', 'precio' => 23.62]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cuaderno Espiral 100 hojas T/carta', 'cantidad' => 4, 'unidad' => 'Pieza', 'precio' => 18]);
        Material::create(['partida' => '32200', 'descripcion' => 'Cuaderno Espiral 100 hojas T/ Oficio', 'cantidad' => 4, 'unidad' => 'Pieza', 'precio' => 23]);
        Material::create(['partida' => '32200', 'descripcion' => 'Sobre Manila T/Doble Oficio', 'cantidad' => 50, 'unidad' => 'Pieza', 'precio' => 3]);
        Material::create(['partida' => '32200', 'descripcion' => 'Sobre Manila T/ Oficio', 'cantidad' => 60, 'unidad' => 'Pieza', 'precio' => 0.85]);
        Material::create(['partida' => '32200', 'descripcion' => 'Sobre Manila T/Carta', 'cantidad' => 50, 'unidad' => 'Pieza', 'precio' => 0.8]);
        Material::create(['partida' => '32200', 'descripcion' => 'Archivador de palanca Cuarto Lomo', 'cantidad' => 8, 'unidad' => 'Pieza', 'precio' => 16]);
        Material::create(['partida' => '32200', 'descripcion' => 'Archivador de palanca Medio Lomo', 'cantidad' => 8, 'unidad' => 'Pieza', 'precio' => 18]);
        Material::create(['partida' => '32200', 'descripcion' => 'Archivador de palanca Lomo Entero', 'cantidad' => 8, 'unidad' => 'Pieza', 'precio' => 18]);
        Material::create(['partida' => '32200', 'descripcion' => 'Folder T/ oficio', 'cantidad' => 30, 'unidad' => 'Pieza', 'precio' => 0.95]);
        Material::create(['partida' => '32200', 'descripcion' => 'Folder T/ carta', 'cantidad' => 30, 'unidad' => 'Pieza', 'precio' => 0.95]);
        Material::create(['partida' => '32200', 'descripcion' => 'Flips T/Oficio', 'cantidad' => 30, 'unidad' => 'Pieza', 'precio' => 2]);
        Material::create(['partida' => '32200', 'descripcion' => 'Post It Note Tamaño Pequeño', 'cantidad' => 4, 'unidad' => 'Pieza', 'precio' => 3.5]);
        Material::create(['partida' => '32200', 'descripcion' => 'Post It Note Tamaño Mediano', 'cantidad' => 4, 'unidad' => 'Pieza', 'precio' => 4.5]);
        Material::create(['partida' => '32200', 'descripcion' => 'Post It Note Tamaño Grande', 'cantidad' => 4, 'unidad' => 'Pieza', 'precio' => 5.5]);
        Material::create(['partida' => '32200', 'descripcion' => 'Tablero t/oficio', 'cantidad' => 2, 'unidad' => 'Pieza', 'precio' => 18]);
        Material::create(['partida' => '39500', 'descripcion' => 'Lápiz color Azul', 'cantidad' => 10, 'unidad' => 'Pieza', 'precio' => 2.8]);

    }
}
